@extends('layouts.app')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
</div>
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($etudiants as $etud)
      <tr>
          <th scope="row">{{$etud->id}}</th>
          <td>{{$etud->nom}}</td>
          <td>{{$etud->prenom}}</td>
          <td>{{$etud->naissance}}</td>
          <td><img src="/uploads/{{$etud->image}}" style="width:50px"></td>
          <td>  
              <a class="btn btn-primary" href="/etudiants/editer/{{ $etud->id }}" role="button">Modifier</a>
              <form action="{{route('etudiants.supprimeretudiant', $etud->id)}}" method="POST">
                  {{ csrf_field() }}
              <button class="btn btn-danger">supprimer</button>
              </form>
            </td>
      </tr>
    @endforeach
</table>

<a class="btn btn-success" href="/etudiants/afficher" role="button">Ajouter</a>

<nav aria-label="page navigation">
    {{ $etudiants->links() }}
</nav>





@endsection