
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
            
<div class="row">
    <div class="col-6">
    AdminDashboard
    <form method="POST" action="{{route('pointages.update')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date de pointage</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" value="{{$pointages->date}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Heure d'arriées</label>
    <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="heure_arrive" value="{{$pointages->heure_arrive}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Heure de depart</label>
    <input type="time" class="form-control" id="exampleInputPassword1" name="heure_depart" value="{{$pointages->heure_depart}}">
  </div>
  <label for="exampleInputPassword1" class="form-label">Utilisateur</label>
              <select class="form-select" aria-label="Default select example" name="utilisateurs->id" value="{{pointage->$utilisateurs->id}}" aria-placeholder="selection une option ">
               @foreach ($utilisateurs as $utilisateurs)
                <option value="{{$utilisateurs->id}}">{{$utilisateurs->id}}</option>
                @endforeach
              </select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>


@endsection