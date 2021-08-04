<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119033,
            "Nama" => "Aulia afifah",
            "Gender" => "perempuan",
            "Phone" => 6285641424962,
            "Kelas" => "XII RPL 1"
        ];

    }

}