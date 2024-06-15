<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Product;
use Yajra\DataTables\Facades\DataTables;

class C_Product extends Controller
{
    public function index()
    {
        $data = M_Product::orderBy('nama_produk', 'asc');
        return DataTables::of($data)->make(true);
    }
}
