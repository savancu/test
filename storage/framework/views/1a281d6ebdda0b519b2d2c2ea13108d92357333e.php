


<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="container">

	<?php echo $__env->make('layout.slides', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="space20"></div>


    <div class="row main-left">
        <?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col-md-9">
            <div class="panel panel-default">            
            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
            		<h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
            	</div>

            	<div class="panel-body">
            		<?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            			<?php if(count($tl->loaitin) > 0): ?>
	            		<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="category.html"><?php echo e($tl->Ten); ?></a>
		                		<?php $__currentLoopData = $tl->loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                		<small>
		                			<a href="loaitin/<?php echo e($lt->id); ?>/<?php echo e($lt->TenKhongDau); ?>.html"><i><?php echo e($lt->Ten); ?></i></a>/
		                		</small>
		                		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                	</h3>
		                	<?php
		                	$data = $tl->tintuc->where('NoiBat',1)->sortByDesc('create_at')->take(5);
		                	//sortByDesc sắp xếp giảm dần
		                	$tin1 = $data->shift();
		                	?>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="tintuc/<?php echo e($tin1['id']); ?>/<?php echo e($tin1['TieuDeKhongDau']); ?>.html">
			                            <img class="img-responsive" src="upload/tintuc/<?php echo e($tin1['Hinh']); ?>" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-7">
			                        <h3><?php echo e($tin1['TieuDe']); ?></h3>
			                        <p><?php echo e($tin1['TomTat']); ?></p>
			                        <a class="btn btn-primary" href="tintuc/<?php echo e($tin1['id']); ?>/<?php echo e($tin1['TieuDeKhongDau']); ?>.html">Xem thêm<span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>
		                    

							<div class="col-md-4">
								<?php $__currentLoopData = $data->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tintuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<a href="tintuc/<?php echo e($tintuc['id']); ?>/<?php echo e($tintuc['TieuDeKhongDau']); ?>.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span><?php echo e($tintuc['TieuDe']); ?>

									</h4>
								</a>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							
							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <?php endif; ?>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
            </div>
    	</div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HongDiep\demo\resources\views/pages/trangchu.blade.php ENDPATH**/ ?>