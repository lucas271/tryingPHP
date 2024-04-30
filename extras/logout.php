<?php 
    session_start();

    session_destroy();

    header('location: /phpTesting/13_sessions.php')
?>