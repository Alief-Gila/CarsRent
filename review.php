<?php
include 'header.php';
?>
<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">

            </nav>
        </div>
    </div>
</section>
<?php
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
$id_user = $_REQUEST['nama'] ?? null;
$id_mobil = $_REQUEST['mobil'] ?? null;
$review =  $_REQUEST['review'] ?? null;


// Performing insert query execution
// here our table name is college

$submit = "INSERT INTO review (id_user,id,massage)  VALUES ('$id_user','$id_mobil','$review')";
mysqli_query($conn, $submit)

?>
<div class="container mt-5 mb-5">
    <div class="section-title mb-4 mb-xl-0 mt-5" data-aos="fade-left" data-aos-duration="1000">
        <div class="row row-gap-3">
            <tbody>
                <?php
                // connect ke database sementara
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_carsresent";
=======
>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef

$id_user = $_REQUEST['nama'] ?? null;
$id_mobil = $_REQUEST['id_modal'] ?? null;
$review = $_REQUEST['review'] ?? null;

<<<<<<< HEAD
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                //echo "Connected successfully";
                //<div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4"
                //ata-aos="zoom-in" data-aos-duration="1000">
                //<span class="filter-btn filter-active" data-filter="*">All</span>
                //<span class="filter-btn" data-filter="filter-SUV">SUV</span>
                //<span class="filter-btn" data-filter="filter-MPV">MPV</span>
                //<span class="filter-btn" data-filter="filter-Hatchback">Hatchback</span>
                //<span class="filter-btn" data-filter="filter-Sedan">Sedan</span>
                //<span class="filter-btn" data-filter="filter-PickUp">PickUp</span>
                //</div>
                $a = 1;
                $sql = "SELECT user.username as 'username', mobil.nama as 'nama', mobil.gambar as 'gambar', massage 
=======
$submit = "INSERT INTO review (id_user,id,massage)  VALUES ('$id_user','$id_mobil','$review')";
mysqli_query($conn, $submit)

    ?>
<div class="container mt-5 mb-5">
    <div class="section-title mb-4 mb-xl-0 mt-5" data-aos="fade-left" data-aos-duration="1000">
        <div class="row row-gap-3">
            <tbody>
                <section id="cars">
                    <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4"
                        data-aos="zoom-in" data-aos-duration="1000">
                        <span class="filter-btn filter-active" data-filter="*">All</span>
                        <?php
                        
                        $sql = "SELECT nama as 'tipe' FROM tipe";

                        $tipe = $conn->query($sql);
                        foreach ($tipe as $t) { ?>
                            <span class="filter-btn" data-filter="filter-<?= $t['tipe']; ?>">
                                <?= $t['tipe']; ?>
                            </span>
                        <?php } ?>
                    </div>
                    <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
                        <?php
                        $sql = "SELECT tipe.nama as 'tipe', user.username as 'username', mobil.nama as 'nama', mobil.gambar as 'gambar', massage , rating
>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
                    FROM review
                    INNER join user on user.id_user = review.id_user
                    INNER Join mobil on mobil.id = review.id
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";

<<<<<<< HEAD
                $review = $conn->query($sql);
                foreach ($review as $r) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item d-flex align-items-stretch mt-4">
                        <div class="cars-wrap justify-content-lg-stretch">
                            <div class="cars-info justify-content-lg-stretch">
                                <tr>
                                    <th scope="row">
                                        <!--<?= $a++; ?>-->
                                    </th>
                                    <td>
                                        <h4>
                                            <?= $r['username']; ?>
                                        </h4>
                                    </td>
                                    <br>
                                    <td>
                                        <div class="cars-img">
                                            <img src="img/cars/<?= $r['gambar']; ?>" alt="" class="img-fluid">
                                        </div>
                                        Mobil :
                                        <h6><?= $r['nama']; ?></h6>
                                    </td>
                                    <br>
                                    <td>
                                        Review :
                                        <h6><?= $r['massage']; ?></h6>
                                    </td>
                                    <br>
                            </div>
                        </div>
                    </div>
                    <br>


                    </tr>
                <?php } ?>
            </tbody>
        </div>

=======
$review = $conn->query($sql);
$a = 1;
foreach ($review as $r) { ?>
    <div class="col-container mt-5 cars-item filter-<?= $r['tipe']; ?>">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row align-items-start mt-3">
                <div class="col-2">
                    <img src="img/default.png" class="img-fluid rounded-start ms-4" style="width: 50px;">
                </div>
                <div class="col-5 mt-3">
                    <h5 class="card-title">
                        <?= $r['username']; ?>
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <i>
                            <p class="card-text mb-3">
                                <?= $r['massage']; ?>
                            </p>
                        </i>

                        <div>
                            <img src="img/star<?= $r['rating']; ?>.png" class="img-fluid rounded-start" style="width: 150px;">
                        </div>

                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
            </tbody>
        </div>

>>>>>>> a7326631bc79ff171851a12f6ce9dc3586c6fcef
    </div>
</div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>
<!-- Bekasan
    <div
                                class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
                                <div class="cars-wrap justify-content-lg-stretch">
                                    <div class="cars-info justify-content-lg-stretch">
                                        <tr>
                                            <th scope="row">
                                                
                                            </th>
                                            <td>
                                                <h4>
                                                <?= $r['username']; ?>
                                                </h4>
                                            </td>
                                            <br>
                                            <td>
                                                <div class="cars-img">
                                                    <img src="img/cars/<?= $r['gambar']; ?>" alt="" class="img-fluid">
                                                </div>
                                                Mobil :
                                                <h6>
                                                    <?= $r['nama']; ?>
                                                </h6>
                                            </td>
                                            <br>
                                            <td>
                                                Review :
                                                <h6>
                                                    <?= $r['massage']; ?>
                                                </h6>
                                            </td>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        -->