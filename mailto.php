<?php
//var_dump($target);
if ($errorStatus == false) {
    $mail = "maxim.tarunin@ostrovok.ru";
    mail($mail, $target, $accost, $email);
}