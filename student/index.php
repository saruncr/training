<?php
if((isset($_POST['submit']))&&($_POST['submit'] == 'submit')){
    print_r($_POST);

    echo "stop Here";
    exit;
}


?>

<html>
    title TODO supply a title
    <body>
  
   <table style="width:100%",border=solid black>
   
   <form action="index.php" method="post">
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
  </form>
  </table>
  
    </body>
</html>

