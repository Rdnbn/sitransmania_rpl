<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LainnyaController extends Controller
{
    public function settings()
    {
        return view('pemilik.lainnya.settings');
    }
}
