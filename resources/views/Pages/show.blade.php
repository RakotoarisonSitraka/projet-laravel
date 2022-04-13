@extends('layout.app')
@section('titre')
  Service
    
@endsection
@section('contenu')
<center> 
       <h1>Le Détail du produit avec prix</h1>
       <h2>Prix :{{$produit->Prix}} Ar</h2>
       <h2>Description :{{$produit->Description}}</h2>
       <h2>Ajouté le :{{$produit->created_at}}</h2><br><br>
       <a href="/ModifierProduit/{{$produit->id}}" class="btn btn-warning">Modifier</a>
       <a href="/Supprimer/{{$produit->id}}" class="btn btn-danger">Supprimer</a>
</center><br>
     
      <hr>
   
      {{-- <h2>{{$Produits->Product_name}}</h2>
      <h1>{{$Produits->Product_price}} Ar</h1> --}}
      
 
            
@endsection
    