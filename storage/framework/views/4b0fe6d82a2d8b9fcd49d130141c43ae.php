<?php $__env->startSection('title','Data - Mapel'); ?>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Data Mapel')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container-fluid mt-4">
        <h2 class="mb-3">Daftar Mapel</h2>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <a href="<?php echo e(url('mapel/create')); ?>" class="btn btn-primary mb-3" style="float: right;">Tambah Mapel</a>

        <form method="GET" action="<?php echo e(url('mapel')); ?>" class="mb-6 d-flex gap-2">
            <div>
                <input type="text" name="mapel" class="form-control" placeholder="Cari berdasarkan Mapel..." value="<?php echo e(request('mapel')); ?>">
            </div>
                <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        <table id="slideTable" class="table table-striped table-bordered">
            <thead>
                <tr class="tabel">
                    <th>Id Mapel</th>
                    <th>Nama Mapel</th>
                    <th>Kelompok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row->id_mapel); ?></td>
                    <td><?php echo e($row->nama_mapel); ?></td>
                    <td><?php echo e($row->kelompok); ?></td>
                    <td>
                        <a href="<?php echo e(url('mapel/'.$row->id_mapel.'/edit')); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(url('mapel/'.$row->id_mapel)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="mt-3">
            <?php echo e($mapel->links()); ?>

        </div>

        <style>
            .tabel th {
                background-color: rgba(78, 105, 168, 1) !important; 
                color: white !important;
            }

        </style>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/mapel/index.blade.php ENDPATH**/ ?>