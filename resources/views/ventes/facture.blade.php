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
    <div class="container">
      <div calss="card">
        <div class="card-header">
          Facture
            <strong>Date {{$factures[0]->datevente}}</strong>
        </div>
        <div class="card-body">
        <div class="row mb-4">
          <div class="col-sm-6">
                <h6 class="mb-3">From:</h6>
              <div>
                  <strong>My company</strong>
              </div>
                <div>123654 rabat</div>
                <div>Email: info@web.com.pl</div>
                <div>Phone: +546546316513 </div>
            </div>
            <div class="col-sm-6">
                <h6 class="mb-3">To:</h6>
              <div>
                  <strong>{{$factures[0]->nom}} {{$factures[0]->prenom}}</strong>
              </div>
                <div>555546 casa</div>
                <div>Email: marek@daniel.com</div>
                <div>Phone: {{$factures[0]->tel}} </div>
          </div>
        </div>
        <h3>Liste Commande</h3>
          <table class="table table-striped">
              <tbody>
        @foreach ($factures as $ligne)
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
          <td style="background:yellow;">{{$ligne->prixvente * $ligne->qtevente}} DH</td>
      </tr>
      @endforeach
</tbody>
</table>
<a href="/ventes/imprimerFacture/{{$factures[0]->idcli}}">imprimer Facture</a>
    </div>   
@endsection
</body>
</html>