<?php
header('content-type:text/html;charset=utf-8');
$id = $_GET['id'];
$wishId = isset($id) && is_numeric($id) ? intval($id) : '';
if(!$wishId) {
    echo '<script>alert("参数非法，删除失败！");location.href="index.php"</script>';
}
$mysqli = @new mysqli('localhost','root','root','wishing_wall');
if(! $mysqli->connect_error) {
    $mysqli->query('set names utf8');
    $sql = "DELETE FROM `wishes` WHERE id={$wishId}";
    $result = $mysqli->query($sql);
    if($result) {
        echo '<script>alert("删除成功！");location.href="index.php"</script>';
    } else {
        echo '<script>alert("删除失败！");location.href="index.php"</script>';
    }
}