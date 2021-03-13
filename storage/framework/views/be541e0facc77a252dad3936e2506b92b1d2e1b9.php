

<?php $__env->startSection('title'); ?>
  Tin tức 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="outer-wrapper">
    <div id="content-wrapper">
        <div>
            <div id="entry">
                <div class="entry-content">
                    <img src="upload/tintuc/<?php echo e($tintuc->Hinh); ?>" alt="" />
                    <?php echo $tintuc->NoiDung; ?>

                    <div class="social_sharing_post"> 
                        <a href="https://twitter.com/intent/tweet?url=<?php echo e(url()->current()); ?>" class="twitter"> Twitter</a> 
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo e(url()->current()); ?>" class="facebook">Facebook</a> 
                    </div>
                </div>
                <div id="related_posts" class="clearfix">
                    <h3><span>Related posts</span></h3>
                    <ul>
                        <?php $__currentLoopData = $tinlienquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tlq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="thumb"><a href="tintuc/<?php echo e($tlq->id); ?>/<?php echo e($tlq->TieuDeKhongDau); ?>.html"><img style="width: 160px; height: 124px;" src="upload/tintuc/<?php echo e($tlq->Hinh); ?>" alt=""/></a>
                            </div>
                            <div class="heading-container">
                                <h4 class="post_title"><a href="tintuc/<?php echo e($tlq->id); ?>/<?php echo e($tlq->TieuDeKhongDau); ?>.html"><?php echo e(\Illuminate\Support\Str::limit($tlq->TieuDe, 40, $end='...')); ?></a></h4>
                                <span class="line"></span> <span class="comment_number"><?php echo e(count($tlq->comment)); ?> bình luận</span> 
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div id="comments">
                <h3><?php echo e(count($tintuc->comment)); ?> bình luận về "<?php echo e($tintuc->TieuDe); ?>"</h3>
                <ol>
                    <?php $__currentLoopData = $tintuc->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <div class="line"></div>
                        <div class="image"> <a href="#"><img alt="" src="css/images/gravatar.jpg" /></a></div>
                        <div class="details">
                            <div class="name"> <span class="author"><a href="#"><?php echo e($cm->user->name); ?></a></span> <span class="comment-date"><?php echo e($cm->created_at); ?></span> </div>
                            <p><?php echo e($cm->NoiDung); ?></p>
                        </div>
                        <span class="reply"><a href="#">Xóa</a></span> 
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
                <div class="clear"></div>
                <?php if(Auth::check()): ?>
                <div id="respond">
                    <h3>Viết bình luận</h3>
                    <form action="comment/<?php echo e($tintuc->id); ?>" method="post" role="form">
                        <?php echo csrf_field(); ?>
                        <p>
                            <label>Bình luận<span class="star">*</span></label>
                            <textarea rows="10" cols="73" name="comment"></textarea>
                        </p>
                        <p class="submit">
                            <input type="submit" value="Gửi" class="btn" name="submit" />
                        </p>
                    </form>
                    <div class="clear"></div>
                </div>
                <?php else: ?>
                <h3>Đăng nhập để bình luận</h3>
                <?php endif; ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<!-- end Page Content -->
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\xampp\htdocs\Duan\resources\views/pages/tintuc.blade.php ENDPATH**/ ?>