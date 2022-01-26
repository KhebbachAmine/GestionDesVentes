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
    <?php if(count($errors)): ?>
    <div class="alert alert-danger" role="alert">
      <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($message); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>

    </div>
    <?php endif; ?>
<form action="<?php echo e(route('produits.update', $produit->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>   <!--pour la securité -->    
                <?php echo e(method_field('PATCH')); ?>

        <fieldset><legend>Modifier un  produit</legend>
<table style="  width: 100%; border: 2px solid black">

    <tr>
        <td>libelle</td>
        <td><input type="text" name="libelle" value="<?php echo e($produit->libelle); ?>" placeholder="libelle">  </td>
    </tr>
    <tr>
        <td>marque</td>
        <td><select name="marque">
        <option value="hp" <?php if($produit->marque  == 'hp' ): ?> selected <?php endif; ?> > hp</option>        
        <option value="samsung" <?php if($produit->marque  == 'samsung' ): ?> selected <?php endif; ?> >samsung</option>        
        <option value="del" <?php if($produit->marque  == 'del' ): ?> selected <?php endif; ?> >del</option>
        </select>        
    </td>
    </tr>
    <tr>
        <td>prix</td>
        <td><input type="number" name="prix" value="<?php echo e($produit->prix); ?>" placeholder="prix">  </td>
    </tr>
    <tr>
        <td>Qtestock</td>
        <td><input type="number" name="qtStock" value="<?php echo e($produit->qtStock); ?>" placeholder="qtstock">  </td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\GestionDesVentes\resources\views/produits/edit.blade.php ENDPATH**/ ?>