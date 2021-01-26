<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>reg</title>
    </head>
    <body>
    	<style>
    		*{
    			margin: 0;
    			padding: 0;
    		}
    		body{
    			background-image: url(img/dlbgimg.jpg);
    			background-size: cover;
    		}
    		#dl{
    			width: 380px;
                height: 400px;
                background-color:aliceblue;
                opacity: 0.85;
                position: absolute;
                left: 131px;
                top: 163px;
                border-radius: 20px;
                padding-top: 40px;
                padding-left: 40px;    		
            }
            input[type=text]{
                width: 150px;
                height: 25px;
                border-radius: 3px;
                margin-top: 40px;

            }
            input[type=password]{
                width: 150px;
                height: 25px;
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
    	<div id="dl">
        <form action="reg.php" method = "post">
        	<p style="margin-left: 133px;"><span style="font-size: 30px;">欢迎登陆</span></p>
        	<table style="margin-left: 6px;">
       <tr> <td>用户名：</td>
       	 <td><input type="text" name = "username"></td></tr>
         <tr><td>密码：</td> 
         	<td><input type="password" name="userpass"></td></tr>
           <tr><td><input type="submit" name="sub" value = "登陆"></td> </tr></table>
        </form></div>
        <?php
            require "./conn.php";
            if(isset($_POST['sub'])) {
                $username = $_POST["username"];
                $userpass = $_POST['userpass'];
                $sql = "SELECT * FROM user WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($result);
                $fetch = mysqli_fetch_array($result);
                if(!empty($username) && !empty($userpass)) {
                    if($fetch != NULL) {
                        if($fetch["userpass"] == md5($userpass)) {
                            echo "<script>alert('登陆成功');</script>";
                            $_SESSION['username'] = $username;
							echo "<script>location.href='index.php'</script>";
                        } else {
                            echo "<script>alert('密码错误');</script>";
                        }
                    } else {
                        echo "<script>alert('用户名不存在');</script>";
                    }
                } else {
                    echo "<script>alert('不能为空');</script>";
                }
            }
        ?>
    </body>
</html>