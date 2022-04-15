<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Product;
use Illuminate\Support\Facades\Session;
use  App\Models\produits;



class PagesController extends Controller
{
    //
            public function home(){
                    // $produit= produits::orderBy('Nom_Du_Produit','asc')->paginate(1);
                    // return view('Pages.Service')->with('produits',$produit);
                     return view('Pages.home');
            }




            public function Service(){
                    // $produit=produits::paginate(1);
                    // $produit= DB::table('produits');
                    //produits=anaran le table ao am BD  /produit =variable
                    // ->orderBy('Product_name' )
                    // ->paginate(2);/* n produit isakiny page */
                    // return view('Pages.Service')->with('Produits',$Produits);
                    $produit= produits::orderBy('Nom_Du_Produit','asc')->paginate(1);
                    return view('Pages.Service')->with('produits',$produit);
            }



            public function Apropos(){
                     return view('Pages.Apropos');
            }



            public function Mampiseho($id){/*afficher an le données anaty table*/
                $produit=produits::find($id);
                return view('Pages.show')->with('produit', $produit);   
                //  $produit= DB::table('produits') methode LQB(Laravel Query Builder)
                //                ->where('id',$id)
                //               ->first();

                 //  find fonction specifique       
            }
            
    //Ajout
            public function Ajout(){
            return view('Pages.Ajout');

            }
            public function modification($id){
                //affichage nle données anaty formulaire
                $produit=produits::find($id);
                return view('Pages.Modifier')->with('produit',$produit);
            }

            public function SauvegardeDeModif($id, Request $request){//action mits mitovy am save tsotra ihany (mise ajour)
                 $data=produits::find($id);
                 $data->Nom_du_Produit=$request->input('Nom_du_Produit');
                 $data->Description=$request->input('Description');
                 $data->Prix=$request->input('Prix');
                 $data->update();
                return redirect('/Service')->with('message', ' a été bien modifié! ');  
       
            }
                //sauvegarde
            public function sauvegarder(Request $request){

                //1 er manière d'affichage
                // print("le nom du produit est <h1> " . $request->Nom_du_Produit."</h1>"); 
                $produit= new Produits();//raha vao apiditra d manao allocation mémoire dynamique
                $produit->Nom_du_Produit=$request->input('Nom_du_Produit');
                $produit->Description=$request->input('Description');
                $produit->Prix=$request->input('Prix');
                $produit->save();
                return redirect('/Ajouter')->with('message',' le produit '.$request->Nom_du_Produit. ' a été bien inseré! ');

                // 2 em manière
                // $data= array();
                // $data["Nom_du_Produit"]=$request->input('Nom_du_Produit');
                // $data["Description"]=$request->input('Description');
                // $data["Type"]=$request->input('Type');
                // $data["Prix"]=$request->input('Prix');
                // $data["created_at"]=$request-

                //  DB::table('Produits')
                //     ->insert($data);
                //  Session::put('message','le produit '.$request->Nom_du_Produit. ' a été bien inseré! ');
                //  return redirect('/Ajouter');
               
            }


            public function Suppression($id){

                    $produit = DB::table('Produits')
                                    ->where('id',$id)
                                    ->first();

                    DB::table('Produits')
                    ->where('id',$id)
                    ->delete();

                                 
                return redirect('/Service')->with('message',' produit '.$produit->Nom_du_Produit. ' a été bien supprimé! ');


            }            
}
