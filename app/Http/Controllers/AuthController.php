<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me () {
        return [
            "nis" => "3103120119",
            "phone" => "089673901802",
            "nama" => "Jourdy Junior Putra Purnomo",
            "kelas" => "XII RPL 4",
        ];
    }
}
