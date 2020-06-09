<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
        


<div class="container">
    <center>  <h3>Notre offre de formation</h3> </center> <br><br>
  




    
    
    <p>Nos formations aux métiers du numérique sont gratuites, professionnalisantes, intensives, sans pré-requis mais nécessitent une bonne dose de motivation ! </p>
  
    
    <h3>Developpement Web</h3>

    <img src="assets/img/web1.jpg" alt="" width="100%"> <br>
    <br>
    <h3>
        Actuellement la seule formation disponible est le <span style="color:red;">Developpement Web</span>. <br>
        D'autres Formations verront le jour 
    </h3>
    
    
    
    
    
    
    
    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script>
        $('.carousel').carousel()
        </script>
    </body>
</html>
<?php /**PATH C:\laragon\www\Simplon-Burkina-master2\resources\views/formations.blade.php ENDPATH**/ ?>