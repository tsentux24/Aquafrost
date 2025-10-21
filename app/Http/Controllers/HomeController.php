<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('Beranda');

    }
    public function header_container(){
        $dataContainer = DB::table('tblcontainer');
        return  view ('Beranda',['tblcontainer' => $dataContainer]);
    }
}
