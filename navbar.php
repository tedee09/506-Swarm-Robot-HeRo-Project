<?php
// Tentukan warna berdasarkan bagian
$navbarClass = 'bg-dark'; // Default color
if ($bagian == 'elektrikal') {
    $navbarClass = 'bg-danger'; // Merah untuk elektrikal
} elseif ($bagian == 'mekanikal') {
    $navbarClass = 'bg-success'; // Hijau untuk mekanikal
} elseif ($bagian == 'programming') {
    $navbarClass = 'bg-info'; // Biru untuk programming
}
?>

<!-- Navigation Menu -->
<nav class="navbar fixed-top <?php echo $navbarClass; ?> navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><?php echo strtoupper($project['jenis_robot']." ".$project['nama_robot']); ?></a>
    </div>
    <?php if ($bagian == 'elektrikal' || $bagian == 'mekanikal' || $bagian == 'programming') { ?>
        <a class="navbar-brand ms-auto" href="index.php #bagian">Kembali</a>
    <?php } else { ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#tujuan">Tujuan</a></li>
                <li class="nav-item"><a class="nav-link" href="#manfaat">Manfaat</a></li>
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#bagian">Bagian</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
            </ul>
        </div>
    <?php } ?>
</nav>
<!-- End Navigation Menu -->
