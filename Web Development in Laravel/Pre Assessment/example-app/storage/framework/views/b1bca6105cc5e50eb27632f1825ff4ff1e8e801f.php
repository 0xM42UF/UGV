<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <center>
        <h1>Student Data Form</h1>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </div>
        <?php endif; ?>

        <?php if(Session::has('success')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>

        <?php endif; ?>

        <form action="/dept" method="post">
           <?php echo e(csrf_field()); ?>

           <label>Department Name : </label>
           <input type="text" name="dept_name"><br><br>
           <label>Department Code : </label>
           <input type="text" name="dept_code"><br><br>
           <label>Students Name : </label>
           <input type="text" name="std_name"><br><br>
           <label>Students ID : </label>
           <input type="text" name="std_id"><br><br>
           <label>Students Mail : </label>
           <input type="text" name="std_mail"><br><br>
           <input type="submit" value="Submit">

        </form>

    </center>
</body>
</html><?php /**PATH E:\IQAC\Web Development in Laravel\Pre Assessment\example-app\resources\views/dept/create.blade.php ENDPATH**/ ?>