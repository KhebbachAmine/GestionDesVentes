
<?php $__env->startSection('content'); ?>
<h1>Ajouter un etudiant</h1>

<form action="<?php echo e(route('etudiants.modifieretudiant', $etudiant->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>      <!--method pour securité-->

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" name="nom" value="<?php echo e($etudiant->nom); ?>" placeholder="Nom">
            <?php if($errors->get('nom')): ?>
              <?php $__currentLoopData = $errors->get('nom'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="text-danger"><?php echo e($message); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prenom</label>
      <input type="text" class="form-control" name="prenom" value="<?php echo e($etudiant->prenom); ?>"  placeholder="Prenom">
      <?php if($errors->get('prenom')): ?>
              <?php $__currentLoopData = $errors->get('prenom'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="text-danger"><?php echo e($message); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Date de naissance</label>
      <input type="date" class="form-control" name="naissance" value="<?php echo e($etudiant->naissance); ?>"  placeholder="Date de naissance">
      <?php if($errors->get('naissance')): ?>
              <?php $__currentLoopData = $errors->get('naissance'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="text-danger"><?php echo e($message); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>
  </div><div class="form-group col-md-6">
      <label for="inputPassword4">Image</label>
      <img src="/uploads/<?php echo e($etudiant->image); ?>" style="width:50px">
     
      <input type="file" class="form-control" name="image"  value="<?php echo e($etudiant->image); ?>" placeholder="Image"></input>

            <?php if($errors->get('image')): ?>
              <?php $__currentLoopData = $errors->get('image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="text-danger"><?php echo e($message); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">modifier</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\GestionDesVentes\resources\views/etudiants/editeretudiant.blade.php ENDPATH**/ ?>