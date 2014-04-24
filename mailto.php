<?php
//var_dump($target);
if ($errorStatus == false) {
    $mail = "maxim.tarunin@ostrovok.ru";

    $message = "Привет!<br>Пришло новое сообщение обратной связи.<br><br>";
    $message .= "E-mail: {$email}<br><br>Message:<br>{$accost}<br><br>";
    $message .= "С уважением, твоя форма обратной связи.";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    mail($mail, $target, $message, $headers);
}