

<?php $__env->startSection('title'); ?>
  Loại tin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="content-wrapper">
  <div id="inner-content">
    <div id="single_post_container">
      <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="post_single">
        <h4 class="post_title clearfix"><a href="tintuc/<?php echo e($tt->id); ?>/<?php echo e($tt->TieuDeKhongDau); ?>.html"><?php echo e($tt->TieuDe); ?></a><span class="comment_bubble"><a href="#"><?php echo e(count($tt->comment)); ?></a></span></h4>
        <div class="post_content clearfix">
          <div class="thumbnail"> <a href="tintuc/<?php echo e($tt->id); ?>/<?php echo e($tt->TieuDeKhongDau); ?>.html"><img style="width: 100px; height: 100px;" src="upload/tintuc/<?php echo e($tt->Hinh); ?>" alt="" /></a>
          </div>
          <div class="summary_article">
            <p><?php echo e($tt->TomTat); ?> </p>
          </div>
        </div>
        <span class="read_more"><a href="tintuc/<?php echo e($tt->id); ?>/<?php echo e($tt->TieuDeKhongDau); ?>.html">Xem thêm...</a></span> 
      </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="clear"></div>
        <div class="pagenavi clearfix">
          <?php 
            $start = 1; 
            $end = $tintuc->lastPage();
            $totalPage = 8;
          ?>
          <?php if($tintuc->currentPage() - $totalPage > 1): ?>
            <a class="page_number" href="<?php echo e($tintuc->url(1)); ?>">&laquo;</a>
            <span class="page_number">...</span>
            <?php $start =  $tintuc->currentPage() - $totalPage; ?>
          <?php endif; ?>
          <?php if($tintuc->currentPage() + $totalPage < $tintuc->lastPage()): ?>
            <?php $end =  $tintuc->currentPage() + $totalPage; ?>
          <?php endif; ?>
          <?php for($i = $start; $i <= $end; $i++): ?>
              <?php if($tintuc->currentPage() == $i): ?>
                <a class="current" href="<?php echo e($tintuc->url($i)); ?>"><?php echo e($i); ?></a>
              <?php else: ?>
                <a class="page_number" href="<?php echo e($tintuc->url($i)); ?>"><?php echo e($i); ?></a>
              <?php endif; ?>
          <?php endfor; ?> 
          <?php if($tintuc->currentPage() + $totalPage < $tintuc->lastPage()): ?>
            <span class="page_number">...</span>
            <a class="page_number" href="<?php echo e($tintuc->url($tintuc->lastPage())); ?>">&raquo;</a>
          <?php endif; ?>
        </div>
    </div>
  </div>
    <div id="sidebar">
      <div class="widget">
        <h2 class="title clearfix"><span>Một số tin khác</span></h2>
        <div class="widget-content">
          <?php $__currentLoopData = $tintucnoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttnb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <ul id="twitter_widget">
            <li>
              <p><?php echo e($ttnb->TieuDe); ?><small><?php echo e($ttnb->updated_at); ?></small></p>
            </li>
          </ul>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- end Page Content -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebsiteTinTuc\Duan\resources\views/pages/loaitin.blade.php ENDPATH**/ ?>