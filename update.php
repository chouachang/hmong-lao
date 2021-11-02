<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href= index.php>table</a>
   <?php 
        
        include 'config.php';
        $a=$_GET['id'];
        $X= mysqli_query($conn, "SELECT * FROM fname where id='$a'");
        $Y= mysqli_fetch_array($X, MYSQLI_ASSOC);  
   ?>
          <form method= "POST">
            <a>id:</a><input type="hidden" id="fname" name="id" placceholder="inser id" value="<?=$Y['id'] ?>"><br><br>
            <a>fname:</a><input type="text" id="fname" name="fname" placceholder="inser fname" value="<?=$Y['fname'] ?>"><br><br
            <a>gender:</a>

                <input type="radio" name="gender" value="femle" >female</input>
                <input type="radio" name="gender" value="male" >male</input>
                <input type="radio" name="gender" value="other" >other</input>  
                <br><br>
            
            <a>numberphone:</a><input type="number " id="numberphone " name="numberphone" placceholder="inser numberphone" value="<?=$Y['numberphone'] ?>"></input><br><br>
            <a>email:</a><input type="email " id="email " name="email" placceholder="inser email" value="<?=$Y['email'] ?>"></input><br><br>
            <button type="submit " name = "app" value="app">submit</button>
            <button type="reset" name = "cancel" value="cancel">cancel</button> 
         </form>
    <?php 
          if(isset($_POST['app']))
          {
            include 'config.php';
            $serverid =$_POST['id'];
            $serverfname =$_POST['fname'];
            $servergender =$_POST['gender'];
            $servernumberphone =$_POST['numberphone'];
            $serveremail =$_POST['email'];
          
            $sql ="UPDATE fname SET id= '$serverid', fname= '$serverfname', gender= '$servergender', numberphone= '$servernumberphone', email= '$serveremail' where id='$a'";
            
            if($conn ->query($sql) === false)
            { 
                // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
              trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
            }  
            else 
            { // Jika berhasil alihkan ke halaman tampil.php
                echo "<script>alert('update')</script>";
                echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
            }
        }
          
    ?> 
</body>
</html>