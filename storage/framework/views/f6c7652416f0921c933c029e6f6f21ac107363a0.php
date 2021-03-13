<div id="footer">
  <div id="footer_inner">
    <div class="columns">
      <div class="widget">
        <h6 align="center">Bài viết gần đây</h6>
        <ul class="recent_posts">
          <?php
            $dem = 1;
          ?>
          <?php $__currentLoopData = $tintucShare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttsh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($dem < 6 ): ?>
              <li class="clearfix">
                <h3 class="title"><a href="tintuc/<?php echo e($ttsh->id); ?>/<?php echo e($ttsh->TieuDeKhongDau); ?>.html"><?php echo e($ttsh->TieuDe); ?></a></h3>
              </li>
            <?php endif; ?>
            <?php
              $dem++;
            ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="columns" style="width:15% !important;">
      <div class="widget">
        <h6 align="center">Đường dẫn nhanh</h6>
        <ul class="quick_links" align="center">
          <?php
            $countFlas = 1;
          ?>
          <?php $__currentLoopData = $theloaiShare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($countFlas < 9): ?>
            <li><a href="Javascript::;"><?php echo e($tl->Ten); ?></a></li>
            <?php endif; ?>
            <?php
              $countFlas++;
            ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php /**PATH C:\xampp\htdocs\WebsiteTinTuc\Duan\resources\views/layout/footer.blade.php ENDPATH**/ ?>