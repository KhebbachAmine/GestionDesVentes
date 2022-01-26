
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
  <div style="padding:1%;">
  <form action="<?php echo e(route('clients.store')); ?>" method="POST" enctype="multipart/form-data">
    <fieldset>            
          <?php echo e(csrf_field()); ?>   <!--pour la securité -->  
    
      <legend>Ajouter un client avec AJAX</legend>
        <table>
          
          <tr>
            <td>nom</td>
            <td><input type="text" name="nom" placeholder="nom" id="nom">  </td>
          </tr>

          <tr>
            <td>prenom</td>
            <td><input type="text" name="prenom" placeholder="prenom" id="prenom">  </td>
          </tr>

          <tr>
            <td>tel</td>
            <td><input type="text" name="tel" placeholder="tel" id="tel">  </td>
          </tr>

          <tr>
            <td><input type="submit" name="Ajouter" id="ajouter">  </td>
          </tr>

          <input type="hidden" name="_token" id="csrf" value="<?php echo e(Session::token()); ?>">  

        </table>

    </fieldset>
</form>
</div>
<script>
  /*  $(document).ready(function() {
      $('#ajouter').on('click', function() {
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var tel = $('#tel').val();

          if(nom!="" && prenom!="" && tel!="" ) {
              $.ajax({
                url: "/clients",
                type: "POST",
                data: {
                _token: $("#csrf").val(),
                type: 1,
                nom: nom,
                prenom: prenom,
                tel: tel  
              },

              cache: false,
              success: function(data) {
                  console.log(data);
                  var data = JSON.parse(data);
                  if(data.statusCode==200) {
                    alert(data.message);
                  }
                  else if(data.statusCode==201) {
                    alert("Erreur du controller!");  
                  }
              }
              });
          }
          else
          {
              alert("Erreur tout les chomps est obligatoire.");
          }
      });
    });*/
</script>
        <?php if($message = Session::get('message')): ?>
	        <p><?php echo e($message); ?> </p>
        <?php endif; ?>
        <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/clients/create.blade.php ENDPATH**/ ?>