
<html>
   
    <body>
        <?php
abstract class animal
{
function greeting()
{
$s=$this->sound();
return strtoupper($s);
}
abstract function sound();
}
class Dog extends animal
{
function sound()
{
return "woff!";
}}
$dog =new Dog();
echo $dog->greeting();
?>
    </body>
</html>
