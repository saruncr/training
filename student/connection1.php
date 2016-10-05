<?php
// Create connection
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname  = 'StudentDb';
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function  insertclass($classname,$classdivision,$totalstrenghofclass,$nameofclassteacher){
    
    $conn = connect();
 
    $sql = "INSERT INTO classinfo (ClassName,ClassDivision,TotalStrenghofClass,NameofClassteacher,)
            VALUES ( '$classname','$classdivision','$totalstrenghofclass','$nameofclassteacher')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully". mysqli_insert_id($conn)." :)  <br/>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    

?>
