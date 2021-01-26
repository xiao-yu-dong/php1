<?php include("conn.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/ger.css">
		<title></title>
	</head>
	<body>
		<div id="all">
			<div id="head">
				<?php if(!isset($_SESSION['username'])) { ?>
				<div class="dlyuzc"><a href="reg.php">登录</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="log.php">注册</a></div>
				<?php } else {?>
					<div class="dlyuzc">
						<a href="adminlog.php">管理员注册</a>
						<a href="./safe.php">注销登录</a>
					</div>
					<?php }?>
				<p style="position: absolute; left: 175px; top: 137px">
					<span style="font-size: 82px; color:rgba(0,0,0,0.8); font-family:'黑体';">茶</span>
					<br>
					<span style="font-size: 82px; color:rgba(0,0,0,0.8); font-family:'黑体';">道</span>
				</p>
					<img src="img/lbt.jpg">
				<div class="dhl">
					<ul>
						<li><a href="index.php">家</a></li>
						<li style="color: #fff">|</li>
						<li><a href="ger.php">影忆</a></li>
						<li style="color: #fff">|</li>
						<li><a href="lyb.php">留言</a></li>
					</ul>
				</div>
			
			</div>
			<div id="middle">
				<div class="left">
					<ul>
						<li><span style="font-size: 20px; line-height: 40px; cursor: pointer;" onclick="anan()">茶道</span></li>
						<li><span style="font-size: 20px; line-height: 40px; cursor: pointer;" onclick="anbn()">茶杯</span></li>
						<li><span style="font-size: 20px; line-height: 40px; cursor: pointer;" onclick="ancn()">技艺</span></li>
					</ul>
				</div>
				<div class="tp">
					<div class="tp-01">
						<ul style="float: left; list-style-type: none;">
							<li style="float: left; list-style-type: none;"><img src="img/ms1.jpg" width="270" height="270"></li>
							<li><img src="img/ms2.jpg" width="270" height="270"></li>
						<li><img src="img/ms3.jpg" width="270" height="270"></li>
						</ul>
						<ul>
							<li><img src="img/ms4.jpg" width="270" height="270"></li>
							<li><img src="img/ms5.jpg"width="270" height="270"></li>
						<li><img src="img/ms6.jpg" width="270" height="270"></li>
						</ul>
						<ul>
							<li><img src="img/ms7.jpg" width="270"height="270"></li>
							<li><img src="img/ms8.jpg" width="270"height="270"></li>
						<li><img src="img/ms.jpg" width="270" height="270"></li>
						</ul>
					</div>
					<div class="tp-02">
						<ul style="float: left; list-style-type: none;">
							<li style="float: left; list-style-type: none;"><img src="img/ms11.jpg" width="270" height="270"></li>
							<li><img src="img/ms22.jpg" width="270" height="270"></li>
						<li><img src="img/ms33.jpg" width="270" height="270"></li>
						</ul>
						<ul>
							<li><img src="img/ms44.jpg" width="270" height="270"></li>
							<li><img src="img/ms55.jpg"width="270" height="270"></li>
						<li><img src="img/ms66.jpg" width="270" height="270"></li>
						</ul>
						<ul>
							<li><img src="img/ms111.jpg" width="270"height="270"></li>
							<li><img src="img/ms88.jpg" width="270"height="270"></li>
						<li><img src="img/ms99.jpg" width="270" height="270"></li>
						</ul>
					</div>
					<div class="tp-03">
						<ul style="float: left; list-style-type: none;">
							<li style="float: left; list-style-type: none;"><img src="img/ms111.jpg" width="270" height="270"></li>
							<li><img src="img/ms222.jpg" width="270" height="270"></li>
						<li><img src="img/ms333.jpg" width="270" height="270"></li>
						</ul>
						<ul>
							<li><img src="img/ms444.jpg" width="270" height="270"></li>
							<li><img src="img/ms555.jpg"width="270" height="270"></li>
						<li><img src="img/ms666.jpg" width="270" height="270"></li>
						</ul>
						<ul>
							<li><img src="img/ms777.jpg" width="270"height="270"></li>
							<li><img src="img/ms888.jpg" width="270"height="270"></li>
						<li><img src="img/ms999.jpg" width="270" height="270"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<script>
			var tp1 = document.getElementsByClassName("tp-01")[0];
			var tp2 = document.getElementsByClassName("tp-02")[0];
			var tp3 = document.getElementsByClassName("tp-03")[0];
			function anan(){
				tp1.style.zIndex ="1";
				tp2.style.zIndex ="-1";
				tp3.style.zIndex = "-1";
			}
			function anbn(){
				tp1.style.zIndex ="-1";
				tp2.style.zIndex ="-1";
				tp3.style.zIndex = "1";
			}
			function ancn(){
				tp1.style.zIndex ="-1";
				tp2.style.zIndex ="1";
				tp3.style.zIndex = "-1";
			}
		</script>
	</body>
</html>
