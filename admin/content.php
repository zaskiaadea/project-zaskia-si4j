<?php 
    //check link ada atau tidak variabel page
    if(isset($_GET['page']))
    {
        //check variabel page ada atau kosong
        if(empty($_GET['page']))
        {
            include "dashboard.php";
        } else {
            $page=$_GET['page']; //ambil nilai page
            $file=$page.".php";//ex dokter.php
            if (file_exists($file)) {
                include $file;//jika file ada
            } else{
                
            }
        }
    }
     else {
        //tampilkan dashboard.php
        include "dashboard.php";
    }
?>