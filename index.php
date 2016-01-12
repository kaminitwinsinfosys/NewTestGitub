<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<title>Sampson Mcphee</title>
<link href="css/styl.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">  
(function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()</script>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script>
  $(function() {
   var pull   = $('#pull');
    menu   = $('#menu');
    menuHeight = menu.height();
   $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
   });
   $(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
     menu.removeAttr('style');
    }
   });
  });
</script>
<body>
<h2> hello world </h2>
<p></p>
</body>
</html>