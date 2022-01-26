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
    <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($produit->libelle); ?></td>
        <td><?php echo e($produit->marque); ?></td>
        <td><?php echo e($produit->prix); ?></td>
        <td><?php echo e($produit->qtStock); ?></td>

        <td><img src="/uploads/<?php echo e($produit->image); ?>" style="width:50px;"/></td>
        <td><?php echo e(QrCode::size(50)->generate($produit->libelle)); ?></td>

        <td>
          <a href="/produits/<?php echo e($produit->id); ?>"> Detail </a><br>
          <a href="/produits/<?php echo e($produit->id); ?>/edit"> Modifier </a>
          <form action="<?php echo e(route('produits.destroy',$produit->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>   <!--pour la securité -->    
                <?php echo e(method_field('DELETE')); ?>

          <button type="submit"> Supprimer </button> 
          </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    

    <a href="produits/create">Ajouter un produit</a>
    <nav aria-label="page navigation ">    
        <?php echo e($produits->links()); ?> 
    </nav>
        <?php if($message = Session::get('message')): ?>
	    <p><?php echo e($message); ?> </p>
        <?php endif; ?>

        <?php $__env->stopSection(); ?>
    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/produits/index.blade.php ENDPATH**/ ?>