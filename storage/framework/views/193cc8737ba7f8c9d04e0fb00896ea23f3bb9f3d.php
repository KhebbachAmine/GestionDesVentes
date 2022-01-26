<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>détails client <?php echo e($client->id); ?></h2>
    <ul>
      <li> nom : <?php echo e($client->nom); ?> </li>
      <li> prenom : <?php echo e($client->prenom); ?> </li>
      <li> tel : <?php echo e($client->tel); ?> </li>
    </ul>
</body>
</html><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/clients/show.blade.php ENDPATH**/ ?>