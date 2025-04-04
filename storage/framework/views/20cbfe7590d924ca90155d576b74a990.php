

<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo e($messi->id); ?></td>
                            <td><?php echo e($messi->name); ?></td>
                            <td><?php echo e($messi->email); ?></td>
                            <td><?php echo e($messi->phone); ?></td>
                            <td><?php echo e($messi->address); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bew3\laravel11-app\resources\views\crud_user\read.blade.php ENDPATH**/ ?>