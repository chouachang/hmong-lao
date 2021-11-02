<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chouachang</title>
  
</head>

<body>
    <!-- <div> -->
    <center>
        <a href="index.php">go to table</a>
        <h1> Form Register</h1>

       
        <form method= "POST">
            <a>id:</a><input type="number" id="fname" name="id"><br><br>
            <a>fname:</a><input type="text" id="fname" name="fname"><br><br
            <a>gender:</a>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other <br><br>
            <a>numberphone:</a><input type="number " id="numberphone " name="numberphone"></input><br><br>
            E-mail:<input type="email " id="email " name="email" VALUE="e-mail"></input><br><br>
            <button type="submit " name = "app" value="app">submit</button>
            <button type="cancel ">cancel</button>
        </form>
    </center>

        <?php  
          if(isset($_POST['app'])){
          include 'config.php';
          $serverid =$_POST['id'];
          $serverfname =$_POST['fname'];
          $servergender =$_POST['gender'];
          $servernumberphone =$_POST['numberphone'];
          $serveremail =$_POST['email'];

          $sql="insert into fname (id,fname,gender,numberphone,email) VALUE(' $serverid',' $serverfname',' $servergender','$servernumberphone',' $serveremail')";
          
          if($conn ->query($sql) === false)
          { 
            // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
            trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
          }  
          else 
          { // Jika berhasil alihkan ke halaman tampil.php
            echo "<script>alert('Add Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
          }
        }
          
         ?>
     <!-- </div> -->
</body>

</html>