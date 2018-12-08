<?php

namespace App\Http\Controllers;

use App\DataTables\InventoryAdjustmentDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInventoryAdjustmentRequest;
use App\Http\Requests\UpdateInventoryAdjustmentRequest;
use App\Repositories\InventoryAdjustmentRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class InventoryAdjustmentController extends AppBaseController
{
    /** @var  InventoryAdjustmentRepository */
    private $inventoryAdjustmentRepository;

    public function __construct(InventoryAdjustmentRepository $inventoryAdjustmentRepo)
    {
        $this->inventoryAdjustmentRepository = $inventoryAdjustmentRepo;
    }

    /**
     * Display a listing of the InventoryAdjustment.
     *
     * @param InventoryAdjustmentDataTable $inventoryAdjustmentDataTable
     * @return Response
     */
    public function index(InventoryAdjustmentDataTable $inventoryAdjustmentDataTable)
    {
        return $inventoryAdjustmentDataTable->render('inventory_adjustments.index');
    }

    /**
     * Show the form for creating a new InventoryAdjustment.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventory_adjustments.create');
    }

    /**
     * Store a newly created InventoryAdjustment in storage.
     *
     * @param CreateInventoryAdjustmentRequest $request
     *
     * @return Response
     */
    public function store(CreateInventoryAdjustmentRequest $request)
    {
        $input = $request->all();

        $inventoryAdjustment = $this->inventoryAdjustmentRepository->create($input);

        Flash::success('Inventory Adjustment saved successfully.');

        return redirect(route('inventoryAdjustments.index'));
    }

    /**
     * Display the specified InventoryAdjustment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventoryAdjustment = $this->inventoryAdjustmentRepository->findWithoutFail($id);

        if (empty($inventoryAdjustment)) {
            Flash::error('Inventory Adjustment not found');

            return redirect(route('inventoryAdjustments.index'));
        }

        return view('inventory_adjustments.show')->with('inventoryAdjustment', $inventoryAdjustment);
    }

    /**
     * Show the form for editing the specified InventoryAdjustment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventoryAdjustment = $this->inventoryAdjustmentRepository->findWithoutFail($id);

        if (empty($inventoryAdjustment)) {
            Flash::error('Inventory Adjustment not found');

            return redirect(route('inventoryAdjustments.index'));
        }

        return view('inventory_adjustments.edit')->with('inventoryAdjustment', $inventoryAdjustment);
    }

    /**
     * Update the specified InventoryAdjustment in storage.
     *
     * @param  int              $id
     * @param UpdateInventoryAdjustmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInventoryAdjustmentRequest $request)
    {
        $inventoryAdjustment = $this->inventoryAdjustmentRepository->findWithoutFail($id);

        if (empty($inventoryAdjustment)) {
            Flash::error('Inventory Adjustment not found');

            return redirect(route('inventoryAdjustments.index'));
        }

        $inventoryAdjustment = $this->inventoryAdjustmentRepository->update($request->all(), $id);

        Flash::success('Inventory Adjustment updated successfully.');

        return redirect(route('inventoryAdjustments.index'));
    }

    /**
     * Remove the specified InventoryAdjustment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inventoryAdjustment = $this->inventoryAdjustmentRepository->findWithoutFail($id);

        if (empty($inventoryAdjustment)) {
            Flash::error('Inventory Adjustment not found');

            return redirect(route('inventoryAdjustments.index'));
        }

        $this->inventoryAdjustmentRepository->delete($id);

        Flash::success('Inventory Adjustment deleted successfully.');

        return redirect(route('inventoryAdjustments.index'));
    }
}
