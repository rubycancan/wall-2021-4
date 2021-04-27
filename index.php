<?php
    header('content-type:text/html;charset=utf-8');
    date_default_timezone_set('PRC');
    //连接数据库
    $mysqli = @new mysqli('localhost','root','root','wishing_wall');
    $wishes = array();
    //获取数据
    if (! $mysqli->connect_error) {
        $mysqli->query('set names utf8');
        $result = $mysqli->query('SELECT * FROM wishes');
        if($result) {
            $wishes = $result->fetch_all(MYSQLI_ASSOC);
        }
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>许愿墙</title>
	<link rel="stylesheet" href="./Css/index.css" />
	<script type="text/javascript" src='./Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='./Js/index.js'></script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	<div id='main'>
        <?php $i=1; foreach ($wishes as $wish):?>
		<dl class='paper <?php echo $wish['color']; ?>' >
			<dt id="one">
				<span class='username'><?php echo $wish['name'] ?></span>
				<span class='num'>No.0000<?php echo $i; $i++;?></span>
			</dt>
			<dd class='content' id="two"><?php echo $wish['content'];?></dd>
			<dd class='bottom' id="three">
				<span class='time'><?php echo date('Y-m-d H:m:i',$wish['timestamp']) ?></span>
				<a href="delete.php?id=<?php echo $wish['id']?>" class='close'></a>
			</dd>
		</dl>
        <?php endforeach;?>
<!--		<dl class='paper a2'>-->
<!--			<dt>-->
<!--				<span class='username'>慕课网</span>-->
<!--				<span class='num'>No.00001</span>-->
<!--			</dt>-->
<!--			<dd class='content'>大家要好好学习PHP语言哦！</dd>-->
<!--			<dd class='bottom'>-->
<!--				<span class='time'>今天08:30</span>-->
<!--				<a href="" class='close'></a>-->
<!--			</dd>-->
<!--		</dl>-->

<!--[if IE 6]>

    <script type="text/javascript" src="./Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>

<![endif]-->

</body>
</html>
