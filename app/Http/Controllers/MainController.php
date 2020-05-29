<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
      return view ('index');
    }

    public function dance($dance = null){
      return view ('dance', ['dance' => $dance]);
    }

    public function admin(){
      return view ('admin');
    }
}
