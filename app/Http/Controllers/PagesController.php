<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Product;
use  App\Models\produits;



class PagesController extends Controller
{
    //
    public function home(){
        return view('Pages.home');
    }

    public function Service(){
        // $produit=produits::paginate(1);
        // $produit= DB::table('produits');
        $produit= produits::orderBy('Nom_Du_Produit','asc')->paginate(1);
        //produits=anaran le table ao am BD  /produit =variable
        // ->orderBy('Product_name' )
        // ->paginate(2);/* n produit isakiny page */
        // return view('Pages.Service')->with('Produits',$Produits);
        return view('Pages.Service')->with('produits',$produit);
    }

    public function Apropos(){
        return view('Pages.Apropos');
    }


    public function Mampiseho($id){/*afficher an le données anaty table*/
        //  $produit= DB::table('produits') methode LQB(Laravel Query Builder)
        //                ->where('id',$id)
        //               ->first();

       //  find fonction specifique
             $produit=produits::find($id);

             return view('Pages.show')->with('produit', $produit);          
      
    }


    //Ajout
    public function Ajout(){
        return view('Pages.Ajout');
    }

    //sauvegarde
    public function sauvegarder(Request $request){
        //  print("le nom du produit est <h1> " . $request->Anarana_produit."</h1>"); 
        $produit= new Produits();
        $produit->Nom_du_Produit=$request->Name_du_Produit;
        $produit->Description=$request->Description_produit;
        $produit->Type=$request->Type_produit;
        $produit->Prix=$request->Prix_produit;
        $produit->save();
    }


}
