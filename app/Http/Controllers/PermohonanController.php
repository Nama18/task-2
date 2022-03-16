<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add()
    {
        $data['judul_page'] = "Ajukan Permohonan";
        return view("page.permohonan.form", $data);
    }

    public function list_anggota()
    {
        $data['judul_page'] = "Status Pembiayaan";
        $id_user = Auth::user()->id;
        $sql ="
            SELECT * FROM 
            permohonan as a
            LEFT JOIN status_permohonan as b
            ON a.id_permohonan=b.id_permohonan
            WHERE id_user='$id_user'
        ";
        $list_data = DB::select($sql);
        $data['list_data'] = $list_data;
        return view("page.permohonan.listanggota", $data);
    }

    public function save()
    {
        dd(request());
    }

    public function detail($id)
    {
        
    }
}
