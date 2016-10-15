<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <
        <?php
        class Baseclass
{
function Baseclass()
{
print "call by construct<br>";
}
function disp()
{
echo "hai";
}
}
$obj=new Baseclass();
$obj->disp();
        ?>
    </body>
</html>
