
<?php
include_once './connection1.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $classname= $classdivision= $totalstrenghofclass= $nameofclassteacher = "";
    $classname = ($_POST["classname"]);
    $classdivision = ($_POST["division"]);
    $totalstrenghofclass = ($_POST["strengh"]);
    $nameofclassteacher = ($_POST["name"]);
    
    
    $finalString = '';
    $finalString.= "classname is $classname";
    $finalString.= "<br>";
    $finalString .= "classdivision is $classdivision";
    $finalString .= "<br>";
    $finalString .= "total strengh of the class is $totalstrenghofclass ";
    $finalString .= "<br>";
    $finalString .= "name of the class teacher is $nameofclassteacher";
    insertclass($classname,$classdivision,$totalstrenghofclass,$nameofclassteacher,$classdivision,$totalstrenghofclass,$nameofclassteacher);
    echo $finalString;
    exit;
}
?>

<html>
<head>
    <title>class </title>
</head>
<body>  

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <table style="    border: 1px solid greenyellow" width="500" >
     <tr>
  <td>
  class name: <input type="text" name="classname"> <br>
  class division: <input type="text" name="division"> <br>
</td>
</tr>
 <tr>
 <td>
 total strengh of students :
 <input type="text" name="strengh" <br>
 name of class teacher:<input type="text" name="name"> <br>
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

