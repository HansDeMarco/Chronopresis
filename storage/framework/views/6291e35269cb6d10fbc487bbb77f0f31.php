<?php $__env->startSection('title', 'Data - Jurusan'); ?>

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
                <h2>Data Jurusan</h2>
                <button id="toggleFormBtn" class="btn btn-primary">Tambah Jurusan</button>
            </div>

            <div id="createFormSection" style="display:none;">
                <form id="createForm">
                    <?php echo csrf_field(); ?>

                    <!-- Nama jurusan -->
                    <div class="col-md-12">
                        <label for="nama_jurusan" class="form-label fw-semibold text-dark">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" id="nama_jurusan"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300"
                            placeholder="Masukkan nama jurusan" required>
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
                <form id="formEditjurusan">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" id="edit_id" name="_method" value="PUT">
                    <!-- Nama jurusan -->
                    <div class="col-md-12">
                        <label for="nama_jurusan" class="form-label fw-semibold text-dark">Nama jurusan</label>
                        <input type="text" name="nama_jurusan" id="edit_nama"
                            class="form-control form-control-lg shadow-sm rounded border border-gray-300" required>
                    </div>

                    <div class="col-12 d-flex mt-4 gap-2">
                        <button type="submit" class="btn btn-success px-4 py-2 fw-bold">Simpan</button>
                        <button type="button" class="btn btn-success px-4 py-2 fw-bold" id="cancelEdit">Batal</button>
                    </div>
                </form>
            </div>

            <div class="table-responsive text-nowrap rounded-table px-2">
                <table class="table table-hover" id="jurusanTable">
                    <thead class="tabel">
                        <tr>
                            <th>ID Jurusan</th>
                            <th>Nama Jurusan</th>
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

        $('#jurusanTable').DataTable({
            serverSide: true,
            processing: true,
            ajax: {
                url: "<?php echo e(route('jurusan.data')); ?>",
            },
            columns: [
                { data: 'id_jurusan', name: 'id_jurusan' },
                { data: 'nama_jurusan', name: 'nama_jurusan' },
                { data: 'action', name: 'action', searchable: false, orderablde: false },
            ],
            pageLength: 10,
            lengthMenu: [10, 25, 50, 100],

        });

        $('#toggleFormBtn').click(function () {
            $('#createFormSection').slideToggle();
            $('#editFormContainer').slideUp();
        });

        $('#createForm').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "<?php echo e(route('jurusan.store')); ?>",
                method: "POST",
                data: $(this).serialize(),
                success: function (res) {
                    if (res.success) {
                        let jurusan = res.jurusan;
                        let newRow = `<tr>
                            <td>${jurusan.nama_jurusan}</td>
                            </tr>`;
                        $('#jurusanTable tbody').append(newRow);
                        alert(res.message);
                        $('#createForm')[0].reset();
                        $('#createFormSection').slideUp();
                        $('#jurusanTable').DataTable().ajax.reload();
                    }
                },
                error: function (xhr) {
                    alert("Gagal menyimpan data. " + xhr.responseText);
                }
            });
        });

        // Tampilkan form edit dan isi dengan data dari server
        $(document).on('click', '.editjurusan', function () {
            $('#createFormSection').slideUp();
            $('#editFormContainer').slideDown();
            let id = $(this).data('id');
            $.get('/jurusan/' + id + '/edit', function (data) {
                $('#edit_id').val(data.id_jurusan);
                $('#edit_nama').val(data.nama_jurusan);
                $('#editFormContainer').show();
            });
        });

        // Batal edit
        $('#cancelEdit').click(function () {
            $('#formEditjurusan')[0].reset();
            $('#editFormContainer').slideUp();
        });

        // Submit form edit
        $('#formEditjurusan').submit(function (e) {
            e.preventDefault();

            let id = $('#edit_id').val();
            let formData = {
                _method: 'PUT', // spoof method
                _token: $('meta[name="csrf-token"]').attr('content'),
                nama_jurusan: $('#edit_nama').val(),
                id_kelas: $('#edit_kelas').val(),
            };

            $.ajax({
                url: '/jurusan/' + id,
                type: 'POST', // PENTING: ganti ke POST
                data: formData,
                success: function (data) {
                    alert(data.message);
                    $('#formEditjurusan')[0].reset();
                    $('#editFormContainer').slideUp();
                    $('#jurusanTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    alert('Terjadi kesalahan saat menyimpan data');
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click', '.deletejurusan', function () {
            let id = $(this).data('id');

            if (confirm('Yakin ingin menghapus data ini?')) [
                $.ajax({
                    url: '/jurusan/' + id,
                    type: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (response) {
                        alert(response.message);
                        $('#jurusanTable').DataTable().ajax.reload();
                    },
                    error: function (xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            alert(xhr.responseJSON.message); // pesan error spesifik
                        } else {
                            alert("Terjadi kesalahan saat menghapus data");
                        }
                    }
                })
            ]
        });
    });
</script><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/jurusan/index.blade.php ENDPATH**/ ?>