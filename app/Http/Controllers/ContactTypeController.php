<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactTypeRequest;
use App\Http\Requests\UpdateContactTypeRequest;
use App\Repositories\ContactTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ContactTypeController extends AppBaseController
{
    /** @var  ContactTypeRepository */
    private $contactTypeRepository;

    public function __construct(ContactTypeRepository $contactTypeRepo)
    {
        $this->contactTypeRepository = $contactTypeRepo;
    }

    /**
     * Display a listing of the ContactType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contactTypeRepository->pushCriteria(new RequestCriteria($request));
        $contactTypes = $this->contactTypeRepository->all();

        return view('contact_types.index')
            ->with('contactTypes', $contactTypes);
    }

    /**
     * Show the form for creating a new ContactType.
     *
     * @return Response
     */
    public function create()
    {
        return view('contact_types.create');
    }

    /**
     * Store a newly created ContactType in storage.
     *
     * @param CreateContactTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateContactTypeRequest $request)
    {
        $input = $request->all();

        $contactType = $this->contactTypeRepository->create($input);

        Flash::success('Contact Type saved successfully.');

        return redirect(route('contactTypes.index'));
    }

    /**
     * Display the specified ContactType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('contactTypes.index'));
        }

        return view('contact_types.show')->with('contactType', $contactType);
    }

    /**
     * Show the form for editing the specified ContactType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('contactTypes.index'));
        }

        return view('contact_types.edit')->with('contactType', $contactType);
    }

    /**
     * Update the specified ContactType in storage.
     *
     * @param  int              $id
     * @param UpdateContactTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactTypeRequest $request)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('contactTypes.index'));
        }

        $contactType = $this->contactTypeRepository->update($request->all(), $id);

        Flash::success('Contact Type updated successfully.');

        return redirect(route('contactTypes.index'));
    }

    /**
     * Remove the specified ContactType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('contactTypes.index'));
        }

        $this->contactTypeRepository->delete($id);

        Flash::success('Contact Type deleted successfully.');

        return redirect(route('contactTypes.index'));
    }
}
