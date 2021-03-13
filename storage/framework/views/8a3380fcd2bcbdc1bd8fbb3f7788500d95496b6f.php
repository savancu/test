<div id="header">
    <div id="header-top">
      <h2 id="logo"><a href="trangchu"></a></h2>
      <div class="nav-container">
        <ul id="menu">
          <?php if(!Auth::check()): ?>
            <li><a href="dangnhap">Đăng nhập</a></li>
            <li><a href="dangky">Đăng ký</a></li>
          <?php else: ?>
            <li>
              <a href="nguoidung">
                <span class ="glyphicon glyphicon-user"></span>
                <?php echo e(Auth::user()->name); ?>

              </a>
            </li>
            <li><a href="dangxuat">Đăng Xuất</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <form method="post" id="searchform" action="timkiem" name="searchform">
        <?php echo csrf_field(); ?>
        <input type="text" class='rounded text_input' value="" name="tukhoa" id="s" />
        <input type="submit" class="button ie6fix" id="searchsubmit" value="&rarr;" />
      </form>
    </div>
    
    <?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </div><?php /**PATH C:\xampp\htdocs\WebsiteTinTuc\Duan\resources\views/layout/header.blade.php ENDPATH**/ ?>