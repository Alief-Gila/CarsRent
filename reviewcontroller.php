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
        $id_user = $_REQUEST['nama'];
        $id_mobil = $_REQUEST['mobil'];
        $review =  $_REQUEST['review'];
        
         
        // Performing insert query execution
        // here our table name is college
        
        $submit = "INSERT INTO review (id_user,id,massage)  VALUES ('$id_user','$id_mobil','$review')";
        mysqli_query($conn, $submit)
        
                ?>
                <?php include"header.php"; ?>
                <div class="container">
                <a class="btn-hero" href="review.php">kembali</a>
            </div>
                <?php include "footer.php"; ?>
                