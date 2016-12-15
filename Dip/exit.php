<?php header("refresh:1;url=registration.php");?>
<?php
    session_start();
    session_unset();
    session_destroy();
?>
