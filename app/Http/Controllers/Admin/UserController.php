<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'role' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password123'),
            'role' => $request->role
        ]);

        return redirect()->back()->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin.users.edit', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        User::findOrFail($id)->update($request->all());

        return redirect()->back()->with('success', 'User berhasil diperbarui');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->back()->with('success', 'User berhasil dihapus');
    }

    // Reset Password
    public function resetPassword($id)
    {
        $user = User::findOrFail($id);
        $user->password = Hash::make("password123");
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil direset');
    }
}
