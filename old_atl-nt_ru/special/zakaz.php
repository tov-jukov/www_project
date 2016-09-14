<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='106044321-1',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Скала, бут, щебень, отсев, песок в Нижнем Тагиле недорого</title>
<link href="img/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="main_screen2">
<div class="main_screen_dot" align="center">
<h1>ХОРОШИЙ ВЫБОР!<br />
<span>СПАСИБО ЗА ЗАЯВКУ</span><br />
<em style="font-size:16px;">наш менеджер свяжется с Вами в течении 15 минут</em>
</h1>

<a href="http://atl-nt.ru/special/" style="color:#FFFF00;">ВЕРНУТЬСЯ НА САЙТ</a></div>

</div>

<div class="logo"><img src="img/logo.png" border="0" /><br />
Тяжёлое — легко!
</div>






<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31689096 = new Ya.Metrika({
                    id:31689096,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31689096" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
<?php 

define('Q', chr(13));

require_once '../config.php';
require_once '../class/class.php';

$clean = new Clean;
$phone = $clean->phone($_POST['tel']);
if($phone == '') exit;
$text = $clean->txt($_POST['text_zakaza']);
if($text != '') {
     $user = new User;
     $user->order($phone, $text);
     exit;
} else {
     $user = new User;
     $user->sendmail($phone);
     exit;    
}



?>