<?php
    require 'sql_connector.php';

    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: login.php");
?>