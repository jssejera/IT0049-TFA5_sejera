<?php $__env->startSection('content'); ?>
<section class="panel">
    <h1>Customer Accounts</h1>
    <p>Customer records are temporarily provided by a static PHP array in <code>CustomerController</code>.</p>
    <table>
        <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($customer['id']); ?></td>
                <td><?php echo e($customer['name']); ?></td>
                <td><?php echo e($customer['email']); ?></td>
                <td><?php echo e($customer['phone']); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => 'Customer Accounts'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\IT0049 TFA5 From Zero to Four Pages\resources\views/customers.blade.php ENDPATH**/ ?>