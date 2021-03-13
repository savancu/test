

<?php $__env->startSection('title'); ?>
  Người dùng 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div id="outer-wrapper">
	<div id="content-wrapper">
		<div id="inner-content">
			<div id="entry">
				<div id="respond" class="contact">
					<h1>Thông tin người dùng</h1>
					<?php if(count($errors) > 0): ?>
					<div class="alert-danger">
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php echo e($err); ?><br>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<?php endif; ?>
					<?php if(session('thongbao')): ?>
					<div class="alert-success">
						<?php echo e(session('thongbao')); ?>

					</div>
					<?php endif; ?>
					<form action="nguoidung" method="post">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

						<p>
							<label>Họ tên<span class="star">*</span></label>
							<input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" class="required requiredField">
						</p>
						<p>
							<label>Email<span class="star">*</span></label>
							<input type="email" name="email" value="<?php echo e(Auth::user()->email); ?>" class="required requiredField" readonly>
						</p>
						<p>
							<input type="checkbox" id="changePassword" class="check-change-pass" name="changePassword" style="width: auto; margin-top: 1px;">
							<label>Đổi mật khẩu<span class="star">*</span></label>
							<input type="password" name="password" class="required requiredField password" disabled>
						</p>
						<p>
							<label>Nhập lại mật khẩu<span class="star">*</span></label>
							<input type="password" name="passwordAgain" class="required requiredField password" disabled>
						</p>
						<button type="submit" class="btn btn-default">Sửa
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

<?php $__env->startSection('script'); ?>
<script>
	$(document).ready(function(){
		$("#changePassword").change(function(){
			if($(this).is(":checked"))
			{
				$(".password").removeAttr('disabled');
			}
			else
			{
				$(".password").attr('disabled','')
			}
		})
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebsiteTinTuc\Duan\resources\views/pages/nguoidung.blade.php ENDPATH**/ ?>