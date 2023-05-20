<?php

namespace Modules\Backend\Http\Controllers;

use Modules\Backend\DataTables\GreetingDataTable;
use Modules\Backend\Http\Requests\CreateGreetingRequest;
use Modules\Backend\Http\Requests\UpdateGreetingRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Guest;
use App\Repositories\GreetingRepository;
use Illuminate\Http\Request;
use Flash;

class GreetingController extends AppBaseController
{
    /** @var GreetingRepository $greetingRepository*/
    private $greetingRepository;

    public function __construct(GreetingRepository $greetingRepo)
    {
        $this->greetingRepository = $greetingRepo;
    }

    /**
     * Display a listing of the Greeting.
     */
    public function index(GreetingDataTable $greetingDataTable)
    {
        return $greetingDataTable->render('backend::greetings.index');
    }


    /**
     * Show the form for creating a new Greeting.
     */
    public function create()
    {
        $guests = [null => 'Pilih Data'] + Guest::select('id', 'name')->get()->pluck('name', 'id')->toArray();
    
        return view('backend::greetings.create', 
            compact(
                "guests",
            )
        );
    }

    /**
     * Store a newly created Greeting in storage.
     */
    public function store(CreateGreetingRequest $request)
    {
        $input = $request->all();

        $greeting = $this->greetingRepository->create($input);

        Flash::success('Greeting saved successfully.');

        return redirect(route('greetings.index'));
    }

    /**
     * Display the specified Greeting.
     */
    public function show($id)
    {
        $greeting = $this->greetingRepository->find($id);

        if (empty($greeting)) {
            Flash::error('Greeting not found');

            return redirect(route('greetings.index'));
        }

        return view('backend::greetings.show')->with('greeting', $greeting);
    }

    /**
     * Show the form for editing the specified Greeting.
     */
    public function edit($id)
    {
        $greeting = $this->greetingRepository->find($id);

        if (empty($greeting)) {
            Flash::error('Greeting not found');

            return redirect(route('greetings.index'));
        }

        $guests = [null => 'Pilih Data'] + Guest::select('id', 'name')->get()->pluck('name', 'id')->toArray();

        return view('backend::greetings.edit', 
            compact(
                "guests",
            )
        )->with('greeting', $greeting);
    }

    /**
     * Update the specified Greeting in storage.
     */
    public function update($id, UpdateGreetingRequest $request)
    {
        $greeting = $this->greetingRepository->find($id);

        if (empty($greeting)) {
            Flash::error('Greeting not found');

            return redirect(route('greetings.index'));
        }

        $greeting = $this->greetingRepository->update($request->all(), $id);

        Flash::success('Greeting updated successfully.');

        return redirect(route('greetings.index'));
    }

    /**
     * Remove the specified Greeting from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $greeting = $this->greetingRepository->find($id);

        if (empty($greeting)) {
            Flash::error('Greeting not found');

            return redirect(route('greetings.index'));
        }

        $this->greetingRepository->delete($id);

        Flash::success('Greeting deleted successfully.');

        return redirect(route('greetings.index'));
    }
}
