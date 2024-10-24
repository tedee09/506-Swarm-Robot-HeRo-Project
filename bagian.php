<?php
    include_once('project.php');

    $bagian = isset($_GET['bagian']) ? $_GET['bagian'] : 'mekanikal'; // Default ke 'programming' jika tidak ada parameter

    $project = pbl();

    if (!isset($project['bagian'][$bagian])) {
        echo "Bagian tidak ditemukan!";
        exit;
    }

    $dataBagian = $project['bagian'][$bagian];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <title>Detail Bagian <?php echo ucfirst($bagian); ?></title>
    </head>
    <body class="p-3 m-0">

    <?php include 'navbar.php'; ?>

        <!-- Main Container -->
        <div class="container mt-5 bg-light p-4 rounded-4 shadow-lg">

            <!-- Header Section with Border -->
            <div class="row mb-5 border border-2 rounded-4 p-4">
              <div class="col-md-12">
                    <h1 class="fw-bold">Detail Bagian <?php echo ucfirst($bagian)." ".ucfirst($project['jenis_robot']);?></h1>
                    <p>Berikut ini merupakan segala hal-hal yang berkaitan dengan bagian dari <?php echo $bagian; ?>:</p>
                </div>
            </div>

            <h2 class="fw-bold mb-4">Penanggung Jawab</h2>
            <?php
                $dataTeam = team();
                $bagianPenanggungJawab = $bagian;

                $penanggungJawabArray = array();

                foreach ($dataTeam as $member) {
                    if ($member['bagian'] === $bagianPenanggungJawab) {
                        $penanggungJawabArray[] = $member;
                    }
                }
            ?>
            <div class="row">
                <?php foreach ($penanggungJawabArray as $penanggungJawab) { ?>
                    <div class="col-md-6 mb-4">
                        <div class="card border-2 rounded-4 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $penanggungJawab['foto']; ?>" alt="Foto <?php echo ucwords($penanggungJawab['nama']); ?>" class="img-thumbnail rounded-4" style="border-radius: 20px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo ucwords($penanggungJawab['nama']); ?></h5>
                                        <p class="card-text"><?php echo $penanggungJawab['nim']; ?></p>
                                        <p class="card-text"><?php echo $penanggungJawab['deskripsi']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Elektrikal Section -->
            <?php if ($bagian == 'elektrikal') { ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h2 class="fw-bold link-offset-2 link-underline link-underline-opacity-0 link-light">Komponen</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($dataBagian['komponen_elektrikal'] as $komponen) { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $komponen['nama']; ?></h5>
                                        <p class="card-text"><?php echo $komponen['fungsi']; ?></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $komponen['gambar']; ?>" alt="Gambar <?php echo $komponen['nama']; ?>"  style="max-width: 100px;">
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h2 class="fw-bold link-offset-2 link-underline link-underline-opacity-0 link-light">PCB</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Top PCB</h5>
                                    <img src="<?php echo $dataBagian['pcb']['top']; ?>" alt="PCB Top" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title">Bottom PCB</h5>
                                    <img src="<?php echo $dataBagian['pcb']['bottom']; ?>" alt="PCB Bottom" class="img-fluid">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h2 class="fw-bold link-offset-2 link-underline link-underline-opacity-0 link-light">Board</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <?php foreach ($dataBagian['board'] as $board) { ?>
                                    <div class="col-md-12 mb-3">
                                        <img src="<?php echo $board; ?>" alt="Board" class="img-fluid rounded-4 shadow-sm">
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php } ?>
            <!-- End Elektrikal Section -->

            <!-- Mekanikal Section -->
            <?php if ($bagian == 'mekanikal') { ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h2 class="fw-bold">Komponen</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($dataBagian['komponen_mekanikal'] as $komponen) { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $komponen['nama']; ?></h5>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $komponen['gambar']; ?>" alt="Gambar <?php echo $komponen['nama']; ?>"  style="max-width: 100px;">
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h2 class="fw-bold">3D Print</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($dataBagian['3d_print'] as $print) { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $print['nama']; ?></h5>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $print['gambar']; ?>" alt="Gambar <?php echo $print['nama']; ?>"  style="max-width: 100px;">
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h2 class="fw-bold">CAD Design</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <img src="<?php echo $dataBagian['cad']['gambar']['hero']; ?>" alt="Gambar CAD Hero" class="img-fluid mb-3 rounded-4 shadow-sm">
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <?php
                                $deskripsiCAD = [
                                    'cadTop' => 'Atas',
                                    'cadBottom' => 'Bawah',
                                    'cadFront' => 'Depan',
                                    'cadBack' => 'Belakang',
                                    'cadRight' => 'Kanan',
                                    'cadLeft' => 'Kiri'
                                ];

                                foreach ($deskripsiCAD as $key => $deskripsi) {
                                ?>
                                    <div class="col-md-4 mb-3 text-center">
                                        <img src="<?php echo $dataBagian['cad']['gambar'][$key]; ?>" alt="Gambar CAD <?php echo $deskripsi; ?>" class="img-fluid rounded-4 shadow-sm">
                                        <p class="mt-2 fw-bold"><?php echo $deskripsi; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <p>Berikut link dari Fusion360 jika anda ingin mengedit design CAD: 
                                <a href="<?php echo $dataBagian['cad']['design']['cad_link']; ?>" target="_blank">Edit CAD Design</a>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <img src="<?php echo $dataBagian['cad']['gambar']['draw']; ?>" alt="Gambar CAD Hero" class="img-fluid mb-3 rounded-4 shadow-sm">
                        </li>
                    </ul>
                </div>
            <?php } ?>
            <!-- End Mekanikal Section -->

            <!-- Programming Section -->
            <?php if ($bagian == 'programming') { ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h2 class="fw-bold link-offset-2 link-underline link-underline-opacity-0 link-light">Software</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($dataBagian['keperluan'] as $keperluan) { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo strtoupper($keperluan['nama']); ?></h5>
                                        <p class="card-text"><?php echo ucwords($keperluan['sebagai']); ?></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $keperluan['gambar']; ?>" alt="Gambar <?php echo $keperluan['nama']; ?>"  style="max-width: 100px;">
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h2 class="fw-bold link-offset-2 link-underline link-underline-opacity-0 link-light">Flowchart</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">
                            <img src="<?php echo $dataBagian['flowchart']; ?>" alt="Flowchart" class="img-fluid rounded-4 shadow-sm">
                        </li>
                    </ul>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h2 class="fw-bold link-offset-2 link-underline link-underline-opacity-0 link-light">Desain Sistem</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">
                            <img src="<?php echo $dataBagian['dsystem']; ?>" alt="Desain Sistem" class="img-fluid rounded-4 shadow-sm">
                        </li>
                    </ul>
                </div>
            <?php } ?>
            <!-- End Programming Section -->
        </div>
    </body>
</html>
