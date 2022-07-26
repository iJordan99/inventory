<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        return view('warehouse.index', [
            'warehouses' => Warehouse::all(),
        ]);
    }

    public function show(Warehouse $warehouse)
    {
        return view('warehouse.show', [
            'warehouse' => $warehouse,
            'items' => Warehouse::find($warehouse->id)->items
        ]);
    }
}
