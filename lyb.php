<?php include("conn.php");
	session_start();
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/lyb.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title></title>
		<style type="text/css">
			textarea {
				width: 800px;
				height: 400px;
				margin-left: 300px;
				
			}
			.retitle {
				width: 700px;
				background: #4dcc32;
			}
			.recontent {
				width: 700px;
				height: 50px;
				background: #EAEAEA;
			}
		</style>
	</head>
	<body>
		<div id="all">
			<div id="head">
				<?php if(!isset($_SESSION['username'])) { ?>
				<div class="dlyuzc"><a href="reg.php">登录</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="log.php">注册</a></div>
				<?php } else {?>
					<div class="dlyuzc">
						<a href="adminlog.php">管理注册</a>
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
				<form action="" method = "post">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <input type="submit" name = "sub" value = "提交">
            <br>
            <br>
            <hr>
        </form>
        <?php
            require "./conn.php";
            if(isset($_POST["sub"])) {
                $content = $_POST['content'];			
				$_SESSION['username'] = "tuiu";
				if(!isset($_SESSION['username'])) {
					echo "<script>alert('请先登录');</script>";
					// exit();
				}
				echo $_SESSION['username'];
				$sql = "SELECT * FROM user WHERE username = '{$_SESSION['username']}'";
				$result = mysqli_query($conn, $sql);
				$fetch = mysqli_fetch_array($result);
				$date = date("Y-m-d H:i:s");
				$sql_in = "INSERT INTO content(user_id, content, update_time) VALUES('{$fetch['id']}', '$content', '$date')";
				$result2 = mysqli_query($conn, $sql_in);
				
            }
        ?>
		<?php
			$sql_xian = "SELECT * FROM content ORDER BY id desc";
			$result3 = mysqli_query($conn, $sql_xian);
			echo "<div style = 'background-color:rgba(0,0,0,0.3);'>";
			while($row = mysqli_fetch_array($result3)) {
				$sql = "SELECT * from user WHERE id = '{$row['user_id']}'";
				$result4 = mysqli_query($conn, $sql);
				$rows = mysqli_fetch_array($result4);
				
				echo "<div style = 'width: 700px; margin-left: 350px;margin-top: 10px;'>";
				echo "<div class = 'retitle'>".$rows['username']."&nbsp;&nbsp;&nbsp;&nbsp;".$row['update_time']."</div>";
				echo "<div class = 'recontent'>".$row["content"]."</div>";
				echo "</div>";
				
			}
			echo "</div>";
		?>
			</div>
		</div>
	</body>
</html>
