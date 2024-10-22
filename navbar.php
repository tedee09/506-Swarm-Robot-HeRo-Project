<?php
$navbarClass = '#f5f5f5';

if (isset($bagian)) {
    if ($bagian == 'elektrikal') {
        $navbarClass = 'bg-danger';
    } elseif ($bagian == 'mekanikal') {
        $navbarClass = 'bg-success';
    } elseif ($bagian == 'programming') {
        $navbarClass = 'bg-info';
    }
}
?>


<!-- Navigation Menu -->
<nav class="navbar fixed-top <?php echo $navbarClass; ?> navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand mx-3" href="index.php #hero"><?php echo $project['nama_robot']; ?></a>
    </div>
    <?php if (isset($bagian) && ($bagian == 'elektrikal' || $bagian == 'mekanikal' || $bagian == 'programming')) { ?>
        <a class="navbar-brand ms-auto mx-3" href="index.php #bagian">Kembali</a>
    <?php } else { ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mx-3">
                <li class="nav-item"><a class="nav-link" href="#tujuan">Tujuan</a></li>
                <li class="nav-item"><a class="nav-link" href="#manfaat">Manfaat</a></li>
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#dokumen">Dokumen</a></li>
                <li class="nav-item"><a class="nav-link" href="#bagian">Bagian</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
            </ul>
        </div>
    <?php } ?>
</nav>
<!-- End Navigation Menu -->
