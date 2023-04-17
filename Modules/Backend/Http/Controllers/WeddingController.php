<?php

namespace Modules\Backend\Http\Controllers;

use Modules\Backend\DataTables\WeddingDataTable;
use Modules\Backend\Http\Requests\CreateWeddingRequest;
use Modules\Backend\Http\Requests\UpdateWeddingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WeddingRepository;
use Illuminate\Http\Request;
use Flash;

class WeddingController extends AppBaseController
{
    /** @var WeddingRepository $weddingRepository*/
    private $weddingRepository;

    public function __construct(WeddingRepository $weddingRepo)
    {
        $this->weddingRepository = $weddingRepo;
    }

    /**
     * Display a listing of the Wedding.
     */
    public function index(WeddingDataTable $weddingDataTable)
    {
        return $weddingDataTable->render('backend::weddings.index');
    }


    /**
     * Show the form for creating a new Wedding.
     */
    public function create()
    {
        return view('backend::weddings.create');
    }

    /**
     * Store a newly created Wedding in storage.
     */
    public function store(CreateWeddingRequest $request)
    {
        $input = $request->all();

        $wedding = $this->weddingRepository->create($input);

        Flash::success('Wedding saved successfully.');

        return redirect(route('weddings.index'));
    }

    /**
     * Display the specified Wedding.
     */
    public function show($id)
    {
        $wedding = $this->weddingRepository->find($id);

        if (empty($wedding)) {
            Flash::error('Wedding not found');

            return redirect(route('weddings.index'));
        }

        return view('backend::weddings.show')->with('wedding', $wedding);
    }

    /**
     * Show the form for editing the specified Wedding.
     */
    public function edit($id)
    {
        $wedding = $this->weddingRepository->find($id);

        if (empty($wedding)) {
            Flash::error('Wedding not found');

            return redirect(route('weddings.index'));
        }

        return view('backend::weddings.edit')->with('wedding', $wedding);
    }

    /**
     * Update the specified Wedding in storage.
     */
    public function update($id, UpdateWeddingRequest $request)
    {
        $wedding = $this->weddingRepository->find($id);

        if (empty($wedding)) {
            Flash::error('Wedding not found');

            return redirect(route('weddings.index'));
        }

        $wedding = $this->weddingRepository->update($request->all(), $id);

        Flash::success('Wedding updated successfully.');

        return redirect(route('weddings.index'));
    }

    /**
     * Remove the specified Wedding from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wedding = $this->weddingRepository->find($id);

        if (empty($wedding)) {
            Flash::error('Wedding not found');

            return redirect(route('weddings.index'));
        }

        $this->weddingRepository->delete($id);

        Flash::success('Wedding deleted successfully.');

        return redirect(route('weddings.index'));
    }
}
