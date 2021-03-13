<div id="header-bottom">
    <div class="category-container">
        <ul class="sf-menu">
            <li><a href="trangchu">Home</a></li>
            <?php $__currentLoopData = $theloaiShare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($tl->loaitin) > 0): ?>
                <li> <a href="javascript::;"><?php echo e($tl->Ten); ?></a>
                    <ul>
                        <?php $__currentLoopData = $tl->loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="loaitin/<?php echo e($lt->id); ?>/<?php echo e($lt->TenKhongDau); ?>.html"><?php echo e($lt->Ten); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div><?php /**PATH K:\xampp\htdocs\Duan\resources\views/layout/menu.blade.php ENDPATH**/ ?>