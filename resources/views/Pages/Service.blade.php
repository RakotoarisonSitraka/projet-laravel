@extends('layout.app')
@section('titre')
  Service
    
@endsection
@section('contenu')
<center><h1>Page service</h1></center><br>
   @foreach ($Produits as $vokatra)
     <div class="well">
      <h1><a href="/show/{{$vokatra->id}}">{{$vokatra->Product_name }}</a></h1>
                  {{-- page show dia ny id no apoitra am url --}}
     </div>  
 @endforeach
      
         <CENter> {{$Produits->links()}}</CENter>
            
@endsection
    
   
    
