

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
    		<div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
				  	<div class="panel-heading">Đăng nhập</div>
				  	<div class="panel-body">
				  		<?php if(count($errors) > 0): ?>
				  			<div class="alert alert-danger">
				  				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  					<?php echo e($err); ?><br>
				  				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  			</div>
				  		<?php endif; ?>

				  		<?php if(session('thongbao')): ?>
					  		<div class="alert alert-danger">
					  			<?php echo e(session('thongbao')); ?>

					  		</div>
				  		<?php endif; ?>
				    	<form action="dangnhap" method="post">
				    		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" 
							  	>
							</div>
							<br>	
							<div>
				    			<label>Mật khẩu</label>
							  	<input type="password" class="form-control" name="password">
							</div>
							<br>
							<button type="submit" class="btn btn-default">Đăng nhập
							</button>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HongDiep\demo\resources\views/pages/dangnhap.blade.php ENDPATH**/ ?>