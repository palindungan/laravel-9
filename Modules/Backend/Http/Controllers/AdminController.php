<?php

namespace Modules\Backend\Http\Controllers;

use Modules\Backend\DataTables\AdminDataTable;
use Modules\Backend\Http\Requests\CreateAdminRequest;
use Modules\Backend\Http\Requests\UpdateAdminRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Hash;
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
        return $adminDataTable->render('backend::admins.index');
    }


    /**
     * Show the form for creating a new Admin.
     */
    public function create()
    {
        return view('backend::admins.create');
    }

    /**
     * Store a newly created Admin in storage.
     */
    public function store(CreateAdminRequest $request)
    {
        $input = $request->all();

        $update_media = $this->updateMedia([], $request);
        $input['photo'] = $update_media['photo'];

        $input['password'] = Hash::make($input['password']);

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

        return view('backend::admins.show')->with('admin', $admin);
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

        return view('backend::admins.edit')->with('admin', $admin);
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

        $input = $request->all();

        $update_media = $this->updateMedia(["admin" => $admin], $request);
        $input['photo'] = $update_media['photo'];

        $input['password'] = $admin->password;
        if (!empty($request->password)) {
            $input['password'] = Hash::make($request->password);
        }
    
        $admin = $this->adminRepository->update($input, $id);

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

        if (!empty($admin->photo)) {
            if (Storage::disk('admins')->exists($admin->photo)) {
                Storage::disk('admins')->delete($admin->photo);
            }
        }

        $this->adminRepository->delete($id);

        Flash::success('Admin deleted successfully.');

        return redirect(route('admins.index'));
    }

    public function updateMedia($param = [], $request = null)
    {
        // photo
        $input['photo'] = @$param['admin']->photo;
        if ($request->hasFile('photo')) {
            // delete old image
            if (!empty($input['photo'])) {
                if (Storage::disk('admins')->exists($input['photo'])) {
                    Storage::disk('admins')->delete($input['photo']);
                }
            }

            $file = $request->file('photo');
            $name_file = $file->getClientOriginalName();
            $custom_name_file = 'photo' . 'f' . time() . '.' . $file->extension();

            $ori = $file->storeAs(
                'photo' . '/' . date('Ym'),
                $custom_name_file,
                'admins'
            );

            $input['photo'] = $ori;
        }

        return $input;
    }
}
