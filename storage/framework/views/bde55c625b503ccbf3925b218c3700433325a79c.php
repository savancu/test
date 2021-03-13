

<?php $__env->startSection('title'); ?>
Sửa Tin tức
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small><?php echo e($tintuc->TieuDe); ?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($err); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>  
                <?php if(session('thongbaothanhcong')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('thongbaothanhcong')); ?>

                </div>
                <?php endif; ?>  
                <form action="admin/tintuc/sua/<?php echo e($tintuc->id); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                            <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option 
                                <?php if($tintuc->loaitin->theloai->id == $tl->id): ?>
                                <?php echo e("selected"); ?>

                                <?php endif; ?>
                                value="<?php echo e($tl->id); ?>"> 
                                <?php echo e($tl->Ten); ?> 
                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại tin</label>
                        <select class="form-control" name="LoaiTin" id="LoaiTin">
                            <?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option 
                                <?php if($tintuc->loaitin->id == $lt->id): ?>
                                <?php echo e("selected"); ?>

                                <?php endif; ?>
                                value="<?php echo e($lt->id); ?>"> 
                                <?php echo e($lt->Ten); ?> 
                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" value="<?php echo e($tintuc->TieuDe); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea name="TomTat" id="demo" class="form-control ckeditor" rows="3">
                            <?php echo e($tintuc->TomTat); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="NoiDung" id="demo" class="form-control ckeditor" rows="5">
                            <?php echo e($tintuc->NoiDung); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <p>
                            <img width="400px" src="upload/tintuc/<?php echo e($tintuc->Hinh); ?>">
                        </p>
                        <input type="file" name="Hinh" class="form-control" /> 
                    </div>
                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0" 
                            <?php if($tintuc->NoiBat == 0): ?> 
                            <?php echo e("checked"); ?>

                            <?php endif; ?>
                            type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1"
                            <?php if($tintuc->NoiBat == 1): ?> 
                            <?php echo e("checked"); ?>

                            <?php endif; ?>
                            type="radio">Có
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bình luận
                    <small>danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(session('thongbaoxoacomment')): ?>
            <div class="col-lg-12 alert alert-success">
                <?php echo e(session('thongbaoxoacomment')); ?>

            </div>
            <?php endif; ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Người dùng</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tintuc->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo e($cm->id); ?></td>
                        <td><?php echo e($cm->user->name); ?></td>
                        <td><?php echo e($cm->NoiDung); ?></td>
                        <td><?php echo e($cm->created_at); ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/<?php echo e($cm->id); ?>/<?php echo e($tintuc->id); ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.end row-->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function(){
        $("#TheLoai").change(function(){
            var idTheLoai = $(this).val();
            $.get("admin/ajax/loaitin/"+idTheLoai,function(data){
                $("#LoaiTin").html(data);
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HongDiep\Duan\resources\views/admin/tintuc/sua.blade.php ENDPATH**/ ?>