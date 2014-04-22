<?php

if (($target != "") or ($accost != "") or ($email != "")) {

    if ((strlen($target) >= 2) and (strlen($target) <= 30)) {
        $target = stripslashes($target);
        $target = html_entity_decode($target);
        $target = strip_tags($target);
    } else {
        $errorStatus = true;
        $redirectUrl = "index.php?status=error_2";
    }
    if ((strlen($accost) >= 2) and (strlen($accost) <= 120)) {
        $accost = stripslashes($accost);
        $accost = html_entity_decode($accost);
        $accost = strip_tags($accost);
    } else {
        $errorStatus = true;
        $redirectUrl = "index.php?status=error_3";
    }
    if (!preg_match('|([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is', $email)) {
        $errorStatus = true;
        $redirectUrl = "index.php?status=error_4";
    }
} else {
    $errorStatus = true;
    $redirectUrl = "index.php?status=error_1";
}
if ($errorStatus == false) {
        $redirectUrl = "index.php?status=success";
}

header("Location:{$redirectUrl}");