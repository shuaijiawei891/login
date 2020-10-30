<?php
include_once('../my_database.php');
//var_dump($_POST);
$uname=$_POST['myname'];
$upassword=$_POST['password'];
$usex=$_POST['sex'];
$ubirthday=$_POST['birthday'];
$uaddress=$_POST['address'];

$stmt = $conn->prepare("insert into user(name,password,sex,birthday,address) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$uname,$upassword,$usex,$ubirthday,$uaddress);
//var_dump($stmt->execute());
//if($conn->query($sql))
//	header('Location:http://10.2.53.36/phpweb/php_2/my_database/myda.php?name='.$name);
//	else
//	echo'error:'.$conn->error;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <!-- 引入重置样式和rem -->
    <style type="text/css">
    	body{
				background-image: url(https://s1.ax1x.com/2020/10/29/BJE9aR.jpg);
				/*background-size:100% 100%;
				 background-repeat:no-repeat;*/
				background-attachment:fixed;
				background-repeat:no-repeat;
				background-size:cover;
				-moz-background-size:cover;
				-webkit-background-size:cover;
				position: relative;
			}
    	#app{
    		position: absolute;
    		right: 500px;
    		top: 260px;
    		width: 500px;
    		padding: 20px;
    		background-color: white;
    		text-align: center;
    	}
    </style>
  </head>
  <body>
    <div id="app">
    	您的用户名为：<?php echo $_POST['myname']; ?><br />	
    	您的密码是：<?php echo $_POST['password']; ?><br />
    	您的性别是：<?php echo $_POST['sex']; ?><br />
    	您的生日是：<?php echo $_POST['birthday']; ?><br />
    	您的地址是：<?php echo $_POST['address']; ?><br />
    	您已注册成功 请返回 <a href="../denglu.html">登录</a>
    </div>
  </body>
</html>