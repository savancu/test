

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <h1><?php echo e($tintuc->TieuDe); ?></h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">admin</a>
            </p>

            <!-- Preview Image -->
            <img class="img-responsive" src="upload/tintuc/<?php echo e($tintuc->Hinh); ?>" alt="">

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> <?php echo e($tintuc->created_at); ?></p>
            <hr>

            <!-- Post Content -->
            <p class="lead">
            	<?php echo $tintuc->NoiDung; ?> 
            	<!-- dùng ! vì: trong nội dung có html -->
            </p>

            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            <?php if(Auth::check()): ?>
            <div class="well">
                <?php if(session('thongbao')): ?>
                    <?php echo e(session('thongbao')); ?>

                <?php endif; ?>
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form action="comment/<?php echo e($tintuc->id); ?>" method="post" role="form">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                    <div class="form-group">
                        <textarea class="form-control" name="NoiDung" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>

            <hr>
            <?php endif; ?>
            <!-- Posted Comments -->

            <!-- Comment -->
            <?php $__currentLoopData = $tintuc->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo e($cm->user->name); ?>

                        <small><?php echo e($cm->created_at); ?></small>
                    </h4>
                    <?php echo e($cm->NoiDung); ?>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin liên quan</b></div>
                <div class="panel-body">
                	<?php $__currentLoopData = $tinlienquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="tintuc/<?php echo e($tt->id); ?>/<?php echo e($tt->TieuDeKhongDau); ?>.html">
                                <img class="img-responsive" src="upload/tintuc/<?php echo e($tt->Hinh); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b><?php echo e($tt->TieuDe); ?></b></a>
                        </div>
                        <p style="padding-left: 5px"><?php echo e($tt->TomTat); ?></p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin nổi bật</b></div>
                <div class="panel-body">
                	<?php $__currentLoopData = $tinnoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="tintuc/<?php echo e($tt->id); ?>/<?php echo e($tt->TieuDeKhongDau); ?>.html">
                                <img class="img-responsive" src="upload/tintuc/<?php echo e($tt->Hinh); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><?php echo e($tt->TieuDe); ?></a>
                        </div>
                        <p style="padding-left: 5px"><?php echo e($tt->TomTat); ?></p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            
        </div>

    </div>
    <!-- /.row -->
</div>
<?php $__env->stopSection(); ?>
<!-- end Page Content -->
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HongDiep\demo\resources\views/pages/tintuc.blade.php ENDPATH**/ ?>