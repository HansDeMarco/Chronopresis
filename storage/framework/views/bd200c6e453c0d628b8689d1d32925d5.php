<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chronopresis Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/custom-login.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('pictures/favicon.png')); ?>" type="image/x-icon">
</head>
<body>
    <div class="container">
<div class="left-section"></div>
<div class="circle-outline"></div>

<div class="left-content">
    <img src="pictures/group31.png" alt="" class="img">
    <h1>Track Attendance,<br>Boost Discipline</h1>
    <p>Pantau kehadiran harian dengan sistem real-time. Guru dan siswa bisa cek laporan dengan mudah. Disiplin dimulai dari hadir tepat waktu.</p>
    <div class="images">
        <img src="<?php echo e(asset('pictures/f202204220549509 1.png')); ?>" alt="Sekolah" class="circle-img">
        <img src="<?php echo e(asset('pictures/473598451_911474174435517_8941121470108312314_n 1.png')); ?>" alt="Logo RPL" class="circle-img2">
    </div>
</div>

        <div class="right-section">
            
            <div class="login-box">
                <h2>Log In</h2>
                <p>Enter your data below</p>
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <label>NIP</label>
                    <input type="number" name="nip" required>

                    <label>Password</label>
                    <input type="password" name="password" required>

                    
                    
                    <div>
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/auth/login.blade.php ENDPATH**/ ?>