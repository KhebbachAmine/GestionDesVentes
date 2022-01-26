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

    <form  action="{{ route('ventes.validerVente')  }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}  
        <div class="form-group">
            client
            <select name="idcli" class="form-control">
                @foreach ($clients as $c)
                <option value="{{$c->idcli}}">{{$c->nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            produit
            <select name="idpro" class="form-control">
                @foreach ($produits as $p)
                <option value="{{$p->idpro}}">{{ $p->libelle}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            quantité de vente
            <input type="number" name="qtevente" class="form-control">
        </div>
        <div class="form-group">
            date de vente
            <input type="date" name="datevente" class="form-control">
        </div>
        <div class="form-group">
            prix de vente
            <input type="number" name="prixvente" class="form-control">
        </div>

        <button type="submit" >validé</button>
    </form>

    @if ($message = Session::get('message'))
	        <p>{{ $message }} </p>
    @endif
    @endsection
</body>
</html>