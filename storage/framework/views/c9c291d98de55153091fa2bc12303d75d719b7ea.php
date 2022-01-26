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
    <div class="container">
      <div calss="card">
        <div class="card-header">
          Facture
            <strong>Date <?php echo e($factures[0]->datevente); ?></strong>
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
                  <strong><?php echo e($factures[0]->nom); ?> <?php echo e($factures[0]->prenom); ?></strong>
              </div>
                <div>555546 casa</div>
                <div>Email: marek@daniel.com</div>
                <div>Phone: <?php echo e($factures[0]->tel); ?> </div>
          </div>
        </div>
        <h3>Liste Commande</h3>
          <table class="table table-striped">
              <tbody>
        <?php $__currentLoopData = $factures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
          <td style="background:yellow;"><?php echo e($ligne->prixvente * $ligne->qtevente); ?> DH</td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<a href="/ventes/imprimerFacture/<?php echo e($factures[0]->idcli); ?>">imprimer Facture</a>
    </div>   
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/ventes/facture.blade.php ENDPATH**/ ?>