<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeContactRequest;
use App\Http\Requests\UpdateTypeContactRequest;
use App\Repositories\TypeContactRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TypeContactController extends AppBaseController
{
    /** @var  TypeContactRepository */
    private $typeContactRepository;

    public function __construct(TypeContactRepository $typeContactRepo)
    {
        $this->typeContactRepository = $typeContactRepo;
    }

    /**
     * Display a listing of the TypeContact.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->typeContactRepository->pushCriteria(new RequestCriteria($request));
        $typeContacts = $this->typeContactRepository->all();

        return view('type_contacts.index')
            ->with('typeContacts', $typeContacts);
    }

    /**
     * Show the form for creating a new TypeContact.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_contacts.create');
    }

    /**
     * Store a newly created TypeContact in storage.
     *
     * @param CreateTypeContactRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeContactRequest $request)
    {
        $input = $request->all();

        $typeContact = $this->typeContactRepository->create($input);

        Flash::success('Type Contact saved successfully.');

        return redirect(route('typeContacts.index'));
    }

    /**
     * Display the specified TypeContact.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeContact = $this->typeContactRepository->findWithoutFail($id);

        if (empty($typeContact)) {
            Flash::error('Type Contact not found');

            return redirect(route('typeContacts.index'));
        }

        return view('type_contacts.show')->with('typeContact', $typeContact);
    }

    /**
     * Show the form for editing the specified TypeContact.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeContact = $this->typeContactRepository->findWithoutFail($id);

        if (empty($typeContact)) {
            Flash::error('Type Contact not found');

            return redirect(route('typeContacts.index'));
        }

        return view('type_contacts.edit')->with('typeContact', $typeContact);
    }

    /**
     * Update the specified TypeContact in storage.
     *
     * @param  int              $id
     * @param UpdateTypeContactRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeContactRequest $request)
    {
        $typeContact = $this->typeContactRepository->findWithoutFail($id);

        if (empty($typeContact)) {
            Flash::error('Type Contact not found');

            return redirect(route('typeContacts.index'));
        }

        $typeContact = $this->typeContactRepository->update($request->all(), $id);

        Flash::success('Type Contact updated successfully.');

        return redirect(route('typeContacts.index'));
    }

    /**
     * Remove the specified TypeContact from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeContact = $this->typeContactRepository->findWithoutFail($id);

        if (empty($typeContact)) {
            Flash::error('Type Contact not found');

            return redirect(route('typeContacts.index'));
        }

        $this->typeContactRepository->delete($id);

        Flash::success('Type Contact deleted successfully.');

        return redirect(route('typeContacts.index'));
    }
}
