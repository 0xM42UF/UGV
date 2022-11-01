<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
</head>
<body>
    
    <center>
        <h1>Department</h1>
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

           <label>Department name : </label>
           <input type="text" name="dept_name"><br><br>
           <label>Department Code : </label>
           <input type="text" name="dept_code"><br><br>
           <input type="submit" value="Submit">

        </form>

    </center>
</body>
</html><?php /**PATH C:\james\resources\views/dept/create.blade.php ENDPATH**/ ?>