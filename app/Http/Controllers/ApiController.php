<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function Api(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'code' => 200,
            'lResult' => [
                [
                    'nombre' => 'Sinergia',
                    'description' => 'Lorem impusn qwewewqe',
                    'path' => '/images/imagen1.JPG',
                    'price' => 100,
                    'stock' => 20
                ],
                [
                    'nombre' => 'Optimend',
                    'description' => 'Lorem impusn qwewewqe',
                    'path' => '/images/imagen2.JPG',
                    'price' => 200,
                    'stock' => 20
                ],
                [
                    'nombre' => 'Linq',
                    'description' => 'Lorem impusn qwewewqe',
                    'path' => '/images/imagen3.JPG',
                    'price' => 300,
                    'stock' => 20
                ],
                [
                    'nombre' => 'GNM-X',
                    'description' => 'Lorem impusn qwewewqe',
                    'path' => '/images/imagen1.JPG',
                    'price' => 400,
                    'stock' => 20
                ],
                [
                    'nombre' => 'Optimend',
                    'description' => 'Lorem impusn qwewewqe',
                    'path' => '/images/imagen1.JPG',
                    'price' => 500,
                    'stock' => 20
                ]
            ]
        ]);
    }

    public function ApiCarousel() {
        return response()->json([
            'message' => 'success',
            'code' => 200,
            'lResult' => [
                [
                    'nombre' => 'hpscience',
                    'description' => 'Lorem impusn qwewewqe',
                    'path' => '/images/hpscience.jpg',
                ],
                [
                    'nombre' => 'hpmotherdaughter',
                    'description' => 'Lorem impusn qwewewqe',
                    'path' => '/images/hpmotherdaughter.jpg',
                ],
            ]
        ]);
    }
}
