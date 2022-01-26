<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $__env->startSection('content'); ?>
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
        <?php $__currentLoopData = $listeVentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($ligne->id); ?></td>
          <td><?php echo e($ligne->qtevente); ?></td>
          <td><?php echo e($ligne->datevente); ?></td>
          <td><?php echo e($ligne->prixvente); ?></td>
          <td><?php echo e($ligne->nom); ?></td>
          <td><?php echo e($ligne->prenom); ?></td>
          <td><?php echo e($ligne->libelle); ?></td>
          <td><?php echo e($ligne->marque); ?></td>
          <td><?php echo e($ligne->prix); ?> DH</td>
          <td><?php echo e($ligne->prixvente * $ligne->qtevente); ?></td>
          <td><a href="/ventes/facture/<?php echo e($ligne->idcli); ?>">Facture</a></td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\GestionDesVentes\resources\views/ventes/listevente.blade.php ENDPATH**/ ?>