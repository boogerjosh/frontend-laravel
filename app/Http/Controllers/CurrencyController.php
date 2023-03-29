<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencyOptions = [
            ['id' => 1, 'name' => 'USD'],
            ['id' => 2, 'name' => 'AED'],
            ['id' => 3, 'name' => 'IDR'],
        ];

        return response()->json($currencyOptions);
    }
}
