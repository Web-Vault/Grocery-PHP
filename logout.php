<?php
session_start();

$_SESSION = array();

if (isset($_SESSION['admin'])) {
        session_abort();

        header(".\login.php");
}

else {
        header("Location: index.php");

}

exit();
?>
