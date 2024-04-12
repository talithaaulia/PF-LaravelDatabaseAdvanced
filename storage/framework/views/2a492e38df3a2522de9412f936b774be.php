<?php $__env->startSection('content'); ?>
    <div class="container-sm my-5">
        <form action="<?php echo e(route('employees.update', ['employee' => $employee->id])); ?>" method="POST">
            <?php echo csrf_field(); ?> <?php echo method_field('put'); ?>
            <div class="row justify-content-center">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pf-modul4\resources\views/employee/edit.blade.php ENDPATH**/ ?>