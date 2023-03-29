<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeToController extends Controller
{
    public function index()
    {
        $chargeToOptions = [
            ['id' => 1, 'name' => 'Charge To 1'],
            ['id' => 2, 'name' => 'Charge To 2'],
            ['id' => 3, 'name' => 'Charge To 3'],
        ];

        return response()->json($chargeToOptions);
    }
}
