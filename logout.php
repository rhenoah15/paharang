<?php
session_start();
session_destroy();
    unlink($_SESSION['SESS_MEMBER_ID']);
header('location:index.php');

?>