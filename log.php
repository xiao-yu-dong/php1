<?php session_start();?>
<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>log</title>
</head>
<body>
	<style>
    		*{
    			margin: 0;
    			padding: 0;
    		}
    		body{
    			background-image: url(img/zc.jpg);
    			background-size: cover;
    		}
    		#zc{
    			width: 380px;
    			height: 400px;
    			background-color:aliceblue;
    			opacity: 0.85;
    			position: absolute;
                left: 131px;
                top: 163px;
                border-radius: 20px;

    		}
            input[type=text]{
                width: 150px;
                height: 20px;
                border-radius: 3px;
                margin-top: 15px;
            }
            input[type=password]{
                width: 150px;
                height: 20px;
                border-radius: 3px;
                margin-top: 15px;
            }
            input[type=submit]{
                width: 100%;
                height: 40px;
                border-radius: 5px;
                margin-top: 20px;
            }
    	</style>
	<div id="zc">
		<p  style="margin-left: 133px;margin-top: 40px;"><span style="font-size: 30px;">欢迎注册</span></p>
    <form action="" method = "post">
    	<table style="margin-left: 60px;">
      <tr><td>用户名：</td><td><input type="text" name = "username"></td> </tr> 
        <tr><td>密码：</td><td><input type="password" name = "userpass"></td></tr>
       <tr><td>确定密码：</td> <td><input type="password" name = 'valipass'></td></tr>
       <tr><td><input type="submit" name = "sub" value="注册"></td> </tr>
  </table>  </form></div>
    <?php
        require "./conn.php";
        if(isset($_POST['sub'])) {
            $username = $_POST['username'];
            $userpass = $_POST['userpass'];
            $valipass = $_POST['valipass'];
            $sqlc = "SELECT * FROM user WHERE username = '$username'";
            $result1 = mysqli_query($conn, $sqlc);
            $row = mysqli_num_rows($result1);
            if(!empty($username) && !empty($userpass) && !empty($valipass)) {
                if($row <= 0) {
                    if(strlen($username) <= 10) {
                        if(strlen($userpass) <= 18) {
                            if($userpass == $valipass) {
                                $log_time = date("Y-m-d H:i:s");
                                $userpass = md5($userpass);
                                $sql = "INSERT INTO user(username, userpass, log_time) VALUES('$username', '$userpass', '$log_time')";
                                $result = mysqli_query($conn, $sql);
                                $_SESSION['username'] = $username;
								echo "<script>location.href='index.php'</script>";
                            } else {
                                echo "<script>alert('密码不一致');</script>";
                            }
                        } else {
                            echo "<script>alert('密码不能超过18位');</script>";
                        }
                    } else {
                        echo "<script>alert('用户名不能超过10位');</script>";
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


