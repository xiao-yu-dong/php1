<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>liuyan</title>
    </head>
    <body>
        <form action="" method = "post">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <input type="submit" name = "sub" value = "提交">
        </form>
        <?php
            require "./conn.php";
            if(isset($_POST["sub"])) {
                $content = $_POST['content'];			
				$_SESSION['username'] = "tuiu";
				if(!isset($_SESSION['username'])) {
					echo "<script>alert('请先登录');</script>";
					exit();
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
			while($row = mysqli_fetch_array($result3)) {
				echo "<div>".$_SESSION['username']."&nbsp;&nbsp;&nbsp;&nbsp;".$row['update_time']."</div>";
				echo "<div>".$row["content"]."</div>";
			}
		?>
    </body>
</html>