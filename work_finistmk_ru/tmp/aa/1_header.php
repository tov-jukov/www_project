<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="owner" content="atl-nt@mail.ru"/>
<meta http-equiv="content-language" content="ru"/>
<meta name = "robots" content = "index, follow">
<meta name = "keywords" content = "шебень, бут, скала, торф, отсев, песок, купить щебень, купить отсев, купить бут, купить торф, погрузчики, нижний тагил, не рудные материалы">

<title>АвтоТрансЛогистика</title>
<link href="img/style.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<link rel="stylesheet" href="img/animate.css">
<script src="js/countdown.js"></script>
<link rel="stylesheet" media="screen" href="css/style.css" />


<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('img/b1-2.png','img/b2-2.png')">

 <script>
  function fontSize() {
  var width = 1350; // ширина, от которой идет отсчет
  var fontSize = 16; // минимальный размер шрифта
  var bodyWidth = $('html').width();
  var height_22 = $(window).height();
  var multiplier = bodyWidth / width; 
  
  if ($('html').width() >= width) fontSize = Math.floor(fontSize * multiplier);
  if ($('html').width() <= width) fontSize = Math.floor(fontSize * multiplier);
  $('body').css({fontSize: fontSize+'px'});
  $('input').css({fontSize: fontSize+'px'});
  $('#akciya').css('padding-top', height_22); 
};



$(function() { fontSize(); }); 
$(window).resize(function() { fontSize(); });
</script>
<script src="js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="js/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <script src="js/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="js/jquery.inputmask.numeric.extensions.js" type="text/javascript"></script>
    <script src="js/jquery.inputmask.custom.extensions.js" type="text/javascript"></script>
<script>

     $(document).ready(function () {
			$("#phone").inputmask("+7(999)9999999");
			$("#tel").inputmask("+7(999)9999999");
			$("#tel2").inputmask("+7(999)9999999");

        });

</script>


<div class="modal_zayavka">

<div class="plato" id="plato">

<div class="plato_close" onclick="$('.modal_zayavka').hide(100);">X
</div>

<H1 id="h1">ЗАЯВКА НА ЩЕБЕНЬ</H1><br />

Впишите свой номер телефона в форму и нажмите отправить. Наши операторы свяжутся с Вами в ближайшее время для уточнения условий.
<br /><br />
<form action="spasibo.php" method="post">
<input name="tel2" id="tel2" class="tel2" type="text" required placeholder="Введите номер телефона">
  <br>
  <input name="submit2" class="submit2" type="submit" value="Отправить">
</form>


</div>

</div>


<div class="policy" id="policy">
<strong>100% конфиденциальность. Мы сохраним в тайне всю вашу личную информацию.</strong>
<p>Политика в отношении обработки персональных данных определяет основные принципы и правила по обработке персональных данных, которыми мы руководствуемся в нашей работе, а также в общении с клиентами, поставщиками и сотрудниками. Политика в отношении обработки персональных данных распространяется на всех наших сотрудников.</p>
<p>При обработке персональных данных мы стремимся соблюдать требования законодательства Российской Федерации, в частности Федеральный закон № 152-ФЗ «О персональных данных», а также нормы и правила, установленные в нашей компании.</p>

<input name="submit" class="submit" id="closepolicy" type="button" value="Закрыть" onClick="$('#policy').hide();">

</div>