<!--  -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
    <link rel="stylesheet" href="<?php echo e(asset('publicExE/css/style.css')); ?>">
</head>
<body>

<nav>
    <a href="<?php echo e(route('indexE')); ?>">Home</a>
    <a href="<?php echo e(route('listE')); ?>">Danh sách người dùng</a>
</nav>

<div class="container">
    <h2>Màn hình cập nhật</h2>
    <input type="text" value="xxx">
    <input type="password" value="xxx">
    <input type="password" value="xxx">
    <input type="email" value="xxx">
    <button>Cập nhật</button>
</div>

</body>
</html>

<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bew3\laravel11-app\resources\views\layoutEXE\update.blade.php ENDPATH**/ ?>