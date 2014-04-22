<?php
echo '<html><head><meta charset="utf-8"></head><body>';
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$errorStatus = false;

$target = ($_POST['subject']);
$accost = ($_POST['message']);
$email = ($_POST['email']);
print_r($_POST);
include "nobaduser.php";

echo $target, "<br/>", $accost, "<br/>";

$brow = $_SERVER['HTTP_USER_AGENT'];

$browsers = array ("MSIE", "Firefox","Presto","Chrome", "Safari");

for($i = 0; $i < count($browsers); $i++) {
    if(strpos($brow,$browsers[$i])) {
        echo "You using $browsers[$i] <br>";
        break;
    }
}
echo $errorStatus;

include "mailto.php";
//include "index.php";
echo '</body></html>';
