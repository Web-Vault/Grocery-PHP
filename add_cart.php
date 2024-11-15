<?php
include "db.php";

session_start();

$product_id = $_REQUEST['pid'];

// echo $product_id;
$uid = $_SESSION['user_id'];

$query = "INSERT INTO `cart` (`user_id`, `product_id`)  VALUES ($uid, $product_id) ";
$result = $conn->query($query);

if ($result) {
        ?>

        <script>
                window.location.href = "listing.php";
        </script>

        <?php
}

?>