<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>そば・山菜洞　しを里</title>
<meta name="robots" content="noindex,nofollow,noarchive">
<meta name="description" content="店主自ら採ってきた珍しい山菜が自慢のおそば屋さん「しを里」">
<meta name="keywords" content="しを里,蕎麦,山菜,山梨,甲斐市,天麩羅">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<link rel="stylesheet" href="css/about.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="js/respond.js"></script>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script>
     var url = window.location.pathname;
        $('.nav1 a[href="'+about+'"]').addClass('active');
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function(){
    $(".menu").click(function(){
        $(".menu1").toggleClass("menuclick1")
    });
    $(".menu").click(function(){
        $(".menu2").toggleClass("menuclick2")
    });
    $(".menu").click(function(){
        $(".menu3").toggleClass("menuclick3")
    }); 
});
jQuery(function($){
			$('.menu').click(function(){
   			 if ($('.nav3').css('display') == 'none') {
        	$('.nav3').slideDown('fast');
    		} else {
       		 $('.nav3').slideUp('fast');
   			 }
			});
        });
</script>
</head>
<body>
	<div id="wrapper">


		<nav class="menu clearfix">
    		<div class="menu1"></div>
    		<div class="menu2"></div>
    		<div class="menu3"></div>
 		</nav>

<?php require_once(dirname(__FILE__) . '/includes/common_header.html');?>


		<section>
			<div class="text">
				<h2>すべて手作りをモットーに</h2>
				<p>山で店主自ら採ってきた珍しい山菜が自慢のおそば屋さん「しを里」。</p>
				<p>&nbsp;</p>
				<p>梨県甲斐市、昇仙峡の近くにある珍しい山菜が自慢のお蕎麦屋さんです。</p>
				<p>店内には趣味で集めた骨董品や和小物を展示しております。</p>
				<p>山の中腹に位置しているため眼下には甲府盆地が見渡せ、遊歩道からはきれいな富士山を眺めることができます。</p>
				<p>&nbsp;</p>
				<p>お近くにお越しの際はぜひお気軽にお立ち寄りください。 </p>
			</div><!--.text-->
			<div class="kdwrimg">
				<div class="hoverimg">
					<img src="img/about_1.png">
				</div>
				<div class="hoverimg">
					<img src="img/about_2.png">
				</div>
				<div class="hoverimg">
					<img src="img/about_3.png">
				</div>
			</div><!--kdwrimg-->
		</section>



		

		

		
<?php require_once(dirname(__FILE__) . '/includes/footer.html');?>
