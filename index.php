<?php include("conn.php");
	session_start();
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/index.css">
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
					<div class="left-head">
						<img src="img/head.jpeg">
						<p><span style="font-size: 25px;">茶</span></p>
						<p><span style="font-family: '楷体';">（中国传统饮品）</span></p>
						<p>
							<span style=" color: #026213; ">灌木或小乔木</span><br />
							<span style=" color: #026213;">嫩枝无毛</span><br />
							<span style=" color: #026213;">叶革质</span><br />
							<span style=" color: #026213;">长圆形或椭圆形</span><br />
						</p>
						
					</div>
					<div class="left-middle">
						<p>
							<span style="font-size: 45px;">功效</span>
						</p>
						<ul>
							<li>茶叶可作饮品，含有多种有益成分，</li>
							<li>并有保健功效。</li>
						</ul>
					</div>
				</div>
				<div class="right">
					<p style="margin-left: 311px;"><span style="color: black; font-size:28px ; font-weight: 600;">中国茶</span></p>
					<p style="margin-top: 50px;">
						<span style="font-size: 20px;">1.茶叶的分类</span>
					</p>
					<p style="border-bottom: 1px solid black;">
						<span>茶类的划分有多种方法，按茶多酚的氧化程度来说，茶叶可分为六类，即绿茶、红茶、黄茶、白茶、青茶、黑茶。</span>
					</p>
					<p style="margin-top: 50px;">
						<span style="font-size: 20px;">2.茶叶的产地</span>
					</p>
					<p style="border-bottom: 1px solid black;">
						<span>绿茶 集中于扬子江以南地区，即江苏、浙江、安徽、湖北、湖南和江西六省；

							黄茶 多产自于湖南、湖北、四川、安徽、浙江和广东等各省；

							白茶 主要产于福建省；

							青茶 集中于福建、广东、台湾；

							红茶 多产自于福建、广东、安徽、云南、江西各省；

							黑茶 广泛来自云南、广西、湖南、四川。
						</span>
					</p>
					<p style="margin-top: 50px;">
						<span style="font-size: 20px;">3.茶叶的制作工艺</span>
					</p>
					<p style="border-bottom: 1px solid black;">
						<span>绿茶 简单的可以分为杀青、揉捻、干燥；

							黄茶 杀青、揉捻、闷黄、干燥；

							白茶 萎凋（自然、复试、加温）、干燥；

							青茶 萎凋、做青、炒青、揉捻、干燥；

							红茶 萎凋、揉捻、发酵、烘干；

							黑茶 杀青、初揉、渥堆、复揉、烘焙。
						</span>
					</p>
					<p style="margin-top: 50px;">
						<span style="font-size: 20px;">4.储存</span>
					</p>
					<p >
						<span>茶叶的储存关键是防压、防潮、密封、避光、防异味。宜采用锡瓶、瓷坛、有色玻璃瓶为佳。放置于干燥通风处或进行真空包装置于冰箱内保存。不同类型的茶叶储存方式不一，后续会详细介绍。</span>
					</p>
				</div>
			</div>
			<div class="footer"></div>
		</div>
	</body>
</html>
