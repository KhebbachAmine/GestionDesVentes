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
<div>
  <table style="border:2px solid ">
    <thead>
      <tr>
      <th>Id</th>
      <th>quantité vente</th>
      <th>date vente</th>
      <th>prix vente</th>
      <th>nom client</th>
      <th>prenom client</th>
      <th>produit</th>
      <th>marque</th>
      <th>prix produit</th>
      <th>Total</th>
      <th>Facture</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($listeVentes as $ligne)
      <tr>
          <td>{{$ligne->id}}</td>
          <td>{{$ligne->qtevente}}</td>
          <td>{{$ligne->datevente}}</td>
          <td>{{$ligne->prixvente}}</td>
          <td>{{$ligne->nom}}</td>
          <td>{{$ligne->prenom}}</td>
          <td>{{$ligne->libelle}}</td>
          <td>{{$ligne->marque}}</td>
          <td>{{$ligne->prix}} DH</td>
          <td>{{$ligne->prixvente * $ligne->qtevente}}</td>
          <td><a href="/ventes/facture/{{$ligne->idcli}}">Facture</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
</body>
</html>
