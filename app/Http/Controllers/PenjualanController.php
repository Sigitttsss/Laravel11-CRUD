<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function show(): View
    {
        return view('konten.penjualan');
    }
}
