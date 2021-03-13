

<?php $__env->startSection('title'); ?>
  Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="outer-wrapper">
	<div id="content-wrapper">
		<div id="inner-content">
			<div id="entry">
				<div id="respond" class="contact">
					<h1>Đăng nhập</h1>
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
						<p>
							<label>Email<span class="star">*</span></label>
							<input type="email" name="email" value="" class="required requiredField email" />
						</p>
						<p>
							<label>Mật khẩu<span class="star">*</span></label>
							<input type="password" name="password" value="" class="required requiredField" />
						</p>
						<button type="submit" class="btn btn-default">Đăng nhập
						</button>
					</form>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\xampp\htdocs\Duan\resources\views/pages/dangnhap.blade.php ENDPATH**/ ?>