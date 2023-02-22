<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang Izamul Fikri";
    }

    public function about(){
        echo "2141720171 Nim Izamul";
    }

    public function articles($id){
        echo "Halaman Atikel dengan ID " . $id;
    }
}
