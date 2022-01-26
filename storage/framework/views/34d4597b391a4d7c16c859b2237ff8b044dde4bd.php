
<?php $__env->startSection('content'); ?>
<h1>ajouter un etudiant</h1>

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="email" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prenom</label>
      <input type="password" class="form-control" name="prenom" placeholder="Prenom">
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Date de naissance</label>
      <input type="password" class="form-control" name="naissance" placeholder="Date de naissance">
    </div>
  </div><div class="form-group col-md-6">
      <label for="inputPassword4">Image</label>
      <input type="file" class="form-control" name="image" placeholder="Image">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\GestionDesVentes\resources\views/etudiants/ajouteretudiant.blade.php ENDPATH**/ ?>