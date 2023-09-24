<?
if ($_POST["d"]=="plus") {
$c=$_POST["a"]+$_POST["b"];
if (isset($_POST["x"])) {
echo ($_POST['a']."+".$_POST['b']."=".$c);
} else { 
echo ("Результат = ".$c); }
} else {
$c=$_POST["a"]*$_POST["b"]; }
if (isset($_POST["z"])) {
echo ("Результат = ".$c);
} else {
echo ($_POST['a']."*".$_POST['b']." = ".$c); }
echo ("<BR> <A href='index.html'> Вернуться назад </A>");
?>
 