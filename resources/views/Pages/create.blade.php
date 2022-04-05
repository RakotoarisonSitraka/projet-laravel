@extends('layout.app')
@section('titre')
  Enregistrement
@endsection

@section('contenu')
<form action="{{url('/saveproduct')}}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nom </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3"  placeholder="Pomme...">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3"  placeholder="Délicieux...">
      </div>
    </div>
    <fieldset class="row mb-3">
      <legend class="col-form-label col-sm-2 pt-0">Type</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Fruit
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
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
          <input type="password" class="form-control" id="inputPassword3"  placeholder="6000 Ar">
        </div>
  
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>
    
@endsection

