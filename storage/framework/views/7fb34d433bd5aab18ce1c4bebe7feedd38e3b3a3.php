
<main role="main">

        <section class="jumbotron text-center">
          <div class="container">
            <h1>Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
              <a href="#" class="btn btn-primary my-2">Main call to action</a>
              <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
          </div>
        </section>
      
        <div class="album py-5 bg-light">
          <div class="container">
          
            <div class="row">

                <?php if($actualities ->count()>0): ?>
              <?php $__currentLoopData = $actualities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actualitie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="images/<?php echo e(Session::get('photo')); ?>" width="100%" height="225" >
                  
                  <div class="card-body">
                    <h6> <?php echo e($actualitie->newsactu); ?> </h6>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <h3> <?php echo e($actualitie->titre); ?> </h3>
                        <p> <?php echo e($actualitie->date); ?> </p>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              
                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <p>aucune actualite pour l'instant</p>
                  <?php endif; ?>
      
            </div>
           
          </div>
        </div>
      
      </main>
      
      
      
      <footer class="text-muted">
        <div class="container">
          <p class="float-right">
            <a href="#">Back to top</a>
          </p>
          <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
          <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script></body>
      </html><?php /**PATH C:\laragon\www\Simplon-Burkina-master\resources\views/partials/actualities.blade.php ENDPATH**/ ?>