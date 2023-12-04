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

$id_user = $_REQUEST['nama'] ?? null;
$id_mobil = $_REQUEST['id_modal'] ?? null;
$review =  $_REQUEST['review'] ?? null;

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
            $a = 1;
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
                $sql = "SELECT tipe.nama as 'tipe', user.username as 'username', mobil.nama as 'nama', mobil.gambar as 'gambar', massage 
                    FROM review
                    INNER join user on user.id_user = review.id_user
                    INNER Join mobil on mobil.id = review.id
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";

                $review = $conn->query($sql);
                foreach ($review as $r) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
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

    </div>
</div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>