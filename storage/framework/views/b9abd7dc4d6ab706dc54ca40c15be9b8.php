
<?php $__env->startSection('content'); ?>
<div class="row mt-4 mb-4" >
    <div class="col-12">
        <img src="<?php echo e(asset('images/banner.jpg')); ?>" width='100%' alt="">
    </div>
</div>
<div class="row">
        <?php $__currentLoopData = $campuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4">
            <div class="card mb-1">
                <img class="card-img-top" src="<?php echo e(asset('images/'.$item.'.jpg')); ?>" alt="Card image" style='max-height:200px;'>
                <div class="card-body">
                  <h4 class="card-title text-center"><?php echo e($item); ?></h4>
                  <a href="<?php echo e(route('campus.student', ['campus'=>$item])); ?>" class="btn btn-primary" style='width:100%'>lihat daftar mahasiswa</a>
                </div>
              </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my_apps\php\materi_ngajar\web_prog\pert4\resources\views/admin/campus.blade.php ENDPATH**/ ?>