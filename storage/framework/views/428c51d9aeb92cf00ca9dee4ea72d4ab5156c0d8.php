<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form class="container"  action="<?php echo e(route('evenements.store')); ?>"  method="POST" >
    <?php echo e(csrf_field()); ?>

      <h1>Enregistrer une actualite</h1> <br>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Titre</label>
        <input type="text" class="form-control is-valid" id="validationServer01" name="titre" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
            <label for="validationServer01">Date</label>
            <input type="date" class="form-control is-valid" id="validationServer01" name="evendate" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Heure</label>
        <input type="time" class="form-control is-valid" id="validationServer01" name="heure" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationServer02">Lieu</label>
        <input type="text" class="form-control is-valid" id="validationServer02" name="lieu" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-6 mb-3">
            <label for="validationServer02">Desc ription</label>
            <input type="text" class="form-control is-valid" id="validationServer02" name="evencontenu" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>

</body>
</html><?php /**PATH C:\laragon\www\Simplon-Burkina-master\resources\views//admin/evenements.blade.php ENDPATH**/ ?>