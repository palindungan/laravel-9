<?php

namespace Modules\Backend\Http\Controllers;

use Modules\Backend\DataTables\PhotoGalleryDataTable;
use Modules\Backend\Http\Requests\CreatePhotoGalleryRequest;
use Modules\Backend\Http\Requests\UpdatePhotoGalleryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PhotoGalleryRepository;
use Illuminate\Http\Request;
use Flash;

class PhotoGalleryController extends AppBaseController
{
    /** @var PhotoGalleryRepository $photoGalleryRepository*/
    private $photoGalleryRepository;

    public function __construct(PhotoGalleryRepository $photoGalleryRepo)
    {
        $this->photoGalleryRepository = $photoGalleryRepo;
    }

    /**
     * Display a listing of the PhotoGallery.
     */
    public function index(PhotoGalleryDataTable $photoGalleryDataTable)
    {
    return $photoGalleryDataTable->render('backend::photo_galleries.index');
    }


    /**
     * Show the form for creating a new PhotoGallery.
     */
    public function create()
    {
        return view('backend::photo_galleries.create');
    }

    /**
     * Store a newly created PhotoGallery in storage.
     */
    public function store(CreatePhotoGalleryRequest $request)
    {
        $input = $request->all();

        $photoGallery = $this->photoGalleryRepository->create($input);

        Flash::success('Photo Gallery saved successfully.');

        return redirect(route('photoGalleries.index'));
    }

    /**
     * Display the specified PhotoGallery.
     */
    public function show($id)
    {
        $photoGallery = $this->photoGalleryRepository->find($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        return view('backend::photo_galleries.show')->with('photoGallery', $photoGallery);
    }

    /**
     * Show the form for editing the specified PhotoGallery.
     */
    public function edit($id)
    {
        $photoGallery = $this->photoGalleryRepository->find($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        return view('backend::photo_galleries.edit')->with('photoGallery', $photoGallery);
    }

    /**
     * Update the specified PhotoGallery in storage.
     */
    public function update($id, UpdatePhotoGalleryRequest $request)
    {
        $photoGallery = $this->photoGalleryRepository->find($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        $photoGallery = $this->photoGalleryRepository->update($request->all(), $id);

        Flash::success('Photo Gallery updated successfully.');

        return redirect(route('photoGalleries.index'));
    }

    /**
     * Remove the specified PhotoGallery from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $photoGallery = $this->photoGalleryRepository->find($id);

        if (empty($photoGallery)) {
            Flash::error('Photo Gallery not found');

            return redirect(route('photoGalleries.index'));
        }

        $this->photoGalleryRepository->delete($id);

        Flash::success('Photo Gallery deleted successfully.');

        return redirect(route('photoGalleries.index'));
    }
}
