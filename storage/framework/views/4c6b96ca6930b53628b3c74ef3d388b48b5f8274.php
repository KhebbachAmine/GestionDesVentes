
<?php $__env->startSection('content'); ?>
<?php if(session()->has('success')): ?>
<div class="alert alert-success">
  <?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <th scope="row"><?php echo e($etud->id); ?></th>
          <td><?php echo e($etud->nom); ?></td>
          <td><?php echo e($etud->prenom); ?></td>
          <td><?php echo e($etud->naissance); ?></td>
          <td><img src="/uploads/<?php echo e($etud->image); ?>" style="width:50px"></td>
          <td>  
              <a class="btn btn-primary" href="/etudiants/editer/<?php echo e($etud->id); ?>" role="button">Modifier</a>
              <form action="<?php echo e(route('etudiants.supprimeretudiant', $etud->id)); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

              <button class="btn btn-danger">supprimer</button>
              </form>
            </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a class="btn btn-success" href="/etudiants/afficher" role="button">Ajouter</a>

<nav aria-label="page navigation">
    <?php echo e($etudiants->links()); ?>

</nav>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\GestionDesVentes\resources\views/etudiants/listeetudiants.blade.php ENDPATH**/ ?>