
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
        <h3 class='mt-4'><?php echo e($campus); ?></h3>
        <table class='table'>
            <thead>
                <tr>
                    <th>nim</th>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item['nim']); ?></td>
                        <td><?php echo e($item['name']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
        <br>
        <a href="<?php echo e(route('campus')); ?>" class='btn btn-primary'>back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my_apps\php\materi_ngajar\web_prog\pert4\resources\views/admin/student.blade.php ENDPATH**/ ?>