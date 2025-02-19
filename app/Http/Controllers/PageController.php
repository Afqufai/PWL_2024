<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        $nama = "Afrizal Qurratul Faizin";
        $nim = "2341720083";
        return 'Nama: ' . (string) $nama . '<br>NIM: ' . $nim;
    }
    public function articles($id){
        return (string) 'Halaman Artikel dengan  ID ' . $id;
    }
}
