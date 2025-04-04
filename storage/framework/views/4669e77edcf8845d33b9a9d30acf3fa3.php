<!--  -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <link rel="stylesheet" href="<?php echo e(asset('publicExE/css/style.css')); ?>">
</head>
<body>

<nav>
    <a href="<?php echo e(route('loginE')); ?>">Home</a>
    <a href="<?php echo e(route('logoutE')); ?>">Đăng xuất</a>
</nav>

<div class="container">
    <h2>Danh sách user</h2>
    <table border="1" width="100%">
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Thao tác</th>
        </tr>
        <tr>
            <td>1</td>
            <td>UPVH</td>
            <td>ATJW@gmail.com</td>
            <td><a href="<?php echo e(route('updateE')); ?>">Edit</a> | <a href="<?php echo e(route('viewE')); ?>">View</a> | <a href="#">Delete</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>IFUK</td>
            <td>KULB@gmail.com</td>
            <td><a href="<?php echo e(route('updateE')); ?>">Edit</a> | <a href="<?php echo e(route('viewE')); ?>">View</a> | <a href="#">Delete</a></td>
        </tr>
    </table>
</div>

</body>
</html>

<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bew3\laravel11-app\resources\views\layoutEXE\list.blade.php ENDPATH**/ ?>