<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
<form action="{{ route('clients.update', $client->id) }}" method="POST">
                {{ csrf_field() }}   <!--pour la securité -->    
                {{ method_field('PATCH') }}
        <fieldset><legend>Modifier un client</legend>
<table style="  width: 100%; border: 2px solid black">

    <tr>
        <td>nom</td>
        <td><input type="text" name="nom" value="{{ $client->nom }}" placeholder="nom">  </td>
    </tr>
    <tr>
        <td>prenom</td>
        <td><input type="text" name="prenom" value="{{ $client->prenom }}" placeholder="prenom">  </td>
    </tr>
    <tr>
        <td>tel</td>
        <td><input type="text" name="tel" value="{{ $client->tel }}" placeholder="tel">  </td>
    </tr>
    <tr>
        <td><input type="submit" name="valider" text="valider">  </td>
    </tr>
    
    </table>
    </fieldset>
    </form>

        @if ($message = Session::get('message'))
	    <p>{{ $message }} </p>
        @endif
         
        @endsection
</body>
</html>