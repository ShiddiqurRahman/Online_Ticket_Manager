
/**
 * Created by PhpStorm.
 * User: Shiddiqur R Sumon
 * Date: 30-Apr-17
 * Time: 2:43 AM
 */

<?php
session_start();

if(!isset($_SESSION['name']))
{
    header("Location: bus.php");
}
else if(isset($_SESSION['name'])!="")
{
    session_destroy();
    unset($_SESSION['name']);
    header("Location: index.php");
}

?>
