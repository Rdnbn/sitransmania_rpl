<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;

class NotifikasiController extends Controller
{
    public function index()
    {
        return view('admin.notifikasi.index', [
            'notif' => Notifikasi::latest()->get()
        ]);
    }

    public function read($id)
    {
        $notif = Notifikasi::findOrFail($id);
        $notif->is_read = 1;
        $notif->save();

        return back();
    }
}
