<?php
require_once(dirname(__FILE__) . '/lib/model/Model.php');
require_once(dirname(__FILE__) . '/lib/function.php');

try {
    $model = new Model();
    $model->connect();
    $sql = 'SELECT name, img, turn FROM seat WHERE delete_flg = 0 ORDER BY turn ASC';
    $stmt = $model->dbh->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error = 'システムエラーが発生したため、電話番号：055-277-3356までお電話ください';
}
?>
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
<link rel="stylesheet" href="css/seat.css">
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
		<section>
		    <h2>-&nbsp;お座席&nbsp;-</h2>
	        <div id="box">
                <?=!empty($error) ? '<p class="error">' . $error . '</p>' : ''?>
                <?php if (!empty($results)) :?>
                    <?php foreach ($results as $result) :?>
                        <span>
				    	    <img src="img/<?=!empty($result['img']) ? h($result['img']) : 'noimage.png'?>">
				    	    <div class="mask">
				    	        <div class="caption">
                                    <p><?=h($result['name'])?></p>
                                </div>
                            </div>
                        </span>
                    <?php endforeach;?>
                <?php endif;?>
		    </div>
		</section>
<?php require_once(dirname(__FILE__) . '/includes/footer.html');?>
