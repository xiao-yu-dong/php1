<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>admin</title>
    </head>
    <body>
    	<style>
    		*{
    			margin: 0;
    			padding: 0;
    		}
    		body{
    			background-image: url(img/glyzuce.jpg);
    			background-size: cover;
    			color: #fff;
                font-size: 18px;
    		}
    		#aa{
                width: 25%;
                height: 40%;
                background-color: rgba(0,0,0,0.7);
                border-radius: 40px;
        		position: absolute;
        		left: 579px;
        		top: 200px;
                padding-top: 80px;
                padding-left: 50px;
    		}
            input[type='text']{
                width: 150px;
                height: 25px;
                border-radius: 6px;
            }
            input[type='password']{
                width: 150px;
                height: 25px;
                border-radius: 6px;
                margin-top: 15px;
            }
            input[type='submit']{
                width: 60px;
                height: 30px;
                border-radius: 6px;
                font-size: 17px;
            }
    	</style>
    	<div id="aa">
    		<p style="margin-left: 94px;"><span style="font-size: 30px; color: white;">管理员注册</span></p>
            <br>
        <form action="" method = "post"><table>
            <tr><td>管理员账号：</td><td><input type="text" name = "adminuser"></td></tr>
            <tr><td>密码：</td><td><input type="password" name = "adminpass"></td> </tr>
           <tr><td>确定密码：</td><td><input type="password" name = "valipass"></td></tr> 
            <tr><td><input type="submit" name = "sub" value = "注册"></td><td><a href="adminreg.php" style = "color: white">登录</a></td></tr>
         </table></form>
       </div>
        <?php
            require "./conn.php";
            if(isset($_POST['sub'])) {
                $adminuser = $_POST['adminuser'];
                $adminpass = $_POST['adminpass'];
                $valipass = $_POST['valipass'];
				$sqlc = "SELECT * FROM admin WHERE adminuser = '$adminuser'";
				$result = mysqli_query($conn, $sqlc);
				$row = mysqli_num_rows($result);
                if(!empty($adminuser) && !empty($adminpass)) {
					if($row <= 0) {
						if(strlen($adminuser) <= 10) {
							if(strlen($adminpass) <= 18) {
								if($adminpass == $valipass) {
									$date = date("Y-m-d H:i:s");
									$adminpass = md5($adminpass);
									$sql = "INSERT INTO admin(adminuser, adminpass, log_time) VALUES('$adminuser', '$adminpass', '$date')";
									$result2 = mysqli_query($conn, $sql);
									if($result2) {
										$_SESSION['adminuser'] = $adminuser;
										echo "<script>location.href='guangli.php'</script>";
										echo "<script>alert('登陆成功');</script>";
									} else {
										echo 0;
									}
								} else {
									echo "<script>alert('密码不一致');</script>";
								}
							} else {
								echo "<script>alert('密码长度不超过18位');</script>";
							}
						} else {
							echo "<script>alert('用户名长度不超过10位');</script>";
						}
					} else {
						echo "<script>alert('用户名已存在');</script>";
					}
                } else {
                    echo "<script>alert('不能为空');</script>";
                }
            }
        ?>
    </body>
</html>