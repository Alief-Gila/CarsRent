<?php include "header.php"; ?>
<body>
<div class="container">
    <?php
    $id_user = $_REQUEST['nama'] ?? null;
    $id_mobil = $_REQUEST['id_modal'] ?? null;
    $review =  $_REQUEST['review'] ?? null;
    $submit = "INSERT INTO review (id_user,id,massage)  VALUES ('$id_user','$id_mobil','$review')";
    mysqli_query($conn, $submit)

        ?>

    <a class="btn-hero" href="review.php">kembali</a>
</div>
</body>
<?php include "footer.php"; ?>