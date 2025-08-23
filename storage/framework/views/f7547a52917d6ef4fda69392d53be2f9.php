<?php $__env->startSection('title', 'Data - Siswa'); ?>

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
                <h2>Data Siswa</h2>
                <button id="toggleFormBtn" class="btn btn-primary">Tambah Siswa</button>
            </div>

            


            

            <div id="createFormSection" style="display:none;">
                <form id="createForm">
                    <?php echo csrf_field(); ?>

                    <!-- Nama Siswa -->
                    <div class="col-md-12">
                        <label for="nama_siswa" class="form-label fw-semibold text-dark">Nama Siswa</label>
                        <input type="text" name="nama_siswa" id="nama_siswa"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300"
                            placeholder="Masukan nama lengkap siswa" required>
                    </div>

                    <!-- NIS -->
                    <div class="col-md-12">
                        <label for="nis" class="form-label fw-semibold text-dark">NIS</label>
                        <input type="text" name="nis" id="nis"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300"
                            placeholder="Masukan NIS" required>
                    </div>

                    <!-- Pilih Kelas -->
                    

                    <!-- Pilih jk -->
                    <div class="col-md-12">
                        <label for="jenis_kelamin" class="form-label fw-semibold text-dark">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="form-select form-select-lg shadow-sm rounded border border-gray-300" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
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
                        <label for="nama_siswa" class="form-label fw-semibold text-dark">Nama Siswa</label>
                        <input type="text" name="nama_siswa" id="edit_nama"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300" required>
                    </div>

                    
                    <div class="col-md-12">
                        <label for="nis" class="form-label fw-semibold text-dark">NIS</label>
                        <input type="text" name="nis" id="edit_nis"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300"
                            placeholder="Masukan NIS" required>
                    </div>

                    
                    <div class="col-md-12">
                        <label for="jenis_kelamin" class="form-label fw-semibold text-dark">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="edit_jenis_kelamin"
                            class="form-select form-select-lg shadow-sm rounded border border-gray-300" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>


                    <!-- Pilih Kelas -->
                    

                    <div class="col-12 d-flex mt-4 gap-2">
                        <button type="submit" class="btn btn-success px-4 py-2 fw-bold">Simpan</button>
                        <button type="button" class="btn btn-success px-4 py-2 fw-bold" id="cancelEdit">Batal</button>
                    </div>
                </form>
            </div>

            <div class="table-responsive text-nowrap rounded-table">
                <table class="table table-hover" id="siswaTable">
                    <thead class="tabel">
                        <tr>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

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

        $('#siswaTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?php echo e(route('siswa.data')); ?>",
                data: function (d) {
                    d.kelas = $('#filterKelas').val(); // kalau ada filter dropdown kelas
                }
            },
            columns: [
                { data: 'nama_siswa', name: 'nama_siswa' },
                { data: 'nis', name: 'nis' },
                { data: 'jenis_kelamin', name: 'jenis_kelamin' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            pageLength: 10,
            lengthMenu: [10, 25, 50, 100],
        });

        // Refresh jika filter diubah
        $('#filterKelas').on('change', function () {
            $('#siswaTable').DataTable().ajax.reload();
        });

        $('#toggleFormBtn').click(function () {
            $('#createFormSection').slideToggle();
        });

        $('#createForm').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "<?php echo e(route('siswa.store')); ?>",
                method: "POST",
                data: $(this).serialize(),
                success: function (res) {
                    if (res.success) {
                        let siswa = res.siswa;
                        let newRow = `<tr>
                            <td>${siswa.nama_siswa}</td>
                            <td>${siswa.nis}</td>
                            <td>${siswa.jenis_kelamin}</td>
                            </tr>`;
                        $('#siswaTable tbody').append(newRow);

                        $('#createForm')[0].reset();
                        $('#createFormSection').slideUp();
                        alert(res.message);
                        $('#siswaTable').DataTable().ajax.reload();
                    }
                },
                error: function (xhr) {
                    alert("Gagal menyimpan data. " + xhr.responseText);
                }
            });
        });

        // Tampilkan form edit dan isi dengan data dari server
        $(document).on('click', '.editSiswa', function () {
            $('#editFormContainer').slideDown();
            let id = $(this).data('id');
            $.get('/siswa/' + id + '/edit', function (data) {
                $('#edit_id').val(data.id_siswa);
                $('#edit_nama').val(data.nama_siswa);
                $('#edit_nis').val(data.nis);
                $('#edit_jenis_kelamin').val(data.jenis_kelamin);
                $('#editFormContainer').show();
            });
        });

        // Batal edit
        $('#cancelEdit').click(function () {
            $('#formEditSiswa')[0].reset();
            $('#editFormContainer').slideUp();
        });

        // Submit form edit
        $('#formEditSiswa').submit(function (e) {
            e.preventDefault();

            let id = $('#edit_id').val();
            let formData = {
                _method: 'PUT', // spoof method
                _token: $('meta[name="csrf-token"]').attr('content'),
                nama_siswa: $('#edit_nama').val(),
                nis: $('#edit_nis').val(),
                jenis_kelamin: $('#edit_jenis_kelamin').val(),
            };

            $.ajax({
                url: '/siswa/' + id,
                type: 'POST', // PENTING: ganti ke POST
                data: formData,
                success: function (data) {
                    alert(data.message);
                    $('#formEditSiswa')[0].reset();
                    $('#editFormContainer').slideUp();
                    $('#siswaTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    alert('Terjadi kesalahan saat menyimpan data');
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click', '.deleteSiswa', function () {
            let id = $(this).data('id');

            if (confirm('Yakin ingin menghapus data ini?')) {
                $.ajax({
                    url: '/siswa/' + id,
                    type: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (response) {
                        alert(response.message);
                        $('#siswaTable').DataTable().ajax.reload();
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
</script><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/siswa/index.blade.php ENDPATH**/ ?>