<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function senarai()
    {
        $customers = [
            'Fauzan',
            'Mosalah',
            'Firmino',
            'Hariz'
        ];
    
    
        return view('customers', [
            'pelanggan' => $customers
        ]);

    }
}
