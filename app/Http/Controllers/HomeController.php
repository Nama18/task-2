<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['judul_page'] = "Dashboard";
        return view("home", $data);
    }

    public function syarat()
    {
        $dt = DB::table('setting')->first();
        $data['judul_page'] = "Syarat Dan Ketentuan";
        $data['syarat'] = $dt->syarat_ketentuan;
        return view("page.syarat.syarat", $data);
    }
}
