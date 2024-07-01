<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel CRUD</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel CRUD</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/">Products</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h1>Product Edit #<?php echo e($product->name); ?></h1>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
      <div class="alert alert-success">
        <?php echo e(session('success')); ?>

      </div>
    <?php endif; ?>

    <form method="POST" action="/products/<?php echo e($product->id); ?>/update" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo e(old('name',$product->name)); ?>"/>    
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="4" name="description"><?php echo e(old('name',$product->description)); ?></textarea> 
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control"/>
      </div>
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\test\LaravelCRUD\resources\views/products/edit.blade.php ENDPATH**/ ?>