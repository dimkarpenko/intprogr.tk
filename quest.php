<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Квест | Интересно о программировании">
	<title>Квест | Интересно о программировании</title>
	<?php include "scripts/icons.php";?>
	<center>
        <h1 id="main-text">Квест</h1>
	</center>
</head>
<body>
    <script src="quest1/stopmobile.js"></script>
    <center>
    <div id="win" align="center">
        <div id="win2">
            <h2 class="wintxt">Поздравляем!<br>Ты прошёл наш квест!</h2>
            <h3 class="wintxt">Твой код подтверждения: <?php echo rand(1000, 5000);?></h3>
            <button id="hide">Закрыть</button>
        </div>
    </div>
    <center>
        <div id="mobile" align="center">
            <div id="mobile2">
                <h2>Квест не работает на мобильных устройствах!Попробуй открыть его на компьютере!</h2>
            </div>
        </div>
    </center>
    <h2>Привет!Я подготовил для тебя квест.Это очень интересный квест на смекалку, знание основ программирования и языка гипертекстовой разметки HTML!Но перед этим нужно выполнить несколько действий:</h2></center>
    <ol>
        <li>Если ты прошёл квест, не говори другим его решение</li>
        <li>Поделись этим квестом с друзьями</li>
        <li>После прохождения отправь результат в нашу <a href="https://vk.com/intprogr_tk" target="_blank">группу</a> вконтакте</li>
        <li>Если ты не сможешь пройти квест,обязательно почитай нашу <a href="https://intprogr.tk/HTML" target="_blank">статью о HTML</a></li>
    </ol>
    <center>
    <h2>Теперь ты можешь начать прохождение квеста.Если хочешь,можешь<br>засечь прохождение квеста на время.Вперёд!</h2>
    <input type="button" value="Начать!" onClick='location.href="https://intprogr.tk/quest/main"' id="start">
    <h4>Квест создан для проверки знаний наших читателей.<br>Автор квеста:Дмитрий Карпенко</h4>
    </center>
    <?php include "scripts/menu.php";
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, '?win=true')) {
        echo('<script src="quest/win.js"></script>');
    }
    ?>
    <script type="text/javascript">
      let wind = document.getElementById("win")
      let close = document.getElementById("hide")
    
      close.addEventListener("click", () => {
          wind.style.display = "none"
      })
              
    </script>
    <style>
        #start {
            cursor:pointer;
            color:#fff;
            background-color:#535353;
            border-radius:5px;
        }
    
        #main-text {
            font-size:50px;
            color:#8ac4d0;
        }
    
        #win {
            display:none;
        }
        
        .wintxt {
            
            font-size:30px;
            color:#ffe268;
        }
        
        #win {
            margin-left:16%;
            border:5px dashed #ffe268;
            /*border:4px solid #535353;*/
            background-color:#F1F1F1;
            bottom: 35%;
            position:fixed;
            box-shadow: rgba(0,0,0,.5) 0 0 0 1000px;
        }
        
        #win2 {
            border:25px solid #f1f1f1;
        }
        
        #mobile {
            display:none;
        }
        
        #mobile {
            margin-left:10%;
            border:5px solid #535353;
            background-color:#F1F1F1;
            bottom: 50%;
            position:fixed;
            box-shadow: rgba(0,0,0,.5) 0 0 0 1000px;
        }
        
        #mobile2 {
            border:25px solid #f1f1f1;
        }
    </style>
</body>