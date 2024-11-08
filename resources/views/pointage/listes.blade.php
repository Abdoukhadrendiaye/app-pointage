<!DOCTYPE html>
@extends('layout.app')
@section('content')


      @if (session()->has('message'))
    <div class="alert alert-success">
    {{session()->get('message')}}
    </div>
  @endif
<div class="card m-5" style="width: 70rem;">
    <h5 class="card-title text-center">
   
        liste de Pointage des Utilisateurs
    </h5>
    <div class="btn">

  </div>
    <div class="card-body">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <!-- <th scope="col">Utilisateur</th> -->
        <th scope="col">Nom d'utilisateur</th>
        <th scope="col">Date de pointage</th>
        <th scope="col">Heures d'arrrivée</th>
        <th scope="col">Heures de depart</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pointages as $pointages)
      <tr>
        <th scope="row">{{ $pointages->id}}</th>
        <td>{{$pointages->utilisateurs->username}}</td>
        <td>{{ $pointages->date}}</td>
        <td>{{ $pointages->heure_entree}}</td>
        <td>{{ $pointages->heure_sortie}}</td>
        
      @endforeach
    </div>
    </tbody>
   
  </table>
</div>
@endsection