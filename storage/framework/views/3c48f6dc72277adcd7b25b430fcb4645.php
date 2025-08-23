<?php $__env->startSection('title', 'Data - Kelas'); ?>

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

    <div class="container-fluid mb-4">

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="flex justify-between items-center card-header p-3">
                <h2>Data Kelas</h2>
                <button id="toggleFormBtn" class="btn btn-primary">Tambah Kelas</button>
            </div>

            <div id="createFormSection" style="display:none;">
                <form id="createForm">
                    <?php echo csrf_field(); ?>

                    <!-- Nama Siswa -->
                    <div class="col-md-12">
                        <label for="nama_kelas" class="form-label fw-semibold text-dark">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300"
                            placeholder="Masukkan nama kelas" required>
                    </div>

                    <!-- Pilih Kelas -->
                    <div class="col-md-12">
                        <label for="id_jurusan" class="form-label fw-semibold text-dark">Nama Jurusan</label>
                        <select name="id_jurusan" id="id_jurusan"
                            class="form-select form-select-lg shadow-sm rounded border border-gray-300" required>
                            <option value="" disabled selected>Pilih Jurusan</option>
                            <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k->id_jurusan); ?>">
                                    <?php echo e($k->nama_jurusan); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <!-- Pilih Kelas -->
                    <div class="col-md-12">
                        <label for="tingkatan" class="form-label fw-semibold text-dark">Tingkat</label>
                        <select name="tingkatan" id="tingkatan"
                            class="form-select form-select-lg shadow-sm rounded border border-gray-300" required>
                            <option value="" disabled selected>Pilih Tingkat</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                            <option value="XIII">XIII</option>
                        </select>
                    </div>

                    <div class="col-12 d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-success px-4 py-2 fw-bold">
                            Simpan
                        </button>
                    </div>
                </form>
                <hr>
            </div>

            <!-- Modal edit atau div biasa -->
            <div id="editFormContainer" style="display: none;">
                <form id="formEditSiswa">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" id="edit_id" name="_method" value="PUT">
                    <!-- Nama Siswa -->
                    <div class="col-md-12">
                        <label for="nama_kelas" class="form-label fw-semibold text-dark">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="edit_nama"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300"
                            placeholder="Masukkan nama kelas" required>
                    </div>

                    <!-- Pilih Kelas -->
                    <div class="col-md-12">
                        <label for="id_jurusan" class="form-label fw-semibold text-dark">Nama Jurusan</label>
                        <select name="id_jurusan" id="edit_id_jur"
                            class="form-select form-select-lg shadow-sm rounded border border-gray-300" required>
                            <option value="" disabled selected>Pilih Jurusan</option>
                            <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k->id_jurusan); ?>">
                                    <?php echo e($k->nama_jurusan); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <!-- Pilih Kelas -->
                    <div class="col-md-12">
                        <label for="tingkatan" class="form-label fw-semibold text-dark">Tingkat</label>
                        <select name="tingkatan" id="edit_tingkatan"
                            class="form-select form-select-lg shadow-sm rounded border border-gray-300" required>
                            <option value="" disabled selected>Pilih Tingkat</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                            <option value="XIII">XIII</option>
                        </select>
                    </div>

                    <div class="col-12 d-flex mt-4 gap-2">
                        <button type="submit" class="btn btn-success px-4 py-2 fw-bold">Simpan</button>
                        <button type="button" class="btn btn-success px-4 py-2 fw-bold" id="cancelEdit">Batal</button>
                    </div>
                </form>
            </div>

            <div class="table-responsive text-nowrap rounded-table">
                <table class="table table-hover" id="KelasTable">
                    <thead class="tabel">
                        <tr>
                            <th>ID Kelas</th>
                            <th>ID Jurusan</th>
                            <th>Kelas</th>
                            <th>Tingkatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

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

<?php $__env->startPush('scripts'); ?>


<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#KelasTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?php echo e(route('kelas.data')); ?>",
                data: function (d) {
                    d.kelas = $('#filterKelas').val(); // kalau ada filter dropdown kelas
                }
            },
            columns: [
                { data: 'id_kelas', name: 'id_kelas' },
                { data: 'nama_jurusan', name: 'nama_jurusan' },
                { data: 'nama_kelas', name: 'nama_kelas' },
                { data: 'tingkatan', name: 'tingkatan' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            pageLength: 10,
            lengthMenu: [10, 25, 50, 100],
        });

        // Refresh jika filter diubah
        $('#filterKelas').on('change', function () {
            $('#KelasTable').DataTable().ajax.reload();
        });

        $('#toggleFormBtn').click(function () {
            $('#createFormSection').slideToggle();
        });

        $('#createForm').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "<?php echo e(route('kelas.store')); ?>",
                method: "POST",
                data: $(this).serialize(),
                success: function (res) {
                    if (res.success) {
                        let kelas = res.kelas;
                        let newRow = `<tr>
                                <td>${kelas.nama_jurusan}</td>
                                <td>${kelas.nama_kelas}</td>
                                <td>${kelas.tingkatan}</td>
                                </tr>`;
                        $('#KelasTable tbody').append(newRow);
                        $('#createForm')[0].reset();
                        $('#createFormSection').slideUp();
                        $('#KelasTable').DataTable().ajax.reload(null, false);
                    }
                },
                error: function (xhr) {
                    alert("Gagal menyimpan data. " + xhr.responseText);
                }
            });
        });

        // Tampilkan form edit dan isi dengan data dari server
        $(document).on('click', '.editkelas', function () {
            let id = $(this).data('id');
            $.get('/kelas/' + id + '/edit', function (data) {
                $('#edit_id').val(data.id_kelas);
                $('#edit_id_jur').val(data.id_jurusan);
                $('#edit_nama').val(data.nama_kelas);
                $('#edit_tingkatan').val(data.tingkatan);
                $('#editFormContainer').show();
            });
        });

        // Batal edit
        $('#cancelEdit').click(function () {
            $('#formEditKelas')[0].reset();
            $('#editFormContainer').hide();
        });

        // Submit form edit
        $('#formEditKelas').submit(function (e) {
            e.preventDefault();

            let id = $('#edit_id').val();
            let formData = {
                _method: 'PUT', // spoof method
                _token: $('meta[name="csrf-token"]').attr('content'),
                nama_Kelas: $('#edit_nama').val(),
                id_jurusan: $('#edit_id_jur').val(),
                tingkatan: $('#edit_tingkatan').val(),
            };

            $.ajax({
                url: '/kelas/' + id,
                type: 'POST', // PENTING: ganti ke POST
                data: formData,
                success: function (data) {
                    alert('Data berhasil diupdate');
                    location.reload();
                },
                error: function (xhr) {
                    alert('Terjadi kesalahan saat menyimpan data');
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click', '.deletekelas', function () {
            let id = $(this).data('id');

            if (confirm('Yakin ingin menghapus data ini?')) {
                $.ajax({
                    url: '/kelas/' + id,
                    type: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (response) {
                        alert(response.message);
                        $('#KelasTable').DataTable().ajax.reload();
                    },
                    error: function (xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            alert(xhr.responseJSON.message); // pesan error spesifik
                        } else {
                            alert("Terjadi kesalahan saat menghapus data");
                        }
                    }
                })
            }
        });
    });
</script><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/kelas/index.blade.php ENDPATH**/ ?>