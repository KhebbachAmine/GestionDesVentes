@extends('layouts.app')
@section('content')
<h1>Ajouter un etudiant</h1>

<form action="{{ route('etudiants.modifieretudiant', $etudiant->id)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}      <!--method pour securité-->

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" name="nom" value="{{  $etudiant->nom }}" placeholder="Nom">
            @if($errors->get('nom'))
              @foreach($errors->get('nom') as $message)
              <span class="text-danger">{{$message}}</span>
              @endforeach
            @endif
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prenom</label>
      <input type="text" class="form-control" name="prenom" value="{{ $etudiant->prenom }}"  placeholder="Prenom">
      @if($errors->get('prenom'))
              @foreach($errors->get('prenom') as $message)
              <span class="text-danger">{{$message}}</span>
              @endforeach
            @endif
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Date de naissance</label>
      <input type="date" class="form-control" name="naissance" value="{{ $etudiant->naissance }}"  placeholder="Date de naissance">
      @if($errors->get('naissance'))
              @foreach($errors->get('naissance') as $message)
              <span class="text-danger">{{$message}}</span>
              @endforeach
            @endif
    </div>
  </div><div class="form-group col-md-6">
      <label for="inputPassword4">Image</label>
      <img src="/uploads/{{$etudiant->image}}" style="width:50px">
     
      <input type="file" class="form-control" name="image"  value="{{$etudiant->image}}" placeholder="Image"></input>

            @if($errors->get('image'))
              @foreach($errors->get('image') as $message)
              <span class="text-danger">{{$message}}</span>
              @endforeach
            @endif
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">modifier</button>
</form>

@endsection