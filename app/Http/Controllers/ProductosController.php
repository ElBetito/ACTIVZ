<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function details($data)
    {
        return view('productos.details', [
            'data' => $data
        ]);
    }
}
