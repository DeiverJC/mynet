<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContractDetailRequest;
use App\Http\Requests\UpdateContractDetailRequest;
use App\Repositories\ContractDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ContractDetailController extends AppBaseController
{
    /** @var  ContractDetailRepository */
    private $contractDetailRepository;

    public function __construct(ContractDetailRepository $contractDetailRepo)
    {
        $this->contractDetailRepository = $contractDetailRepo;
    }

    /**
     * Display a listing of the ContractDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contractDetailRepository->pushCriteria(new RequestCriteria($request));
        $contractDetails = $this->contractDetailRepository->all();

        return view('contract_details.index')
            ->with('contractDetails', $contractDetails);
    }

    /**
     * Show the form for creating a new ContractDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('contract_details.create');
    }

    /**
     * Store a newly created ContractDetail in storage.
     *
     * @param CreateContractDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateContractDetailRequest $request)
    {
        $input = $request->all();

        $contractDetail = $this->contractDetailRepository->create($input);

        Flash::success('Contract Detail saved successfully.');

        return redirect(route('contractDetails.index'));
    }

    /**
     * Display the specified ContractDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contractDetail = $this->contractDetailRepository->findWithoutFail($id);

        if (empty($contractDetail)) {
            Flash::error('Contract Detail not found');

            return redirect(route('contractDetails.index'));
        }

        return view('contract_details.show')->with('contractDetail', $contractDetail);
    }

    /**
     * Show the form for editing the specified ContractDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contractDetail = $this->contractDetailRepository->findWithoutFail($id);

        if (empty($contractDetail)) {
            Flash::error('Contract Detail not found');

            return redirect(route('contractDetails.index'));
        }

        return view('contract_details.edit')->with('contractDetail', $contractDetail);
    }

    /**
     * Update the specified ContractDetail in storage.
     *
     * @param  int              $id
     * @param UpdateContractDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContractDetailRequest $request)
    {
        $contractDetail = $this->contractDetailRepository->findWithoutFail($id);

        if (empty($contractDetail)) {
            Flash::error('Contract Detail not found');

            return redirect(route('contractDetails.index'));
        }

        $contractDetail = $this->contractDetailRepository->update($request->all(), $id);

        Flash::success('Contract Detail updated successfully.');

        return redirect(route('contractDetails.index'));
    }

    /**
     * Remove the specified ContractDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contractDetail = $this->contractDetailRepository->findWithoutFail($id);

        if (empty($contractDetail)) {
            Flash::error('Contract Detail not found');

            return redirect(route('contractDetails.index'));
        }

        $this->contractDetailRepository->delete($id);

        Flash::success('Contract Detail deleted successfully.');

        return redirect(route('contractDetails.index'));
    }
}
