 {{-- <nav class="nav nav-pills nav-justified">
    <a class="nav-item nav-link active" href="{{URL::to('/home')}}">Accueil</a>
    <a class="nav-item nav-link" href="{{URL::to('/Service') }}">Service</a>
    <a class="nav-item nav-link" href="{{URL::to('/Apropos') }}">A propos</a>
  </nav>  --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="{{asset('img\sary.jpg')}}" alt="" width="169px" height="149px">
       {{-- <a class="navbar-brand" href="{{URL::TO('/home')}}">E-Commerce</a> --}}
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="{{URL::to('/home') }}">Accueil</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{URL::TO('/Service')}}">Service</a>
                </li>
                  <li class="nav-item">
            <a class="nav-link" href="{{URL::TO('Apropos')}}">A propos</a>
          </li>
          <a href="{{URL::TO('/Ajouter')}}">
             <button class="btn btn-info" type="submit" id="bouton">
           Ajouter
          </button>
        </a>
          
        </ul>
           <form class="d-flex">
             <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Recherche</button>
           </form>
       </div>
    </div>
</nav>