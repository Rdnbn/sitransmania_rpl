<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LainnyaController extends Controller
{
    public function settings()
    {
        return view('peminjam.lainnya.settings');
    }
}
