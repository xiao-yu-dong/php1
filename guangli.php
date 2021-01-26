<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>guanli</title>
	</head>
	<body>
		<style>
			*{
	margin: 0;
	padding: 0;
}
body{
	background-color: #2fc048;
}
#all{
	width: 550px;
	height: 100%;
	margin: 0 auto;
	float: left;
	position: fixed;
	left: 0px;
	top: 0px;
	background-image: url(img/ms555.jpg);
}

#all img{
	width: 1550px;
	z-index: -1;
     height: 410px;
}
		</style>
		<div id="all"">
			<p style="position: absolute; left: 175px; top: 137px">
					<span style="font-size: 82px; color:#2fc048; font-family:'仿宋';">管理界面</span>
				</p>
				<p style="position: absolute;left: 259px; top: 375px ">
					<a href="index.php" style="font-size: 23px; color:#2fc048; font-family:'arial narrow';">返回主页</a>
				</p>
		</div>
		<?php
			require "./conn.php";
			$sql = "SELECT * FROM content ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($result)) {
				$sql_c = "SELECT * FROM user WHERE id = '{$row["user_id"]}'";
				$result2 = mysqli_query($conn, $sql_c);
				$rows = mysqli_fetch_array($result2);
				echo "<div style = 'border: 1px solid; width: 500px; margin-left: 571px;margin-top:15px;'>";
				echo "<div style = 'background: gray;'>用户：".$rows['username']."&nbsp;&nbsp;&nbsp;&nbsp;时间：".$row['update_time']."</div>";
				echo "<div style = 'height: 50px; background: #EAEAEA;'>".$row['content']."</div>";
				echo "<a href = './delete.php?id={$row['id']}'>删除</a>";
				echo "</div>";
			}
		?>
	</body>
</html>