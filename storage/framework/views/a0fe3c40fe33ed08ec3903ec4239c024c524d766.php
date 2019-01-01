<?php $__env->startSection('title'); ?>
    This is master
<?php $__env->stopSection(); ?>
<br/>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    <br/>
    This is content of Master<br/>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('root.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>