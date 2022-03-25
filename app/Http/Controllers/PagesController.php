<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
   public function home(){
        return view('Pages.home');
    }

    public function Service(){
        return view('Pages.Service');
    }

    public function Apropos(){
        return view('Pages.Apropos');
    }

}
