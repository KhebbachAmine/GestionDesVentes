<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>détails client {{$client->id}}</h2>
    <ul>
      <li> nom : {{$client->nom}} </li>
      <li> prenom : {{$client->prenom}} </li>
      <li> tel : {{$client->tel}} </li>
    </ul>
</body>
</html>