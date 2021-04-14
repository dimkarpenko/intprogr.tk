<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Php | Интересно о программировании">
	<title>Php | Интересно о программировании</title>
	<?php include "scripts/icons.php";?>
</head>
<body>
    <center>
        <img src="images/php-logo.png">
        <h1>Что такое PHP?</h1>
        <h3>PHP — скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов.Иначе говоря php нужен в основном для работы с html документами.Тоесть с помощью php можно выполнять любые действия с html файлами.К примеру через php можно создать новую страничку, присвоить ей какие-то свойства, а потом ещё всё это залить на сайт при этом не заходя каждый раз в html документ и не редактируя его вручную.</h3>
        <hr>
        <h1>От теории к практике</h1>
        <h3>К сожалению, Chrome Dev Tools (инструмент,позволяющий просматривать код странички) не показывает php код.Но я всё равно вам его покажу.Пример <a href="https://www.php.net/manual/ru/tokenizer.examples.php" target="_blank">php кода</a> можно посмотреть на их официальном сайте.<img src="images/img_9.png"><br>Как вы уже скорее всего заметили, у php как и у любого другого языка программирования есть свои особенности.Например в конце каждой строки нужно ставить <u>;</u>.Но подробнее о php вы узнаете в следующих видео:</h3>
        <iframe width="860" height="500" src="https://www.youtube.com/embed/a6xtQQqx1tg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
        <iframe width="860" height="500" src="https://www.youtube.com/embed/vJRL_MKoX9M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
        <iframe width="860" height="500" src="https://www.youtube.com/embed/xihMCwARRpk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>Также с помощью php можно к примеру отправить почту или вычислить ip адрес и много ещё чего.Кстати по поводу ip...Хмм, сейчас скажу.Твой ip - <?php echo($_SERVER['REMOTE_ADDR']);?>.Если не веришь - проверь свой ip на сайте <a href="https://2ip.ru" target="_blank">2ip</a>.</h3>
    </center>
    <?php include "scripts/menu.php";?>
</body>