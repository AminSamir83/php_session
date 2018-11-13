<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 13/11/2018
 * Time: 14:09
 */
session_start();

if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;
}

$_SESSION['views'] = $_SESSION['views']+1;

echo "le nombre de visites est égal à : ".$_SESSION['views'];
echo "<form action='index.php' method='POST' name='formulaire'> <input value='reset' type='submit' name='button'></form>";
if (isset($_POST['button']))
{ unset($_SESSION['views']);
 header("location:index.php");};
?>


