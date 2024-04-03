<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('users.create')); ?>">Create</a>
    <hr>
<h1>Users</h1>

<ul>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($user->firstname); ?> | <a href="<?php echo e(route('users.edit',['user' => $user->id])); ?>">Edit</a> | <a href="<?php echo e(route('users.show', ['user' => $user->id])); ?>">Show</a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

    <form action="<?php echo e(route('home', ['user' => $user->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="get">
        <button type="submit">HOME</button>
    </form>

    <form action="<?php echo e(route('users.index', ['user' => $user->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="get">
        <button type="submit">Recarregar</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/andre-arao/smanager/projects/andre-crud-php/resources/views/users.blade.php ENDPATH**/ ?>