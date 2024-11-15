<?php 

require "db.php";

session_start();

$pid = $_REQUEST['pid'];

$sql = "DELETE FROM `cart` WHERE `product_id` = $pid";
$conn->query($sql);

?>

<script>
        window.location.href = "cart.php";
</script>