
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "formname";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            // else{
            //     echo "connection"; 
            // }
        // $sql = "INSERT INTO MyGuests (id, fname, gender,numberphone, email)
        // VALUES ('John', 'Doe', 'john@example.com')";

        // if (mysqli_query($conn, $sql)) {
        //     echo "New record created successfully";
        // } else {
        //      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }

            // mysqli_close($conn);
?>