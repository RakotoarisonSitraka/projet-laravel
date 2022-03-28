<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
   public function home(){
        return view('Pages.home');
    }

    public function Service(){
        $Produits= DB::table('products')
        // ->orderBy('Product_name' )
        // ->get();
          ->paginate(1);
        return view('Pages.Service')->with('Produits',$Produits);
    }

    public function Apropos(){
        return view('Pages.Apropos');
    }

}
