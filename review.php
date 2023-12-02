<?php
include 'header.php';
?>
<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item btn"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Review</li>
                </ol>
                <h3>Review</h3>
            </nav>
        </div>
    </div>
</section>
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
                //echo "Connected successfully";
        $id_user = $_REQUEST['nama'] ?? null;
        $id_mobil = $_REQUEST['mobil']?? null;
        $review =  $_REQUEST['review']?? null;
        
         
        // Performing insert query execution
        // here our table name is college
        
        $submit = "INSERT INTO review (id_user,id,massage)  VALUES ('$id_user','$id_mobil','$review')";
        mysqli_query($conn, $submit)
        
                ?>
<div class="container">
<a class="btn-hero" href="reviewform.php">Buat Review</a>
            <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
            <div class="row row-gap-3">
                <tbody>
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
                    FROM review
                    INNER join user on user.id_user = review.id_user
                    INNER Join mobil on mobil.id = review.id";

                    $review = $conn->query($sql);
                    foreach ($review as $r) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item d-flex align-items-stretch mt-4">
                        <div class="cars-wrap justify-content-lg-stretch">
                            <div class="cars-info justify-content-lg-stretch" >
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
                                        <img src="img/cars/<?= $r['gambar'];?>" alt="" class="img-fluid">
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