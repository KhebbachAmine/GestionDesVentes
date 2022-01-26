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
    @if(count($errors))
    <div class="alert alert-danger" role="alert">
      <ul>
          @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
          @endforeach
      </ul>

    </div>
    @endif
<form action="{{ route('produits.update', $produit->id) }}" method="POST">
                {{ csrf_field() }}   <!--pour la securité -->    
                {{ method_field('PATCH') }}
        <fieldset><legend>Modifier un  produit</legend>
<table style="  width: 100%; border: 2px solid black">

    <tr>
        <td>libelle</td>
        <td><input type="text" name="libelle" value="{{ $produit->libelle }}" placeholder="libelle">  </td>
    </tr>
    <tr>
        <td>marque</td>
        <td><select name="marque">
        <option value="hp" @if($produit->marque  == 'hp' ) selected @endif > hp</option>        
        <option value="samsung" @if($produit->marque  == 'samsung' ) selected @endif >samsung</option>        
        <option value="del" @if($produit->marque  == 'del' ) selected @endif >del</option>
        </select>        
    </td>
    </tr>
    <tr>
        <td>prix</td>
        <td><input type="number" name="prix" value="{{ $produit->prix }}" placeholder="prix">  </td>
    </tr>
    <tr>
        <td>Qtestock</td>
        <td><input type="number" name="qtStock" value="{{ $produit->qtStock }}" placeholder="qtstock">  </td>
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