<?php
    include_once('project.php');
    include_once('data_team.php');
    $data = team();
    $project = pbl();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href=<?php echo strtoupper($project['icon']);?>>
        <title><?php echo $project['nama_robot']; ?> - Project</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="bg-light">

        <!-- Navigation Menu -->
        <?php include 'navbar.php'; ?>
        <!-- End Navigation Menu --> 

        <!-- Hero Section -->
        <section class="hero-section text-center" id="hero">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-sm-6 col-md-4 text-lg-start text-center">
                        <h1 class="display-2 fw-bold text-uppercase text-dark"><?php echo strtoupper($project['jenis_robot']);?></h1>
                        <h1 class="display-2 fw-bold text-uppercase text-dark mb-5"><?php echo strtoupper($project['nama_robot']);?></h1>
                        <p class="mb-4"><?php echo $project['latar_belakang'];?></p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                        <img src="<?php echo $project['gambar_hero']; ?>" class="img-fluid w-75">
                    </div>  
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
        
        <!-- Tujuan -->
        <section class="container my-5" id="tujuan">
            <div class="bg-white shadow-sm rounded-4 p-4 border border-dark">
                <h2 class="fw-bold text-center">TUJUAN</h2>
                <ul class="list-group list-group-flush mt-3">
                    <?php
                        foreach ($project['tujuan'] as $tujuan){
                    ?>
                        <li class='list-group-item border-0 text-dark my-2 hover'>
                            <?php echo $tujuan; ?>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </section>
        <!-- End Tujuan -->
        
        <!-- Manfaat -->
        <section class="container my-5" id="manfaat">
            <div class="bg-white shadow-sm rounded-4 p-4 border border-dark">
                <h2 class="fw-bold text-center">MANFAAT</h2>
                <ul class="list-group list-group-flush mt-3">
                    <?php
                        foreach($project['manfaat'] as $manfaat){
                    ?>
                        <li class='list-group-item border-0 text-dark my-2 hover'>
                            <?php echo $manfaat ?>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </section>
        <!-- End Manfaat -->
        
        <!-- Features -->
        <section class="container my-5" id="features">
            <div class="bg-white shadow-sm rounded-4 p-4 border border-dark">
                <h2 class="fw-bold text-center">FEATURES</h2>
                <div class="row mt-3">
                    <?php
                        foreach($project['features'] as $features){
                    ?>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush bg-white">
                            <li class="list-group-item border-0 d-flex justify-content-between align-items-start text-dark my-2 hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold"><?php echo $features['nama'] ?></div>
                                    <?php echo $features['penjelasan'] ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- End Features -->
        
        <!-- Bagian Tim -->
        <section class="container" id="bagian">
            <div class="row mb-5">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="section-title fw-bold">Bagian Tim</h2>
                </div>
            </div>

            <div class="row">
                <?php foreach($project['bagian'] as $bagian => $detail): ?>
                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                        <div class="post-entry bg-white shadow-sm rounded-4 p-4 border border-dark hover">
                            <a href="bagian.php?bagian=<?php echo urlencode($bagian); ?>" class="post-thumbnail"><img src="images/<?php echo strtolower($bagian); ?>.jpg" alt="Image" class="img-fluid"></a>
                            <div class="post-content-entry mt-3">
                                <h3><a class="link-secondary link-offset-2 link-underline-opacity-0" href="bagian.php?bagian=<?php echo $bagian; ?>"><?php echo strtoupper($bagian); ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- End Bagian Tim -->
        
        <!-- Tim -->
        <section class="container my-5" id="team">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title fw-bold">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach($data as $team): ?>
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0 rounded-2 hover">
                    <div class="my-2">
                        <img src="images/person.jpg" class="img-fluid mb-4 rounded-4 shadow">
                        <h3><a class="link-secondary link-offset-2 link-underline-opacity-0" href="#"><?php echo ucwords($team['nama'])?></a></h3>
                        <span class="d-block position mb-4"><?php echo $team['nim'] . " | " . ucwords($team['bagian'])?></span>
                        <p><?php echo $team['deskripsi']?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- End Tim -->

        <!-- Footer Area -->
        <footer class="footer-area text-center py-4 bg-white shadow-sm mt-5">
            <div class="container-fluid">
                <p class="mt-3 mb-0"><?php echo ucwords($project['pbl']." ". $project['jenis_robot']." ".$project['nama_robot']); ?></p>
            </div>
        </footer>
        <!-- End Footer Area -->
    </body>
</html>
