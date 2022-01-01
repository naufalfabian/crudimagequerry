<?php

    include("config.php");

    if( isset($_GET['id']) ) {

    
        $id = $_GET['id'];

        $sql2 = "SELECT foto FROM calon_siswa WHERE id=$id";
        $query2 = mysqli_query($db, $sql2);

        while($siswa = mysqli_fetch_array($query2)) {
            if (is_file("images/".$siswa['foto'])) {
                unlink("images/".$siswa['foto']);
            }
        }

       
        $sql = "DELETE FROM calon_siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);

       
        if( $query ){
            header('Location: list-siswa.php');
        } else {
            die("gagal menghapus");
        }

    } else {
        die("akses dilarang");
    }

?>