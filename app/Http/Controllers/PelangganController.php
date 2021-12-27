<?php

namespace App\Http\Controllers;

use App\Model\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function senarai()
    {
        $customers = Pelanggan::all();

        dd($customers);
    
    
        return view('customers', [
            'pelanggan' => $customers
        ]);

    }
}
