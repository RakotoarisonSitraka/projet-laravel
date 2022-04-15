<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produits extends Model
{
    use HasFactory;

}
// function SaveEdit($id,$request){
//     $miseajour=DB::table('produits')
//           ->where('id',$id)
//           ->update([
//               "Nom_du_Produit"=>$request->Nom_du_Produit,
//               "Description"=>$request->Description,
//               "Prix"=>$request->Prix
              
//           ]);
//    }     return $miseajour;

