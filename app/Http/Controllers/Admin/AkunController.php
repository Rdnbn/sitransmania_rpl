<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AkunController extends Controller
{
    public function index()
    {
        return view('admin.akun.index');
    }

    public function store()
    {
        // isi sesuai kebutuhan
    }

    public function destroy($id)
    {
        // isi sesuai kebutuhan
    }

    public function reset($id)
    {
        // isi sesuai kebutuhan
    }
}
