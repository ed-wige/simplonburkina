
<main role="main">

        <section class="jumbotron text-center">
          <div class="container">
            <h1 style="text-decoration:underline red;">Nos actualités</h1>
            <p class="lead text-muted">Informez vous dès a present grace a nos recentes actualites.</p>
            
          </div>
        </section>
      
        <div class="album py-5 bg-light">
          <div class="container">
          
            <div class="row">

                <?php if($actualities ->count()>0): ?>
              <?php $__currentLoopData = $actualities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actuality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="images/<?php echo e(Session::get('photo')); ?>" width="100%" height="225" >
                  
                  <div class="card-body">
                    <h6> <?php echo e($actuality->newsactu); ?> </h6>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <h3> <?php echo e($actuality->titre); ?> </h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p> <?php echo e($actuality->date); ?> </p>
                      </div>
                     
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
      
      
      
     
<main role="main">

    <section class="jumbotron text-center" >
      <div class="container">
        <h1 style="text-decoration:underline red;">Nos Evenements</h1>
        <p class="lead text-muted"></p>
        
      </div>
    </section>
  
     <div class="album py-5 bg-light" >
        <div class="container">
        
          <div class="row" >

              <?php if($evenements ->count()>0): ?>
              <?php $__currentLoopData = $evenements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evenement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="jumbotron"  style="width:24%;">
                  <h1 class="display-4" width="25%"><?php echo e($evenement->titre); ?></h1>
                  <p class="lead"  style="width:25%;"><?php echo e($evenement->evencontenu); ?></p>
                  <hr class="my-4">
                  <p  style="width:25%;"><?php echo e($evenement->date); ?> - <?php echo e($evenement->lieu); ?> - <?php echo e($evenement->heure); ?></p>
                  <p class="lead"  style="width:25%;">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                  </p>
                </div> &nbsp;
              
                  
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                  <?php else: ?>
                <p>aucun evenement pour l'instant</p>
                <?php endif; ?>
  
       </div>
       
      </div> 
    </div> 
  
  </main> <br><br>
  
  
  
 <?php /**PATH C:\laragon\www\Simplon-Burkina-master2\resources\views/partials/act.blade.php ENDPATH**/ ?>