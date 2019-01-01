<?php $__env->startSection('noidung'); ?>
    Day la content cua noidung
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Sub title'); ?>

<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    Parent nam phia tren day
<?php $__env->stopSection(); ?>

<?php
    $hoten = "Hom nay la thu 2"
?>

<?php if(strlen($hoten)<=10): ?>
    <?php echo e(strlen($hoten)); ?>

<?php elseif(strlen($hoten) > 10): ?>
    Hom nay la thu 3
    <?php echo e(strlen($hoten)); ?>

<?php endif; ?>
<?php echo e(isset($diem) ? $diem : "Khong ton tai"); ?>

<?php
    $count = 10
?>

<?php
    $i=0
?>
<?php while($i < $count): ?>
    <?php echo e('So thu tu '.$i); ?> </br>
    <?php
        $i++
    ?>
<?php endwhile; ?>
<?php
    $arr=["hom","nay","la","thu","hai"]
?>
<?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($item); ?> </br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('root.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>