<?php $__env->startSection('content'); ?>

<h1>Home</h1>

<form action="<?php echo e(route('users.index', ['user' => $user->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="get">
    <button type="submit">Lista de Users</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/andre-arao/smanager/projects/andre-crud-php/resources/views/home.blade.php ENDPATH**/ ?>