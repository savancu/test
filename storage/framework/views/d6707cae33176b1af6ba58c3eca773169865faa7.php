<!-- slider -->
<?php $__env->startSection('css'); ?>
<style>
	
	.nivo-controlNav img{
		width: 80px;
		height: 80px;
	}

</style>
<?php $__env->stopSection(); ?>
<div id="slider-wrapper">
    <div id="slider" class="nivoSlider"> 
    	<?php
    		$i = 1;
    	?>
    	<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<?php if($i < count($slide)): ?>
    			<a href="#"><img src="upload/slide/<?php echo e($sl->Hinh); ?>" alt="" rel="upload/slide/<?php echo e($sl->Hinh); ?>" /></a>
    		<?php endif; ?>
	        <?php
	        	$i++;
	        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
        <img style="width: 640px; height: 350px;" src="upload/slide/<?php echo e($slide[count($slide) - 1]->Hinh); ?>" alt="" rel="upload/slide/<?php echo e($slide[count($slide) - 1]->Hinh); ?>" /> 

    </div>
    <div class="clear"></div>
</div>
<!-- end slide --><?php /**PATH K:\xampp\htdocs\Duan\resources\views/layout/slides.blade.php ENDPATH**/ ?>