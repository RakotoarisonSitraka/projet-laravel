@extends('layout.app')
@section('titre')
  Service
    
@endsection
@section('contenu')
<center><h1>Page service</h1></center><br>
    @foreach ($produits as $produit)
     <div class="well">
      <h1><a href="/show/{{$produit->id}}">{{$produit->Nom_du_Produit}}</a></h1>
     
                  {{-- page show dia ny id no apoitra am url --}}
      
   @endforeach
      
         <CENter> {{$produits->links()}}</CENter>
      
        
@endsection
    
    
