<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <title>Document</title>
</head>
<body>
    

    <?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('produits.store')); ?>" method="POST" enctype="multipart/form-data">
    <fieldset><legend>Ajouter un nouveau produit</legend>
                <?php echo e(csrf_field()); ?>   <!--pour la securité -->    
<table>

    <tr>
        <td>libelle</td>
        <td>
          <input type="text" name="libelle" placeholder="libelle" value="<?php echo e(old('libelle')); ?>"> 
            <?php if($errors->get('libelle')): ?>
                <?php $__currentLoopData = $errors->get('libelle'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?> 
        </td>
         
    </tr>
    <tr>
        <td>marque</td>
        <td><select name="marque">
        <option value="hp">hp</option>        
        <option value="samsung">samsung</option>        
        <option value="del">del</option>
        </select>  
            
    </td>
    </tr>
    <tr>
        <td>prix</td>
        <td>
          <input type="number" name="prix" placeholder="prix" value="<?php echo e(old('prix')); ?>"> 
            <?php if($errors->get('prix')): ?>
               <?php $__currentLoopData = $errors->get('prix'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <span class="text-danger"><?php echo e($message); ?></span>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endif; ?>
        </td>
        
    </tr>
    <tr>
        <td>Qtestock</td>
        <td>
          <input type="number" name="qtStock" placeholder="qtstock" value="<?php echo e(old('qtStock')); ?>" >  
            <?php if($errors->get('qtStock')): ?>
              <?php $__currentLoopData = $errors->get('qtStock'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="text-danger"><?php echo e($message); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </td>
        
    </tr>
    <tr>
        <td>image</td>
        <td>
          <input type="file" name="image" placeholder="image"> 
           <?php if($errors->get('image')): ?>
             <?php $__currentLoopData = $errors->get('image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <span class="text-danger"><?php echo e($message); ?></span>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <?php endif; ?> 
        </td>
        
    </tr>
    <tr>
    <td>description</td>
        <td><textarea class="summernote from-control" name="description" > </textarea> </td>
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
        <script>
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\GestionDesVentes\resources\views/produits/create.blade.php ENDPATH**/ ?>