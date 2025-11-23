<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function index()
    {
        return view('pemilik.aktivitas.index');
    }
}
