@extends('layout.app')
@section('content')

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    <div class="card m-5">
            
    <h5 class="card-header text-center">BIENVENUE!</h5>
    AdminDashboard
     <div class="card-body">
        <h5 class="card-title text-center">Formulaire d'enregistrement des Utilisateurs</h5>
    </div>
    
<form class="row" method="POST" action="{{route('utilisateurs.store')}}">
    @csrf
    <div class="col-6">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom d'Utilisateur</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Addresse email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
        <label for="genre">Genre</label>
        <select class="form-select" aria-label="Default select example" name="genre" aria-placeholder="selection une option ">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
        </select>
    </div>
    </div>
    <div class="col-6"> 
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Département</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="departement">
    </div>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telephone</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="telephone">
    </div>
   
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Poste</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="poste">
     </div>
     
    <div class="mt-5">
         <button type="submit" class="btn btn-primary ">Enregistrer</button>
         <a href="{{route('dashboard')}}" class="btn btn-success"  style="margin-left:10%;">Retoure</a>

    </div>
    </div>
  </form>
</div>

@endsection
