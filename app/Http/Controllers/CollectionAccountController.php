<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCollectionAccountRequest;
use App\Http\Requests\UpdateCollectionAccountRequest;
use App\Repositories\CollectionAccountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CollectionAccountController extends AppBaseController
{
    /** @var  CollectionAccountRepository */
    private $collectionAccountRepository;

    public function __construct(CollectionAccountRepository $collectionAccountRepo)
    {
        $this->collectionAccountRepository = $collectionAccountRepo;
    }

    /**
     * Display a listing of the CollectionAccount.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->collectionAccountRepository->pushCriteria(new RequestCriteria($request));
        $collectionAccounts = $this->collectionAccountRepository->all();

        return view('collection_accounts.index')
            ->with('collectionAccounts', $collectionAccounts);
    }

    /**
     * Show the form for creating a new CollectionAccount.
     *
     * @return Response
     */
    public function create()
    {
        return view('collection_accounts.create');
    }

    /**
     * Store a newly created CollectionAccount in storage.
     *
     * @param CreateCollectionAccountRequest $request
     *
     * @return Response
     */
    public function store(CreateCollectionAccountRequest $request)
    {
        $input = $request->all();

        $collectionAccount = $this->collectionAccountRepository->create($input);

        Flash::success('Collection Account saved successfully.');

        return redirect(route('collectionAccounts.index'));
    }

    /**
     * Display the specified CollectionAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $collectionAccount = $this->collectionAccountRepository->findWithoutFail($id);

        if (empty($collectionAccount)) {
            Flash::error('Collection Account not found');

            return redirect(route('collectionAccounts.index'));
        }

        return view('collection_accounts.show')->with('collectionAccount', $collectionAccount);
    }

    /**
     * Show the form for editing the specified CollectionAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $collectionAccount = $this->collectionAccountRepository->findWithoutFail($id);

        if (empty($collectionAccount)) {
            Flash::error('Collection Account not found');

            return redirect(route('collectionAccounts.index'));
        }

        return view('collection_accounts.edit')->with('collectionAccount', $collectionAccount);
    }

    /**
     * Update the specified CollectionAccount in storage.
     *
     * @param  int              $id
     * @param UpdateCollectionAccountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCollectionAccountRequest $request)
    {
        $collectionAccount = $this->collectionAccountRepository->findWithoutFail($id);

        if (empty($collectionAccount)) {
            Flash::error('Collection Account not found');

            return redirect(route('collectionAccounts.index'));
        }

        $collectionAccount = $this->collectionAccountRepository->update($request->all(), $id);

        Flash::success('Collection Account updated successfully.');

        return redirect(route('collectionAccounts.index'));
    }

    /**
     * Remove the specified CollectionAccount from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $collectionAccount = $this->collectionAccountRepository->findWithoutFail($id);

        if (empty($collectionAccount)) {
            Flash::error('Collection Account not found');

            return redirect(route('collectionAccounts.index'));
        }

        $this->collectionAccountRepository->delete($id);

        Flash::success('Collection Account deleted successfully.');

        return redirect(route('collectionAccounts.index'));
    }
}
