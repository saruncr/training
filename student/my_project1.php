<?php
include_once './connection1.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $lastname=$email = $gender  = "";
    $firstname = ($_POST["fname"]);
    $lastname = ($_POST["lname"]);
    $gender = ($_POST["gender"]);
    $email = ($_POST["email"]);
    $rollno = ($_POST["rollno"]);
    $address = ($_POST["address"]);
    
    $finalString = '';
    $finalString.= "my firstname is $firstname";
    $finalString.= "<br>";
    $finalString .= "my lastname is $lastname";
    $finalString .= "<br>";
    $finalString .= "my gender is $gender";
    $finalString .= "<br>";
    $finalString .= "my email is $email";
    $finalString .= "<br>";
    $finalString .= "my rollno is $rollno";
    $finalString .= "<br>";
    $finalString .= "my address is $address";
    
    insertStudent($firstname,$lastname,$gender,$email,$rollno,$address);
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
 <td>
 RollNo:<input type="text" name="rollno"> <br>
 Address:<input type="text area" col="3",row=4 name="address"><br>
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