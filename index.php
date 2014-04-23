<html>
<head>
    <meta charset="utf-8">
    <title>Ostrovok</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600&subset=latin,cyrillic,cyrillic-ext'
          rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<?

$status = (isset($_GET['status'])) ? $_GET['status'] : '';
/*
if ($_GET['status']) {
    $status = $_GET['status'];
} else {
    $status = '';
}
*/
?>

<div class="logo">
    <img src="images/logo.png" alt="Ostrovok">
</div>
<div class="header-title">
    <h1>
        Анонимная<br>
        форма обратной связи
    </h1>

    <h3>обращения в ИТ-отдел</h3>
</div>

<div class="text">
    <form name="feedback" action="test.php" method="post">
        <?
        if ($status == 'error_1') {
            echo '<div class="error">Необходимо заполнить все поля</div>';
        } elseif ($status == 'error_2') {
            echo '<div class="error">Некорректная цель обращения</div>';
        } elseif ($status == 'error_3') {
        echo '<div class="error">Некорректное обращение</div>';
        } elseif ($status == 'error_4') {
        echo '<div class="error">Некорректный e-mail адрес <br>Пример: mymail@ostrovok.ru</div>';
        } elseif ($status == 'success') {
            echo '<div class="success">Сообщение отправлено</div>';

        }

        ?>
        <div class="p">Цель твоего обращения:</div>
        <input name="subject" class="target" placeholder="Например, &laquo;Дайте мне это!&raquo;">

        <div class="p">E-mail:</div>
        <input name="email" class="target" placeholder="Например, &laquo;mymail@ostrovok.ru&raquo;">

        <div class="p">Что ты хочешь от нас?</div>
        <textarea name="message" class="field-textarea" placeholder="Постарайся написать подробнее, чтобы мы поняли..."></textarea>
        <button class="submit-button" type="submit">Отправить</button>
    </form>
</div>
<div class="last">Твое сообщение будет отправлено нам на электронную почту.<br>

    Если ты хочешь ты можешь отправить его сам на <a
            href="mailto:maxim.tarunin@ostrovok.ru">maxim.tarunin@ostrovok.ru</a>

</div>
</body>
</html>