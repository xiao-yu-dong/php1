<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>adminreg</title>
    </head>
    <body>
    	<style>
    		*{
    			margin: 0;
    			padding: 0;
    		}
    		body{
    			background-image: url(img/glydelu.jpg);
    			background-size: cover;
    			color: white;
    		}
    		#bb{
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
    	<div id="bb">
    		<p style="margin-left: 59px;"><span style="font-size: 25px;">管理员登录界面</span></p>
        <form action="" method = "post">
        	<table>
           <tr> <td>管理员用户名：</td><td><input type="text" name = "adminuser"></td></tr>
           <tr> <td>管理员密码：</td><td><input type="password" name = "adminpass"></td> </tr>
           <tr><td><input type="submit" name = "sub" value = "登陆"></td></tr>
       </table> </form></div>
		<?php
            require "./conn.php";
            if(isset($_POST['sub'])) {
                $adminuser = $_POST["adminuser"];
                $adminpass = $_POST['adminpass'];
                $sql = "SELECT * FROM admin WHERE adminuser = '$adminuser'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($result);
                $fetch = mysqli_fetch_array($result);
				echo $fetch[2];
                if(!empty($adminuser) && !empty($adminpass)) {
                    if($fetch['adminuser'] == $adminuser) {
                    	if($fetch[2] == md5($adminpass)) {
                    		$_SESSION['adminuser'] == $adminuser;
							echo "<script>alert('登录成功');location.href='./guangli.php'</script>";
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