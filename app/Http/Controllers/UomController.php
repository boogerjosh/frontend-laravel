<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UomController extends Controller
{
    public function index()
    {
        $uomOptions = [
            ['id' => 1, 'name' => 'UOM'],
            ['id' => 2, 'name' => 'TEST'],
            ['id' => 3, 'name' => 'TEST'],
        ];

        return response()->json($uomOptions);
    }
}
