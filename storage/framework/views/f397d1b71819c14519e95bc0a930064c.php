<!--  -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng thoát</title>
    <link rel="stylesheet" href="<?php echo e(asset('publicExE/css/style.css')); ?>">
</head>
<body>

<nav>
    <a href="<?php echo e(route('indexE')); ?>">Home</a>
    <a href="<?php echo e(route('loginE')); ?>">Đăng nhập</a>
    <a href="<?php echo e(route('registerE')); ?>">Đăng ký</a>
</nav>


</body>
</html>


<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bew3\laravel11-app\resources\views\layoutEXE\logout.blade.php ENDPATH**/ ?>