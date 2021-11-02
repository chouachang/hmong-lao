
<!DOCTYPE html>
<!-- <head>
    <title>index</title>
    <link rel="css" href="css/th.css">
</head> -->
<html>
<head>
    <title>index</title>
    <link rel="css" href="css/style.css">
</head> 
<style>
table, th, td{
  border:1px solid black;
}
</style>
<body id= th>
    <center>
        <a href="form.php"> go to form </a><br><br>
    </center>
<table style="width:100%">
  <tr>
    <th>id</th>
    <th>fname</th>
    <th>gender</th>
    <th>numberphone</th>
    <th>email</th>
    <tH>action</tH>
  </tr>
  <?php 

        include 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM fname");

            While($row = mysqli_fetch_array($query)){
                $id =$row ['id'];
                $fname =$row['fname'];
                $gender=$row['gender'];
                $numberphone = $row['numberphone'];
                $email=$row['email'];
    
  ?>
                        
                <tr>
                    <td><?=$id; ?></td>
                    <td><?= $fname; ?></td>
                    <td><?= $gender; ?></td>
                    <td><?= $numberphone; ?></td>
                    <td><?= $email; ?></td>
                    <td>

                        <a href="update.php?id=<?=$id ?>"><b><i>update</i></b></a> 
                        <a href="delete.php?id=<?=$id ?>" onclick="return confirm('Are you sure?')"><b><i>delete</i></b></a>

                    </td>
               
                </tr>

        <?php 

            } 

        
     
        ?>
 
</table>


</body>
</html>