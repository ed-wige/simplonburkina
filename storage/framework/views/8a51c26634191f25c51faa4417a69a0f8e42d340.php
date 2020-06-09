<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1>Présentation de la fabrique</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="#" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="#" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="#" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Precedent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Suivant</span>
            </a>
          </div>







    <h1>Localisation</h1>
    <p>La fabrique numérique Simplon est situé à l'agence Universitaire de la francophonie, au sein de l'université Ouaga 1.
        Pour vous y rendre, veuillez vous referrer à la carte ci-desssous</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.0959791143064!2d-1.5026646858703152!3d12.376502831006501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCampus%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sbf!4v1591313661549!5m2!1sfr!2sbf" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\laragon\www\Simplon-Burkina\resources\views/welcome.blade.php ENDPATH**/ ?>