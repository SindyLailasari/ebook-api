<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[
        'nis' => '3103118124',
        'name' => 'Sindy Lailasari',
        'gender' => 'Perempuan',
        'phone' => '08588572-3962',
        'class' => 'XII RPL 4'
        ];
     }
}
