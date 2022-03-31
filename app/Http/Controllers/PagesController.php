<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PagesController extends Controller
{
    //
   public function home(){
        return view('Pages.home');
    }

    public function Service(){
        //$Produits=Product::paginate(4);

        $Produits= DB::table('products')
        ->orderBy('Product_name' )
        ->paginate(2);/* n produit isakiny page */
        return view('Pages.Service')->with('Produits',$Produits);
    }

    public function Apropos(){
        return view('Pages.Apropos');
    }

}
