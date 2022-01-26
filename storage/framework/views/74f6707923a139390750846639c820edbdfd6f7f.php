<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
        <h1>détails produit</h1>
        <ul>
            <li>libelle <?php echo e($produit->libelle); ?></li>
            <li>prix <?php echo e($produit->prix); ?></li>
            <li>marque <?php echo e($produit->marque); ?></li>
            <li>qtstock <?php echo e($produit->qtStock); ?></li>
            <li>image <?php echo e($produit->image); ?></li>
        </ul>

    </body>
</html>
<?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/produits/show.blade.php ENDPATH**/ ?>