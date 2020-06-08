<?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <br>


 
<form class="container"  action="<?php echo e(route('actualities.store')); ?>"  method="POST" >
    <?php echo e(csrf_field()); ?>

      <h1>Enregistrer une actualites</h1> <br>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Titre</label>
        <input type="text" class="form-control is-valid" id="validationServer01" name="titre" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        
          <label class="custom-file-label" for="customFile">Choose file</label>
        <input type="file" class="custom-file-input" id="customFile" name="photo" required>
       

       
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Date</label>
        <input type="date" class="form-control is-valid" id="validationServer01" name="date" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationServer02">Description</label>
        <input type="text" class="form-control is-valid" id="validationServer02" name="newsactu" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>

</body>
</html><?php /**PATH C:\laragon\www\Simplon-Burkina-master\resources\views/admin/actualities.blade.php ENDPATH**/ ?>