<?php
    session_start();

    if(isset($_SESSION['username'])){
        echo '<h1>Welcome </h1>' . $_SESSION['username'] . '</h1>';
        echo "<a href='logout.php'> Logout</a>";
    }else{
        echo '<h1> Welcome guest</h1>';

    }
?>