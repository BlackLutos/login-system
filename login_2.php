<meta charset="utf-8">
<?php
session_start();
?>
<?php
function alert($alert) {
	echo"<script language=\"javascript\">";
    echo "alert('恭喜登入成功')"; 
    echo "</script>"; 
    return; 
}
$alert = '';
?>
<?php
function alert2($alert2) {
	echo"<script language=\"javascript\">";
    echo "alert('帳號或密碼錯誤')"; 
    echo "</script>"; 
    return; 
}
$alert2 = '';
?>
<?php
include 'config.php';
$user = $_POST['user'];
$pw = $_POST['pw'];
$sql = "SELECT * FROM `login` WHERE `user` = '{$user}'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if ($user != null && $pw != null && $row[1] == $user && $row[2] == $pw) {
	$_SESSION['user'] = $row[0];
	 header('refresh:0; url=index.php');
	 alert($alert);	
} else {
	header('refresh:0; url=login.php');
	alert2($alert2);
}
?>

