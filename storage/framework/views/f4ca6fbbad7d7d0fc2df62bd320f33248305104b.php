

<?php $__env->startSection('title'); ?>
  Trang chủ 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="outer-wrapper">
  <?php echo $__env->make('layout.slides', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="clear"></div>
  <div id="featured">
    <h4 id="featured-title"><span>Featured</span></h4>
    <div id="featured_slider" style="position:relative; overflow:hidden;">
      <?php if($tinnoibat != null): ?>
      <?php $__currentLoopData = $tinnoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tnb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="item" >
        <?php $__currentLoopData = $tnb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="column ">
          <div class="inner">
            <div class="image"> <a href="tintuc/<?php echo e($item->id); ?>/<?php echo e($item->TieuDeKhongDau); ?>.html"><img alt="" src="upload/tintuc/<?php echo e($item->Hinh); ?>" /></a></div>
            <h3><a href="tintuc/<?php echo e($item->id); ?>/<?php echo e($item->TieuDeKhongDau); ?>.html"><?php echo e($item->TieuDe); ?></a></h3>
          </div>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="clear"></div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?> 
    </div>
    <div class="nav_controls">
      <div id="featured_slider_prev"><a href="#">‹‹ Previous</a></div>
      <div id="featured_slider_next"><a href="#">Next ››</a></div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="content-wrapper">
    <div id="inner-content">
      <div id="category_sort" class="clearfix">
        <?php if(count($tintuclq1) > 0): ?>
        <div class="column">
          <h4><span><?php echo e($loaitin[0]->Ten); ?></span></h4>
          <?php $__currentLoopData = $tintuclq1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttlq1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <ul>
            <li><a href="tintuc/<?php echo e($ttlq1->id); ?>/<?php echo e($ttlq1->TieuDeKhongDau); ?>.html"><?php echo e($ttlq1->TieuDe); ?></a></li>
          </ul>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <?php if(count($tintuclq2) > 0): ?>
        <div class="column">
          <h4><span><?php echo e($loaitin[1]->Ten); ?></span></h4>
          <?php $__currentLoopData = $tintuclq2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttlq2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <ul>
            <li><a href="tintuc/<?php echo e($ttlq2->id); ?>/<?php echo e($ttlq2->TieuDeKhongDau); ?>.html"><?php echo e($ttlq2->TieuDe); ?></a></li>
          </ul>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <?php if(count($tintuclq3) > 0): ?>
        <div class="column">
          <h4><span><?php echo e($loaitin[2]->Ten); ?></span></h4>
          <?php $__currentLoopData = $tintuclq3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttlq3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <ul>
            <li><a href="tintuc/<?php echo e($ttlq3->id); ?>/<?php echo e($ttlq3->TieuDeKhongDau); ?>.html"><?php echo e($ttlq3->TieuDe); ?></a></li>
          </ul>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
      </div>
      <div id="double_container">
        <h4 class="cont-title"><span>Một số bài viết khác</span></h4>
        <?php if($tintuc != null): ?>
        <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post_double">
          <h4 class="post_title"><a href="tintuc/<?php echo e($item->id); ?>/<?php echo e($item->TieuDeKhongDau); ?>.html"><?php echo e(\Illuminate\Support\Str::limit($item->TieuDe, 40, $end='...')); ?></a></h4>
          <div class="post_content clearfix">
            <div class="thumbnail"> <a href="tintuc/<?php echo e($item->id); ?>/<?php echo e($item->TieuDeKhongDau); ?>.html"><img src="upload/tintuc/<?php echo e($item->Hinh); ?>" alt="" /></a></div>
            <div class="summary_article">
              <p><?php echo e(\Illuminate\Support\Str::limit($item->TomTat, 160, $end='...')); ?></p>
            </div>
          </div>
          <span class="read_more"><a href="tintuc/<?php echo e($item->id); ?>/<?php echo e($item->TieuDeKhongDau); ?>.html">Xem thêm...</a></span> 
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div id="sidebar">
      <div class="widget">
        <div id="tabs">
          <ul id="tab-items" style="display: flex; justify-content: center;">
            <?php
              $i = 1;
            ?>
            <?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($i > 3): ?>
                <li><a href="#tab-one"><?php echo e($lt->Ten); ?></a></li>
              <?php endif; ?>
              <?php
                $i++;
              ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <div class="tabs-inner">
            <div id="tab-one"  class="tab">
              <ul>
                <?php if($tinnoibat != null): ?>
                <?php $__currentLoopData = $tinnoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tnb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $tnb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                      <div class="tab-thumb"> <a class="thumb" href="#"><img width="45" height="45" alt=""  src="upload/tintuc/<?php echo e($item->Hinh); ?>" /></a></div>
                      <h3 class="entry-title"><a class="title" href="tintuc/<?php echo e($item->id); ?>/<?php echo e($item->TieuDeKhongDau); ?>.html"><?php echo e(\Illuminate\Support\Str::limit($item->TieuDe, 40, $end='...')); ?></a></h3>
                      <div class="entry-meta entry-header"> <span class="published"><?php echo e($item->updated_at); ?></span></div>
                    </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php break; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?> 
              </ul>
            </div>            
          </div>
        </div>
      </div>   
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\xampp\htdocs\Duan\resources\views/pages/trangchu.blade.php ENDPATH**/ ?>