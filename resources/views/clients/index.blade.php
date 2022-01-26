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


    <table style="  width: 100%; border: 2px solid black">
    <thead >
      <th>nom</th>
      <th>prnom</th>
      <th>téléphone</th>
      <th>Actions</th>

    </thead>
    <tbody >
    @foreach ($clients as $c)
      <tr>
        <td>{{ $c->nom }}</td>
        <td>{{ $c->prenom }}</td>
        <td>{{ $c->tel }}</td>
        <td>
        <a href="/clients/{{ $c->id }}"> détails</a>    <br>
        <a href="/clients/{{ $c->id }}/edit"> Modifier</a>    
        <form action="{{ route('clients.destroy', $c->id )}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        <button type="submit">supprimer</button>    
        </form>
        </td>

        
    </tr>
    @endforeach
    </tbody>
    </table>
    

    <a href="clients/create">Ajouter un client</a>
    <nav aria-label="page navigation ">    
        {{ $clients->links() }} 
    </nav>
        @if ($message = Session::get('message'))
	    <p>{{ $message }} </p>
        @endif

    @endsection
</body>
</html>