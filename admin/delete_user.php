<?php

require "db.php";

if (isset($_REQUEST['uid'])) {
        $uid = $_GET['uid'];

        $sql = "DELETE FROM `users` WHERE `user_id` = $uid";
        $result = $conn->query($sql);

        if ($result) {
                ?>
                <script>
                        window.location.href = "user.php";
                </script>
                <?php
        }
}

?>