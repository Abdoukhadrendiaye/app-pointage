@extends('layout.app')
@section('content')
    <div class="card m-5" style="width: 30rem;">
    <h1 class="text-center">Bienvenue dans detail!</h1>
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> {{ $pointages->id}}</h5>
            <p class="card-text">{{ $pointages->date}}</p>
            <p class="card-text">{{ $pointages->heure_arrive}}</p>
            <p class="card-text">{{ $pointages->heure_depart}}</p>
           

  </div>
</div>

@endsection
