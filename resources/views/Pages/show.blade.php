@extends('layout.app')
@section('titre')
  Service
    
@endsection
@section('contenu')
<center><h1>Le Détail du produit</h1></center><br>
      <hr>
      <h2>{{$Produits->Product_name}}</h2>
      <h1>{{$Produits->Product_price}} Ar</h1>
      
 
            
@endsection
    