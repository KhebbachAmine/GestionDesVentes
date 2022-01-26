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
      <th>nom</th>
      <th>prnom</th>
      <th>téléphone</th>
      <th>Actions</th>

    </thead>
    <tbody >
    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($c->nom); ?></td>
        <td><?php echo e($c->prenom); ?></td>
        <td><?php echo e($c->tel); ?></td>
        <td>
        <a href="/clients/<?php echo e($c->id); ?>"> détails</a>    <br>
        <a href="/clients/<?php echo e($c->id); ?>/edit"> Modifier</a>    
        <form action="<?php echo e(route('clients.destroy', $c->id )); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

        <button type="submit">supprimer</button>    
        </form>
        </td>

        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    

    <a href="clients/create">Ajouter un client</a>
    <nav aria-label="page navigation ">    
        <?php echo e($clients->links()); ?> 
    </nav>
        <?php if($message = Session::get('message')): ?>
	    <p><?php echo e($message); ?> </p>
        <?php endif; ?>

    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/clients/index.blade.php ENDPATH**/ ?>