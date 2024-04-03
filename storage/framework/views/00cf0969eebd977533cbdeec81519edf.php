<?php $__env->startSection('content'); ?>

    <h1>Edit</h1>

    <?php if(session()->has('message')): ?>
        <?php echo e(session()->get('message')); ?>

    <?php endif; ?>

    <form action="<?php echo e(route('users.update', ['user' => $user->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="put">
        <input type="text" name="firstname" value="<?php echo e($user -> firstname); ?>">
        <input type="text" name="lastname" value="<?php echo e($user -> lastname); ?>">
        <input type="text" name="email" value="<?php echo e($user -> email); ?>">
        <button type="submit">Update</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/andre-arao/smanager/projects/andre-crud-php/resources/views/user_edit.blade.php ENDPATH**/ ?>