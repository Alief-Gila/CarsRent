<?php
include 'header.php';
<<<<<<< HEAD
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


=======
?>

>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
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
<<<<<<< HEAD
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
=======

        <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4"
            data-aos="zoom-in" data-aos-duration="1000">
>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
            <span class="filter-btn filter-active" data-filter="*">All</span>
            <?php
            $a = 1;
            $sql = "SELECT nama as tipe FROM tipe";

            $tipe = $conn->query($sql);
            foreach ($tipe as $t) { ?>
<<<<<<< HEAD
                <span class="filter-btn" data-filter="filter-<?= $t['tipe']; ?>"><?= $t['tipe']; ?></span>
=======
                <span class="filter-btn" data-filter="filter-<?= $t['tipe']; ?>">
                    <?= $t['tipe']; ?>
                </span>
>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
            <?php } ?>
        </div>

        <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
            <?php
            $a = 1;
<<<<<<< HEAD
            $sql = "SELECT tipe.nama as 'tipe', mobil.nama, transmisi, tahun, warna, kursi, harga, gambar FROM mobil
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";
            $mobil = $conn->query($sql);
            foreach ($mobil as $r) { ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
=======
            $sql = "SELECT tipe.nama as 'tipe', mobil.id as 'id', mobil.nama, transmisi, tahun, warna, kursi, harga, gambar FROM mobil
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";
            $mobil = $conn->query($sql);

            foreach ($mobil as $r) { ?>

                <div
                    class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
                    <div class="cars-wrap">
                        <div class="cars-img">
                            <img src="img/cars/<?= $r['gambar']; ?>" alt="" class="img-fluid">
                        </div>
                        <hr>
                        <div class="cars-info">
                            <h4>
                                <?= $r['nama']; ?>
                            </h4>
                            <p>Transmisi :
                                <?= $r['transmisi']; ?>
                            </p>
                            <p>Tahun :
                                <?= $r['tahun']; ?>
                            </p>
                            <p>Kursi :
                                <?= $r['kursi']; ?> Seater
                            </p>
                            <p>Warna :
                                <?= $r['warna']; ?>
                            </p>
                            <hr>
<<<<<<< HEAD
                            <p class="fw-bold">Harga : Rp<?= number_format($r['harga'], '0', '.'); ?></p>
                            <hr>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn-hero align-center" href="reviewform.php" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Review
                                </button>
                            </div>
=======
                            <p class="fw-bold">Harga : Rp
                                <?= number_format($r['harga'], '0', '.'); ?>
                            </p>
                            <br>
                            <?php $mobilModal = $r['nama'];
                            $id_modal = $r['id'];
                            ?>

                            <button type="button" class="btn-hero" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="prepareReviewForm('<?= $mobilModal; ?>','<?= $id_modal; ?>')">
                                Tulis Review
                            </button>


>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<<<<<<< HEAD


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review mobil ini</h5>
=======
<?php
include 'footer.php';
?>

<div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tulis Review</h5>
>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

<<<<<<< HEAD

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
=======
                <form action='reviewcontroller.php' method="post">
                    <label class="form-label">Username: sementara isi pake id_user</label><br>
                    <div class="col-12">
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Model Mobil:</label>
                        <input type="text" class="form-control" name="mobil_modal" id="modalMobilInput" readonly>
                        <input type="hidden" class="form-control" name="id_modal" id="modalidInput">
                    </div>
                    <p>Rating:</p>
                    <div class="stars" id="stars">
                        
                        <input type="radio" name="rating" class="star" id="star1" value="1">
                        <label for="star1"></label>
                        <input type="radio" name="rating" class="star" id="star2" value="2">
                        <label for="star2"></label>
                        <input type="radio" name="rating" class="star" id="star3" value="3">
                        <label for="star3"></label>
                        <input type="radio" name="rating" class="star" id="star4" value="4">
                        <label for="star4"></label>
                        <input type="radio" name="rating" class="star" id="star5" value="5">
                        <label for="star5"></label>
                        <script src="main.js"></script>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Review:</label>
                        <textarea rows="5" class="form-control" name='review' id="review"></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" value="submit" class="form-control" id="form-submit">Kirim Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
