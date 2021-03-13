

<?php $__env->startSection('title'); ?>
  Đăng ký 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div id="outer-wrapper">
	<div id="content-wrapper">
		<div id="inner-content">
			<div id="entry">
				<div id="respond" class="contact">
					<h1>Đăng ký</h1>
					<?php if(count($errors) > 0): ?>
					<div class="alert-danger">
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($err); ?><br>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<?php endif; ?>
					<?php if(session('thongbao')): ?>
					<div class="alert alert-success">
						<?php echo e(session('thongbao')); ?>

					</div>
					<?php endif; ?>
					<form action="dangky" method="post" id="contactForm">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
						<p>
							<label>Họ tên<span class="star">*</span></label>
							<input type="text" name="name" value="" class="required requiredField">
						</p>
						<p>
							<label>Email<span class="star">*</span></label>
							<input type="email" name="email" value="" class="required requiredField">
						</p>
						<p>
							<label>Nhập mật khẩu<span class="star">*</span></label>
							<input type="password" name="password" value="" class="required requiredField">
						</p>
						<p>
							<label>Nhập lại mật khẩu<span class="star">*</span></label>
							<input type="password" name="passwordAgain" value="" class="required requiredField">
						</p>
						<button type="submit" class="btn btn-default">Đăng ký
						</button>
					</form>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebsiteTinTuc\Duan\resources\views/pages/dangky.blade.php ENDPATH**/ ?>