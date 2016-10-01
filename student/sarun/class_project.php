<?php
include_once './dbConnection.php';
$dbConnect = new dbConnection();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dbConnect->insertStudent();
    $firstname = $lastname=$email = $gender  = "";
    $firstname = ($_POST["fname"]);
    $lastname = ($_POST["lname"]);
    $gender = ($_POST["gender"]);
    $email = ($_POST["email"]);

    $finalString = '';
    $finalString.= "my firstname is $firstname";
    $finalString.= "<br>";
    $finalString .= "my lastname is $lastname";
    $finalString .= "<br>";
    $finalString .= "my gender is $gender";
    $finalString .= "<br>";
    $finalString .= "my email is $email";
    
    insertStudent($firstname,$lastname,$gender,$email);
    echo $finalString;
    exit;
}
?>

<html>
<head>
    <title> Students </title>
</head>
<body>  

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <table style="    border: 1px solid greenyellow" width="500" >
     <tr>
  <td>
  first name: <input type="text" name="fname"> <br>
  last name: <input type="text" name="lname"> <br>
</td>
</tr>
 <tr>
 <td>
 Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male <br>
e mail:<input type="text" name="email"> <br>
</td>
</tr>
<tr>
 <td>submit:<input type="submit" value="submit" name="submit">
 </td>
 </tr>
 
  </table>
</form>
</body>
</html>