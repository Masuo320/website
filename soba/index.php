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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/lightbox.css">
<link rel="stylesheet" href="css/slicknav.css" >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="js/respond.js"></script>
<script src="js/html5shiv.min.js"></script>
<link rel="stylesheet" href="css/oldie.css" >
<![endif]-->
<script src="js/lightbox.js" type="text/javascript"></script>
<script src="js/jquery.pause.min.js"></script>
<script>
$(function(){
    var setElm = $('.loopSlider'),
    slideSpeed = 7500;
 
    setElm.each(function(){
        var self = $(this),
        selfWidth = self.innerWidth(),
        findUl = self.find('ul'),
        findLi = findUl.find('li'),
        listWidth = findLi.outerWidth(),
        listCount = findLi.length,
        loopWidth = listWidth * listCount;
 
        findUl.wrapAll('<div class="loopSliderWrap" />');
        var selfWrap = self.find('.loopSliderWrap');
 
        if(loopWidth > selfWidth){
            findUl.css({width:loopWidth}).clone().appendTo(selfWrap);
 
            selfWrap.css({width:loopWidth*2});
 
            function loopMove(){
                selfWrap.animate({left:'-' + (loopWidth) + 'px'},slideSpeed*listCount,'linear',function(){
                    selfWrap.css({left:'0'});
                    loopMove();
                });
            };
            loopMove();
 
            setElm.hover(function() {
                selfWrap.pause();
            }, function() {
                selfWrap.resume();
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});
</script>

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


		<div id="topimg">
			<img src="img/fstimg.jpg">
		</div><!--#topimg-->


		<main>
			<div class="text">
				<p>山で店主自ら採ってきた</p>
				<p>珍しい山菜が自慢のおそば屋さん「しを里」</p>
				<p>&nbsp;</p>
				<p>梨県甲斐市、昇仙峡の近くにある</p>
				<p>珍しい山菜が自慢のお蕎麦屋さんです。</p>
				<p>店内には趣味で集めた骨董品や</p>
				<p>和小物を展示しております。</p>
				<p>山の中腹に位置しているため</p>
				<p>眼下には甲府盆地が見渡せ、</p>
				<p>遊歩道からはきれいな富士山を</p>
				<p>眺めることができます。</p>
				<p>お近くにお越しの際はぜひ</p>
				<p>お気軽にお立ち寄りください。 </p>
			</div><!--.text-->
		</main>


		<section>
			<h2>-&nbsp;写真&nbsp;-</h2>

			<div class="loopSlider">
				<ul>
					<li><a href="img/slide_1.jpg" rel="lightbox" data-lightbox="slide" data-title="提灯"><img src="img/slide_1.jpg"></a></li>
					<li><a href="img/slide_2.jpg" rel="lightbox" data-lightbox="slide" data-title="明かり"><img src="img/slide_2.jpg"></a></li>
					<li><a href="img/slide_9.jpg" rel="lightbox" data-lightbox="slide" data-title="おみせ"><img src="img/slide_9.jpg"></a></li>
					<li><a href="img/slide_3.jpg" rel="lightbox" data-lightbox="slide" data-title="明かり"><img src="img/slide_3.jpg"></a></li>
					<li><a href="img/slide_4.jpg" rel="lightbox" data-lightbox="slide" data-title="お茶"><img src="img/slide_4.jpg"></a></li>
					<li><a href="img/slide_5.jpg" rel="lightbox" data-lightbox="slide" data-title="採れたての山菜"><img src="img/slide_5.jpg"></a></li>
					<li><a href="img/slide_6.jpg" rel="lightbox" data-lightbox="slide" data-title="リンドウ"><img src="img/slide_6.jpg"></a></li>
					<li><a href="img/slide_7.jpg" rel="lightbox" data-lightbox="slide" data-title="桜"><img src="img/slide_7.jpg"></a></li>
					<li><a href="img/slide_8.jpg" rel="lightbox" data-lightbox="slide" data-title="ことば"><img src="img/slide_8.jpg"></a></li>
				</ul>
			</div><!-- .loopSlider -->
			
		</section>
		

		<div id="container">
			<h2>-&nbsp;ご案内&nbsp;-</h2>
			<div id="map">
				<div class="gmap">
					<script type='text/javascript' charset='UTF-8' src='https://map.yahooapis.jp/MapsService/embedmap/V2/?p=%E5%B1%B1%E6%A2%A8%E7%9C%8C%E7%94%B2%E6%96%90%E5%B8%82%E7%89%9B%E5%8F%A53268-3&amp;ac=19210&amp;az=3.3268.3&amp;zoom=18&amp;lat=35.70787223&amp;lon=138.52304605&amp;cond=placegenre%3Aaddress%3Bac%3A19210%3Baz%3A3.3268.3%3B&amp;pluginid=pa&amp;z=18&amp;mode=map&amp;active=true&amp;layer=pa&amp;home=on&amp;hlat=35.70787223&amp;hlon=138.52304605&amp;pointer=off&amp;pan=off&amp;ei=utf8&amp;v=3&amp;datum=wgs&amp;width=480&amp;height=360&amp;device=pc&amp;isleft=' width="400" height="350"></script>
				</div>
				<div class="text2">
					<p>営業時閒&nbsp;／&nbsp;11：30～14：30&nbsp;18:00～21:00</p>
					<p>定休日&nbsp;／&nbsp;月曜日・火曜日</p>
					<p>電話番号&nbsp;／&nbsp;055-277-3356</p>
					<p>&nbsp;</p>
					<p>〒400-0121</p>
					<p>山梨県甲斐市牛句3268-3</p>
				</div>
			</div><!--#map-->
		</div>

		
		<p class="pagetop"><a href="#wrap"><img src="img/pagetop.png" width="70px" alt="PAGE TOP" /></a></p>

		
<?php require_once(dirname(__FILE__) . '/includes/footer.html');?>
