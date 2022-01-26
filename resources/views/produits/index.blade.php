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
      <th>libelle</th>
      <th>marque</th>
      <th>prix</th>
      <th>qtStock</th>
      <th>image</th>
      <th>QR code</th>
      <th>Actions</th>

    </thead>
    <tbody >
    @foreach ($produits as $produit)
      <tr>
        <td>{{ $produit->libelle }}</td>
        <td>{{ $produit->marque }}</td>
        <td>{{ $produit->prix }}</td>
        <td>{{ $produit->qtStock }}</td>

        <td><img src="/uploads/{{ $produit->image }}" style="width:50px;"/></td>
        <td>{{ QrCode::size(50)->generate($produit->libelle) }}</td>

        <td>
          <a href="/produits/{{ $produit->id }}"> Detail </a><br>
          <a href="/produits/{{ $produit->id }}/edit"> Modifier </a>
          <form action="{{ route('produits.destroy',$produit->id) }}" method="POST">
                {{ csrf_field() }}   <!--pour la securité -->    
                {{ method_field('DELETE') }}
          <button type="submit"> Supprimer </button> 
          </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    

    <a href="produits/create">Ajouter un produit</a>
    <nav aria-label="page navigation ">    
        {{ $produits->links() }} 
    </nav>
        @if ($message = Session::get('message'))
	    <p>{{ $message }} </p>
        @endif

        @endsection
    </body>
</html>
