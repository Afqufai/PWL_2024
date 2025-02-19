<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AboutController extends Controller
{
    public function about(){
        $nama = "Afrizal Qurratul Faizin";
        $nim = "2341720083";
        return 'Nama: ' . (string) $nama . '<br>NIM: ' . $nim;
    }
}
