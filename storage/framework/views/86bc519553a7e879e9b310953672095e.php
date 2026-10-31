<?php $__env->startSection('content'); ?>
<section class="panel">
    <h1>User Accounts</h1>
    <p>User records are temporarily provided by a static PHP array in <code>UserController</code>.</p>
    <table>
        <thead><tr><th>ID</th><th>Username</th><th>Role</th><th>Status</th></tr></thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user['id']); ?></td>
                <td><?php echo e($user['username']); ?></td>
                <td><?php echo e($user['role']); ?></td>
                <td><span class="badge <?php echo e($user['status'] === 'Inactive' ? 'inactive' : ''); ?>"><?php echo e($user['status']); ?></span></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => 'User Accounts'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\IT0049 TFA5 From Zero to Four Pages\resources\views/users.blade.php ENDPATH**/ ?>