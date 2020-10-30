<?php
include_once('my_database.php');
$sql="select name from user where name = '".$_POST['name']."'";
	$result = $conn->query($sql);
	if($result ->fetch_assoc() == NULL){$xianshi="none"; echo "该账号查无此信息";} 
	else {$xianshi=""; echo "";}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1 style="display:<?php echo $xianshi; ?>"  >您已经登录</h1>
		 <p style="display:<?php echo $xianshi; ?>"  >您的用户名为<?php echo $_POST['name']; ?> 您的密码是<?php echo $_POST['password']; ?></p>
		 
	</body>
</html>
