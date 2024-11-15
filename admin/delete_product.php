<?php

require "db.php";

if (isset($_REQUEST['pid'])) {
        $pid = $_GET['pid'];

        $pid = (int)$pid;
        $sql = "DELETE FROM `products` WHERE `Product_id` = $pid";
        $result = $conn->query($sql);

        if ($result) {
                ?>
                <script>
                        window.location.href = "product.php";
                </script>
                <?php
        }
}

?>