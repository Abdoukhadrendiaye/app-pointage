@extends('layout.app')
@section('content')
    <div class="card m-5" style="width: 30rem;">
    <h1 class="text-center">Bienvenue dans detail!</h1>
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> {{ $utilisateurs->id}}</h5>
            <p class="card-text">{{ $utilisateurs->username}}</p>
            <p class="card-text">{{ $utilisateurs->email}}</p>
            <p class="card-text">{{ $utilisateurs->departement}}</p>
            <p class="card-text">{{ $utilisateurs->poste}}</p>
            <p class="card-text">{{ $utilisateurs->telephone}}</p>

  </div>
</div>

@endsection
