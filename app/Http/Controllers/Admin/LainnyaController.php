<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LainnyaController extends Controller
{
    public function settings()
    {
        return view('admin.lainnya.settings');
    }

    public function laporan()
    {
        return view('admin.lainnya.laporan');
    }
}
