<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['judul_page'] = "Data Anggota";
        $list_data = DB::table('users')->get();
        $data['list_data'] = $list_data;
        return view("page.anggota.list", $data);
    }
    
    public function add()
    {
        $data['judul_page'] = "Data Anggota";
        return view("page.anggota.form", $data);
    }

    public function save(Request $request)
    {
        $messages = [
            'min' => ':attribute harus diisi minimal :min karakter',
            'required_with' => ':attribute field is required when :values is present.',
            'same' => ':attribute baru and :other harus sama.',
        ];
        $validator =[
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'min:6|required_with:password_konfirmasi|same:password_konfirmasi',
            'password_konfirmasi' => 'min:6'
        ];
 
        $this->validate($request, $validator, $messages);
        $password = Hash::make($request->password);
        $save = DB::insert("insert into users (name, email, password, role) values ('$request->name', '$request->email', '$password', '$request->role')");
        if ($save) {
            return redirect('/anggota')->with('success', 'Data Anggota Berhasil disimpan');
        }
    }

    public function edit($id)
    {
        $data['judul_page'] = "Ubah Anggota";
        $anggota = DB::table('users')->where('id',$id)->first();
        $data['anggota'] = $anggota;
        return view("page.anggota.edit", $data);
    }
    
    public function update()
    {
        $data['judul_page'] = "Ubah Password";
        return view("page.profil.edit", $data);
    }

    public function action_update(Request $request)
    {
        $messages = [
            'min' => ':attribute harus diisi minimal :min karakter',
            'required_with' => ':attribute field is required when :values is present.',
            'same' => ':attribute baru and :other harus sama.',
        ];
        $validator =[
            'password' => 'min:6|required_with:password_konfirmasi|same:password_konfirmasi',
            'password_konfirmasi' => 'min:6'
        ];
 
        $this->validate($request, $validator, $messages);
        $password = Hash::make($request->password);
        $update = DB::update("update users set password = '$password' where email='$request->email'");
        if ($update) {
            return redirect('/profil')->with('success', 'Password berhasil diubah');
        }
    }

    public function delete($id)
    {
        dd($id);
    }

    
}
