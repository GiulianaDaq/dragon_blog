<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('userProfile');
    }

   


    public function welcome() {
        return view('welcome');
    }

    public function userProfile(){
    return view('auth.profile');
    }
}
