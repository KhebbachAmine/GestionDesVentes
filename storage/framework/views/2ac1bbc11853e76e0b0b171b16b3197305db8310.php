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
    <h3>Statiqtique vente par produit</h3>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <div id="barchart_material"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Produit', 'Totale vente'],
  <?php
  foreach($ventesByproduits as $sta) {
      echo "['".$sta->libelle."', ".$sta->Totale."]";
  }
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = { 
      chart: {'title':'Graph | Totale vente', 
      subtitle: 'totale',
      },
      bars: 'horizantal'
  }
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.charts.Bar(document.getElementById('barchart_material'));
  chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
    
    <?php $__env->stopSection(); ?>
</body>
</html>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHEBBACH\GestionDesVentes\resources\views/ventes/statistiques.blade.php ENDPATH**/ ?>