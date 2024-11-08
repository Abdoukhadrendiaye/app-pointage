
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
            
<div class="row shadow-lg p-3 mb-5 bg-body rounded" style="width: 50%; margin:10%">
    <div class="col">
    <h3 class="text-primary text-center">Admin Pointage</h3>
    <form method="POST" action="{{route('pointages.store')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date de pointage</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Heure d'arriées</label>
    <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="heure_entree">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Heure de depart</label>
    <input type="time" class="form-control" id="exampleInputPassword1" name="	heure_sortie">
  </div>
  <label for="exampleInputPassword1" class="form-label">Utilisateur</label>
              <select class="form-select" aria-label="Default select example" name="utilisateurs->id" aria-placeholder="selection une option ">
               @foreach ($utilisateurs as $utilisateurs)
                <option value="{{$utilisateurs->id}}">{{$utilisateurs->username}}</option>
                @endforeach
              </select>
  <button type="submit" class="btn btn-primary"   style="margin-left:5%; margin-top:3%">Submit</button>
  <a href="{{route('dashboard')}}" class="btn btn-success"  style="margin-left:60%; margin-top:3%">Retoure</a>

</form>
    </div>
</div>


@endsection