<div id="footer"> <span id="Scroll"><a href="#">&uarr;</a></span>
  <div id="footer_inner">
    <div class="columns">
      <div class="widget">
        <h6>Thông tin</h6>
        <p>Chịu trách nhiệm quản lý nội dung</p>
        <p>Hợp tác truyền thông</p>
        <p>Liên hệ quảng cáo</p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="columns">
      <div class="widget">
        <h6>Hình ảnh</h6>
        <div class="flickr">
          <?php $__currentLoopData = $tintucShare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttsh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div> <a href="tintuc/<?php echo e($ttsh->id); ?>/<?php echo e($ttsh->TieuDeKhongDau); ?>.html"><img alt="" src="upload/tintuc/<?php echo e($ttsh->Hinh); ?>" /></a></div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="columns">
      <div class="widget">
        <h6>Bài viết gần đây</h6>
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
        <h6>Đường dẫn nhanh</h6>
        <ul class="quick_links">
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
    <div class="footer_bottom">
      <p>&copy; Bản quyền <script>document.write(new Date().getFullYear())</script>. Thuộc về SiVi CODE. Thiết kế bởi <a target="_blank" href="https://www.facebook.com/groups/614956132377789">Hồng Diệp</a></p>
    </div>
  </div>
</div>

<?php /**PATH C:\xampp\htdocs\HongDiep\Duan\resources\views/layout/footer.blade.php ENDPATH**/ ?>