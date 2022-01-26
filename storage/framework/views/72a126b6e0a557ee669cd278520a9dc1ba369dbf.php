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

    <form  action="<?php echo e(route('ventes.validerVente')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>  
        <div class="form-group">
            client
            <select name="idcli" class="form-control">
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($c->idcli); ?>"><?php echo e($c->nom); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            produit
            <select name="idpro" class="form-control">
                <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($p->idpro); ?>"><?php echo e($p->libelle); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php if($message = Session::get('message')): ?>
	        <p><?php echo e($message); ?> </p>
    <?php endif; ?>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/ventes/formVendre.blade.php ENDPATH**/ ?>