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
<form action="<?php echo e(route('clients.update', $client->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>   <!--pour la securité -->    
                <?php echo e(method_field('PATCH')); ?>

        <fieldset><legend>Modifier un client</legend>
<table style="  width: 100%; border: 2px solid black">

    <tr>
        <td>nom</td>
        <td><input type="text" name="nom" value="<?php echo e($client->nom); ?>" placeholder="nom">  </td>
    </tr>
    <tr>
        <td>prenom</td>
        <td><input type="text" name="prenom" value="<?php echo e($client->prenom); ?>" placeholder="prenom">  </td>
    </tr>
    <tr>
        <td>tel</td>
        <td><input type="text" name="tel" value="<?php echo e($client->tel); ?>" placeholder="tel">  </td>
    </tr>
    <tr>
        <td><input type="submit" name="valider" text="valider">  </td>
    </tr>
    
    </table>
    </fieldset>
    </form>

        <?php if($message = Session::get('message')): ?>
	    <p><?php echo e($message); ?> </p>
        <?php endif; ?>
         
        <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/clients/edit.blade.php ENDPATH**/ ?>