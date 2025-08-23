<div class="dropdown">
    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" id="btn" data-bs-toggle="dropdown">
        <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu">
        <button class="btn btn-sm btn-warning editSiswa dropdown-item" data-id="<?php echo e($siswa->id_siswa); ?>">
            <i class="bx bx-edit-alt me-1"></i>Edit
        </button>
        <button type="submit" class="btn btn-sm btn-warning deleteSiswa dropdown-item" data-id="<?php echo e($siswa->id_siswa); ?>">
            <i class="bx bx-trash me-1"></i> Hapus
        </button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/siswa/partials/actions.blade.php ENDPATH**/ ?>