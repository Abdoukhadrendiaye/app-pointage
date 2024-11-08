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
   
        liste des Utilisateurs
    </h5>
    <!-- <a href="{{route('dashboard')}}" class="btn btn-success">RetourDashboardAdmin</a> -->

    <div class="card-body">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">poste</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($utilisateurs as $utilisateurs)
      <tr>
        <th scope="row">{{ $utilisateurs->id}}</th>
        <td>{{ $utilisateurs->prenom}}</td>
        <td>{{ $utilisateurs->nom}}</td>
        <td>{{ $utilisateurs->email}}</td>
        <td>{{ $utilisateurs->poste}}</td>
        
      @endforeach
    </div>
    </tbody>
   
  </table>
</div>
@endsection