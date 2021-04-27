<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
//检验是否有表单提交
if(!isset($_POST['submit'])) {
    echo '<script>alert("没有填写心愿表单，请到许愿页面填写心愿表单!");location.href="wish.php"</script>';
    exit;
}
//获取POST表单传上来的数据
$name = trim($_POST['name']);
$color = trim($_POST['color']);
$content = trim($_POST['content']);
$code = trim($_POST['code']);
$recode = trim($_POST['recode']);

if (! $name) {
    echo '<script>alert("署名不能为空，请重新填写!");location.href="wish.php"</script>';
}

if (!$color) {
    $color = 'a1';
}

if (! $content) {
    echo '<script>alert("愿望不能为空，请重新填写");location.href="wish.php"</script>';
}

if (! $code || $code !== $recode) {
    echo '<script>alert("验证码不正确，请重新填写");location.href="wish.php"</script>';
}

$timestamp = $_SERVER['REQUEST_TIME'];
$sql = "INSERT INTO `wishes`(`name`,`content`,`color`,`timestamp`) VALUES('{$name}','{$content}','{$color}','{$timestamp}')";
$mysqli = @new mysqli('localhost','root','root','wishing_wall');
if (! $mysqli->connect_error) {
    $mysqli->query('set names utf8');
    $result = $mysqli->query($sql);
    if($result) {
        echo '<script>alert("许愿成功！");location.href="index.php"</script>';
    } else {
        echo '<script>alert("许愿失败，请重新许愿！");location.href="wish.php"</script>';
    }
}