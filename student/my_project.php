
<html>
<head>
</head>
<body>  




<?php

$firstname = $lastname=$email = $gender  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = ($_POST["fname"]);
    $lastname = ($_POST["lname"]);
    $gender = ($_POST["gender"]);
  
  $email = ($_POST["email"]);
  
}


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <table style="width:100%",border=solid black>
     <tr>
  <th>
  first name: <input type="text" name="fname"> <br>
  last name: <input type="text" name="lname"> <br>
</th>
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

echo "my firstname is $firstname";
echo "<br>";
echo "my lastname is $lastname";
echo "<br>";
echo "my gender is $gender";
echo "<br>";
echo "my email is $email";
}
?>

</body>
</html>