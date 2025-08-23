<?php $__env->startSection('title', 'Data - Guru'); ?>

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
            <?php echo e(__('Data Guru')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container-fluid mb-4">

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="flex flex-col items-base card-header p-3 gap-2">
                <h5>Data Guru</h5>
                <button id="toggleFormBtn" type="button" class="btn btn-primary w-full">Tambah Data Guru</button>
            </div>

            <div id="formTambahGuru"
                class="container fluid mt-5 hidden mb-6 bg-white p-5 rounded-3 shadow-lg border border-gray-200 transition-all duration-300">
                <h2>Tambah Data Guru</h2>

                <form action="<?php echo e(route('guru.store')); ?>" method="POST" class="mb-3">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" name="nip" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_guru" class="form-label">Nama Guru</label>
                        <input type="text" name="nama_guru" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_mapel" class="form-label">Nama Mapel</label>
                        <select name="id_mapel" class="form-control">
                            <option value="">-- Pilih Mapel --</option>
                            <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($m->id_mapel); ?>"><?php echo e($m->nama_mapel); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    



                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo e(route('guru.index')); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>

            <div class="table-responsive text-nowrap rounded-table">
                <table class="table table-hover" id="absensiTable">
                    <thead class="tabel">
                        <tr>
                            <th>Id Guru</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Mapel</th>
                            <!-- <th>Mapel Kejurusan</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($row->nip); ?></td>
                                <td><?php echo e($row->nip); ?></td>
                                <td><?php echo e($row->nama_guru); ?></td>
                                <td><?php echo e($row->nama_mapel ?? '-'); ?></td>
                                <!-- <td><?php echo e($row->nama_mapel ?? '-'); ?></td> -->
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo e(url('guru/' . $row->nip . '/edit')); ?>">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <form action="<?php echo e(url('guru/' . $row->nip)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('Yakin ingin menghapus?')">
                                                    <i class="bx bx-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready(function () {
                $('.table').DataTable();
            });

            document.getElementById('toggleFormBtn').addEventListener('click', function () {
                const form = document.getElementById('formTambahGuru');
                form.classList.toggle('hidden');
            });
        </script>
    <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/guru/index.blade.php ENDPATH**/ ?>