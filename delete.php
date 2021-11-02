<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css" -->
</head>
<body>
<?php 
    include "index.php";
    $id=$_GET['id'];
    $sql="DELETE FROM fname WHERE id='$id'";
        if($conn ->query($sql) === false)
        { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
            trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        }  
             else 
                { // Jika berhasil alihkan ke halaman tampil.php
                    echo "<script>alert('Add Success!')</script>";
                    echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
                }
?>
</body>
</html>

<!-- <?php 
    // include "index.php";
    // $id=$_GET['id'];
    // $sql="delete from fname where id='id'";
    //     if($conn ->query($sql) === false)
    //     { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    //         trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    //     }  
    //          else 
    //             { // Jika berhasil alihkan ke halaman tampil.php
    //                 echo "<script>alert('Add Success!')</script>";
    //                 echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
    //             }
?> -->