<?php
// Create connection
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname  = 'StudentDb';
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function  insertStudent($firstname,$lastname,$gender,$email){
    
    $conn = connect();
 
    $sql = "INSERT INTO students (StudentFirstName, StudentLastName, Gender, Email)
            VALUES ( '$firstname', '$lastname', '$gender', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully". mysqli_insert_id($conn)." :)  <br/>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    

?>
