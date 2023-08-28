<!doctype html>
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
<link rel="stylesheet" href="css/access.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="js/respond.js"></script>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
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
		</header>



		<div id="container">
			<h2>-&nbsp;ご案内&nbsp;-</h2>

			<table class="type04">
				<tr>
					<th scope="row">住所</th>
					<td><p>〒400-0121</p><p>山梨県甲斐市牛句3268-3</p></td>
				</tr>
				<tr>
					<th scope="row">営業時閒</th>
					<td>11：30～14：30&nbsp;18:00～21:00</td>
				</tr>
				<tr>
					<th scope="row">定休日</th>
					<td>月曜日・火曜日</td>
				</tr>
				<tr>
					<th scope="row">電話番号</th>
					<td>055-277-3356</td>
				</tr>
				<tr>
					<th scope="row">交通</th>
					<td><p>竜王駅から車で１５分、中央道双葉スマートインターから１２分</p>
						<p>塩崎駅から3,963m</p></td>
				</tr>
		</table>


			<div id="map">
				<div class="gmap">
					<script type='text/javascript' charset='UTF-8' src='https://map.yahooapis.jp/MapsService/embedmap/V2/?cond=placegenre%3Aaddress%3Bac%3A19210%3Baz%3A3.3268.3%3B&amp;p=%E5%B1%B1%E6%A2%A8%E7%9C%8C%E7%94%B2%E6%96%90%E5%B8%82%E7%89%9B%E5%8F%A53268-3&amp;ac=19210&amp;az=3.3268.3&amp;zoom=18&amp;lat=35.70787223&amp;lon=138.52304605&amp;pluginid=pa&amp;z=18&amp;mode=map&amp;active=true&amp;layer=pa&amp;home=on&amp;hlat=35.70787223&amp;hlon=138.52304605&amp;pointer=off&amp;pan=off&amp;ei=utf8&amp;v=3&amp;datum=wgs&amp;width=480&amp;height=360&amp;device=pc&amp;isleft=' width="1000px"></script>
				</div>
			</div><!--#map-->
		</div>

		

		

		
<?php require_once(dirname(__FILE__) . '/includes/footer.html');?>
