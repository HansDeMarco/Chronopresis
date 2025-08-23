<?php $__env->startSection('title', 'Data - Kejuruan'); ?>

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
            <?php echo e(__('Data Kejuruan')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container-fluid mt-4">
        <h2 class="mb-3">Daftar Kejuruan</h2>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <a href="<?php echo e(url('kejuruan/create')); ?>" class="btn btn-primary mb-3" style="float: right;">Tambah Data
            Kejuruan</a>

        <form method="GET" action="<?php echo e(url('/kejuruan')); ?>" class="mb-4 d-flex gap-3 align-items-end">


            <div>
                <label for="jurusan">Pilih Jurusan:</label>
                <select name="jurusan" id="jurusan" class="form-control" style="width: 200px;">
                    <option value="">Semua Jurusan</option>
                    <?php $__currentLoopData = ['RPL', 'Analis Kimia', 'TKJ']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($jurusan); ?>" <?php echo e(request('jurusan') == $jurusan ? 'selected' : ''); ?>>
                            <?php echo e($jurusan); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div>
                <label for="mapel">Nama Mapel:</label>
                <input type="text" name="mapel" id="mapel" value="<?php echo e(request('mapel')); ?>" class="form-control"
                    placeholder="Cari nama mapel">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>


        <table id="slideTable" class="table table-striped table-bordered">
            <thead>
                <tr class="tabel">
                    <th>Id kejuruan</th>
                    <th>Nama Jurusan</th>
                    <th>Nama Mapel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $kejuruan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->id_kejuruan); ?></td>
                        <td><?php echo e($row->jurusan->nama_jurusan ?? '-'); ?></td>
                        <td><?php echo e($row->mapel->nama_mapel ?? '-'); ?></td>
                        <td>
                            <a href="<?php echo e(url('kejuruan/' . $row->id_kejuruan . '/edit')); ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(url('kejuruan/' . $row->id_kejuruan)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="mt-3">
            <?php echo e($kejuruan->links()); ?>

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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/kejuruan/index.blade.php ENDPATH**/ ?>