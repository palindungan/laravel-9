<?php

namespace App\Http\Controllers;

use App\DataTables\AdminDataTable;
use App\Exports\AdminsExport;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminRepository;
use Flash;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class AdminController extends AppBaseController
{
    /** @var AdminRepository $adminRepository*/
    private $adminRepository;

    public function __construct(AdminRepository $adminRepo)
    {
        $this->adminRepository = $adminRepo;
    }

    /**
     * Display a listing of the Admin.
     */
    public function index(AdminDataTable $adminDataTable)
    {
        return $adminDataTable->render('admins.index');
    }


    /**
     * Show the form for creating a new Admin.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created Admin in storage.
     */
    public function store(CreateAdminRequest $request)
    {
        $input = $request->all();

        $update_media = $this->updateMedia([], $request);
        $input['photo'] = $update_media['photo'];
        $input['attachment'] = $update_media['attachment'];

        $admin = $this->adminRepository->create($input);

        Flash::success('Admin saved successfully.');

        return redirect(route('admins.index'));
    }

    /**
     * Display the specified Admin.
     */
    public function show($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admins.index'));
        }

        return view('admins.show')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified Admin.
     */
    public function edit($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admins.index'));
        }

        return view('admins.edit')->with('admin', $admin);
    }

    /**
     * Update the specified Admin in storage.
     */
    public function update($id, UpdateAdminRequest $request)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admins.index'));
        }

        $update_media = $this->updateMedia(["admin" => $admin], $request);
        $input['photo'] = $update_media['photo'];
        $input['attachment'] = $update_media['attachment'];

        $admin = $this->adminRepository->update($request->all(), $id);

        Flash::success('Admin updated successfully.');

        return redirect(route('admins.index'));
    }

    /**
     * Remove the specified Admin from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admins.index'));
        }

        $this->adminRepository->delete($id);

        Flash::success('Admin deleted successfully.');

        return redirect(route('admins.index'));
    }

    public function export()
    {
        if (request()->type == "excel") {
            return Excel::download(new AdminsExport, 'excel.xlsx');
        }

        if (request()->type == "pdf") {
            $pdf = Pdf::loadView('welcome', []);
            return $pdf->download('welcome.pdf');
        }
    }

    public function generateDocx()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $description = "Lorem ipsum";

        $section->addImage("http://itsolutionstuff.com/frontTheme/images/logo.png");
        $section->addText($description);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }

        return response()->download(storage_path('helloWorld.docx'));
    }

    public function updateMedia($param = [], $request = null)
    {
        // photo
        $input['photo'] = @$param['admin']->photo;
        if ($request->hasFile('photo')) {
            // delete old image
            if (!empty($input['photo'])) {
                if (Storage::disk('media')->exists($input['photo'])) {
                    Storage::disk('media')->delete($input['photo']);
                }
            }

            $file = $request->file('photo');
            $name_file = $file->getClientOriginalName();
            $custom_name_file = 'photo' . 'f' . time() . '.' . $file->extension();

            $ori = $file->storeAs(
                date('Ym'),
                $custom_name_file,
                'media'
            );

            $input['photo'] = $ori;
        }

        // attachment
        $input['attachment'] = @$param['admin']->attachment;
        if ($request->hasFile('attachment')) {
            // delete old image
            if (!empty($input['attachment'])) {
                if (Storage::disk('document')->exists($input['attachment'])) {
                    Storage::disk('document')->delete($input['attachment']);
                }
            }

            $file = $request->file('attachment');
            $name_file = $file->getClientOriginalName();
            $custom_name_file = 'attachment' . 'f' . time() . '.' . $file->extension();

            $ori = $file->storeAs(
                date('Ym'),
                $custom_name_file,
                'document'
            );

            $input['attachment'] = $ori;
        }

        return $input;
    }
}
