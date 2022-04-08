@extends('layout.app')
@section('titre')
  Service
    
@endsection
@section('contenu')
<center><h1>Page service</h1></center><br>
        @if (Session::has('message')){{-- le message tina apoitra avy any am controller---}}
                  <p class="alert alert-success container">
                        {{Session::get('message')}}
                        {{Session::put('message', null)}}
                  </div>
              
        @endif
    @foreach ($produits as $produit)
     <div class=" alert-success container">
      <h1><a href="/show/{{$produit->id}}">{{$produit->Nom_du_Produit}}</a></h1>
     
                  {{-- page show dia ny id no apoitra am url --}}
      
   @endforeach
      
         <CENter> {{$produits->links()}}</CENter>
      
        
@endsection
    
    
