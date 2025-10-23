<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['dataUser'] = user::all();
        return view('admin.user.index', $data);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {

        //dd($request->all());

        $data['name'] = $request->name;
        $data['email']  = $request->email;
        $data['password']   = $request->password;

        User::create($data);

        return redirect()->route('user.index')->with('create', 'Penambahan Data Berhasil!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data['dataUser'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $pelanggan_id = $id;
        $pelanggan    = Pelanggan::findOrFail($pelanggan_id);

        $pelanggan->first_name = $request->first_name;
        $pelanggan->last_name  = $request->last_name;
        $pelanggan->birthday   = $request->birthday;
        $pelanggan->gender     = $request->gender;
        $pelanggan->email      = $request->email;
        $pelanggan->phone      = $request->phone;

        $pelanggan->save();
        return redirect()->route('pelanggan.index')->with('update', 'Perubahan Data Berhasil!');
    }

    public function destroy(string $id)
    {
        $pelanggan = User::findOrFail($id);

        $user->delete();
        return redirect()->route('pelanggan.index')->with('delete', 'Data berhasil di hapus');

    }
}
