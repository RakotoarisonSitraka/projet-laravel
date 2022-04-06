@extends('layout.app')
@section('titre')
  Enregistrement
@endsection

@section('contenu')

 <center>
   @if (Session::has('message')){{-- le message tina apoitra avy any am controller---}}
      <p class="alert alert-success container">
            {{Session::get('message')}}
            {{Session::put('message', null)}}
      </div>
     
       
   @endif
   <form action="{{url('/sauverproduit')}}" method="POST" class="container form-horizontal">
    
    {{ csrf_field() }}
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nom </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3"  placeholder="Pomme..."  name="Nom_du_Produit" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <textarea cols="10" rows="06" class=" container form-control"  placeholder="Délicieux..."  name="Description" required></textarea>
      </div>
    </div>
    <fieldset class="row mb-3-inline">
      <legend class="col-form-label col-sm-2 pt-0">Catégorie</legend>
       <div class="col-sm-10">
        <div class="form-check-inline">
          <input class="form-check-input" type="radio"  id="gridRadios1" value="option1" name="Type"checked required>
          <label class="form-check-label" for="gridRadios1">
            Fruit
          </label>
        </div>
        <div class="form-check-inline">{{--inline mitsivalana --}}
           <input class="form-check-input" type="radio"  id="gridRadios2" value="option2" name="Type" required>
          <label class="form-check-label" for="gridRadios2">
         Legume
          </label>
        </div>
      
        </div>
      </div> 
    </fieldset>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
          <input type="text" class="form-control mb-2" id="inputPassword3"  placeholder="6000 " name="Prix" required>
        </div><br><br><br><br><br>
  
    <center><button type="submit" class="btn btn-success" id="Bout">Enregistrer</button></center>
  </form>
    
 </center>

@endsection

