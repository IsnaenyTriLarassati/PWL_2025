<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class  SingleActionControlller extends Controller
{
    public function single($id = null) {
        $home = 'Selamat Datang';
        $about = 'Nama : Isnaeny Tri Larassati <br> NIM : 2341760086';
        $article = $id ? "Halaman Artikel dengan ID $id" : '';

        return "$home <br><br> $about <br><br> $article";
    }
}