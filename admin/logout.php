<?php
    session_start();
    //hapus data session
    session_destroy();
    //kembali ke halaman login
    header("location: ../login.php");
?>