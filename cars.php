<?php
include 'header.php';
// connect ke database sementara
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_carsresent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>


<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">

            </nav>
        </div>
    </div>
</section>

<section id="cars">
    <div class="container">
        <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
            <h2>Cars</h2>
        </div>
        <?php
        // connect ke database sementara
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_carsresent";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>
        <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4" data-aos="zoom-in" data-aos-duration="1000">
            <span class="filter-btn filter-active" data-filter="*">All</span>
            <?php
            $a = 1;
            $sql = "SELECT nama as tipe FROM tipe";

            $tipe = $conn->query($sql);
            foreach ($tipe as $t) { ?>
                <span class="filter-btn" data-filter="filter-<?= $t['tipe']; ?>"><?= $t['tipe']; ?></span>
            <?php } ?>
        </div>

        <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
            <?php
            $a = 1;
            $sql = "SELECT tipe.nama as 'tipe', mobil.nama, transmisi, tahun, warna, kursi, harga, gambar FROM mobil
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";
            $mobil = $conn->query($sql);
            foreach ($mobil as $r) { ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
                    <div class="cars-wrap">
                        <div class="cars-img">
                            <img src="img/cars/<?= $r['gambar']; ?>" alt="" class="img-fluid">
                        </div>
                        <hr>
                        <div class="cars-info">
                            <h4><?= $r['nama']; ?></h4>
                            <p>Transmisi : <?= $r['transmisi']; ?></p>
                            <p>Tahun : <?= $r['tahun']; ?></p>
                            <p>Kursi : <?= $r['kursi']; ?> Seater</p>
                            <p>Warna : <?= $r['warna']; ?></p>
                            <hr>
                            <p class="fw-bold">Harga : Rp<?= number_format($r['harga'], '0', '.'); ?></p>
                            <hr>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn-hero align-center" href="reviewform.php" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Review
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review mobil ini</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/carsrent.png" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <form action='review.php' method="post">
                                <ul class="list-group">
                                    <li>
                                        <label>sementara isi pake id_user</label>
                                        <input type="text" name="nama" id="nama"> 
                                    </li>
                                    <li>
                                        <?php
                                        $a = 1;
                                        $sql = "SELECT mobil.nama as nama, tipe.nama as 'tipe', tipe.id_tipe as 'id_tipe', id FROM mobil INNER join tipe on tipe.id_tipe = mobil.id_tipe ORDER BY tipe.nama, mobil.nama";
                                        $mobil = $conn->query($sql);
                                        ?>

                                        <label class="form-label">Model Mobil :</label>
                                        <select name="mobil" id="mobil" class="form-control form-control-user">
                                            <option value="">Pilih Model</option>
                                            <?php foreach ($mobil as $m) { ?>
                                                <option value="<?= $m['id']; ?>">
                                                    <?= $m['tipe']; ?> ->
                                                    <?= $m['nama']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </li>

                                    <li>
                                        <label class="form-label">Review :</label>
                                        <textarea rows="5" class="form-control" name='review' id="review"></textarea>
                                    </li>

                                    <li>
                                        <button type="submit" value="submit" class="form-control" id="form-submit">Kirim Review</button>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>








<?php
include 'footer.php';
?>