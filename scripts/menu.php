<head>
	<meta charset="utf-8">
	<link rel='icon' type="image/ico" href="/images/file-code-icon.png">
	<meta property="og:type" content="article" />
    <meta property="og:image" content="https://intprogramming.000webhostapp.com/images/file-code-icon.png"/>

</head>

<body>

<div class="h-menu">
    <?php include "menu-content.php";?>
    <li><strong><a href="https://www.intprogr.tk/quest.php" class="menu">Квест</a></strong></li><br>
    <li><strong><a class="menu" id="show">Сообщить о баге</a></strong></li>
</div>

<div id="bug" align="center">
    <div id="field">
        <?php include "mailbox.php";?>
        <input type="button" id="close" value="Закрыть">
    </div>
</div>

<script type="text/javascript">
  let content = document.getElementById("bug")
  let show = document.getElementById("show")
  let hide = document.getElementById("close")
  content.style.display = "none"

  show.addEventListener("click", () => {
      content.style.display = "block"
  })

  hide.addEventListener("click", () => {
      content.style.display = "none"
  })
          
</script>

<!--Small_menu-->

<div id="youtube">
    <script src="https://apis.google.com/js/platform.js"></script>
    <div class="g-ytsubscribe" data-channelid="UCUk8RBP9otoHIJwZ_7y4xBg" data-layout="full" data-count="default"></div>
</div>
<?php
error_reporting(0);
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (strpos($url, '?mode=light')) {
    echo("<script>document.cookie = 'mode=light; expires=09/06/2021 00:00:00;';</script>");
    echo('<script>if (window.location.href.indexOf("reload")==-1) {window.location.replace(window.location.href+"?reload");}</script>');
}

elseif (strpos($url, '?mode=dark')) {
    echo("<script>document.cookie = 'mode=dark; expires=09/06/2021 00:00:00;';</script>");
    echo('<script>if (window.location.href.indexOf("reload")==-1) {window.location.replace(window.location.href+"?reload");}</script>');
}

$num = rand(1,20);

if ($num == "11") {
    include "w.php";
}

$cookie = $_COOKIE['mode'];

if ($cookie == "light") {
    include "fairmode.php";
}

elseif ($cookie == "dark") {
    include "darkmode.php";
}

else {
    include "fairmode.php";
    echo("<script>document.cookie = 'mode=light; expires=09/06/2021 00:00:00;';</script>");
}

require_once 'mobile_detect.php';
$detect = new Mobile_Detect;

if ( $detect->isMobile() ) { 
    include "mini-menu.php";
}

else {
    echo('<div id="small-menu-button"><img src="https://intprogr.tk/images/menu.svg" id="small-menu-img"></div>');
}

?>
<style>
#small-menu {
    margin-left:20%;
    border:4px solid #535353;
    background-color:#F1F1F1;
    bottom: 15%;
    position:fixed;
    box-shadow: rgba(0,0,0,.5) 0 0 0 1000px;
}

#small-menu-button {
    border-radius:50px;
    background-color:#000;
    width:70px;
    height:70px;
    cursor:pointer;
    position:fixed;
    left:20px;
    top:580px;
    display:none;
}
    
#small-menu-img {
    width:70px;
}

@media only screen and (max-width: 1460px) {
    #vk-community {
        display:none;
    }
    
    #youtube {
        display:none;
    }
    
    .changemode {
        display:none;
    }
    
    body {
        border-width:20px;
        margin-right:10%;
    }
    
    .h-menu {
        border-width:18px;
    }
}

@media only screen and (max-width: 1370px) {
    .h-menu {
        border-width:15px;
    }
    
    body {
        border-width:15px;
    }
}

@media only screen and (max-width: 1280px) {
    .h-menu {
        display:none;
    }
    
    #small-menu-button {
        display:block;
    }
}


#youtube {
    margin-left:69%;
    top:10px;
    position:fixed;
    width:180px;
    border-radius:5px;
}

#field {
    border:10px solid #F1F1F1;
}

h1 {
    font-size:17pt;
}

#show {
    cursor:pointer;
}

#maintext {
    font-size:20px;
}

.menu {
    cursor:pointer;
}


#collink {
    color:#ffffff;
}

#vk-community {
    margin-left:69%;
    background-color:#F1F1F1;
    top:14%;
    position:fixed;
}

iframe {
    max-width:100%;
}

img{
	margin-top:3%;
	display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    height: auto;
}

#bug {
    margin-left:20%;
    border:4px solid #535353;
    background-color:#F1F1F1;
    bottom: 15%;
    position:fixed;
    box-shadow: rgba(0,0,0,.5) 0 0 0 1000px;
}

.h-menu {
    max-width:100%;
    overflow:auto;
    border-radius:5px;
    left:10px;
    top:8px;
    bottom:8px;
    width:150px;
    /*height:650px;*/
    list-style:none;
    position:fixed;
    
}
.h-menu::-webkit-scrollbar {
    width: 10px;
}

.h-menu::-webkit-scrollbar-thumb {
    border-radius: 10px;
}

.h-menu::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.2);
    border-radius: 10px;
}

::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-thumb {
    border-radius: 10px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0); 
    border-radius: 10px;
}

html {
    background-attachment: fixed;
    background-repeat:no-repeat;
    background-size:cover;
}

body {
	border-radius:5px;
	margin-right:15%;
    margin-left:15%;
}
    
*{
    font-family: 'Noto Sans JP', sans-serif;
    font-size:17px;
}

img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
    display: none;
} 
</style>
<center>
<br>
<div id="col">
<?php include "share.php";?>
<h3><strong>
    • <a id="collink" href="https://github.com/dimkarpenko/intprogr.tk" target="_blank">GitHub</a> 
    • <a id="collink" href="https://vk.com/intprogr_tk" target="_blank">Вконтакте</a> 
    • <a id="collink" href="https://www.youtube.com/channel/UCUk8RBP9otoHIJwZ_7y4xBg" target="_blank">YouTube</a> 
    • <a id="collink" href="mailto:hello@intprogr.tk" target="_blank">hello@intprogr.tk</a> •
</strong></h3>
<h3>© 2021. Автор проекта: Дмитрий Капенко dkarp3ncko@yandex.ru</h3>
</div>
</center>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(75328765, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/75328765" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
