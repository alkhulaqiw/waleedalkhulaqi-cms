<?php
session_start();
include('../config.php');
if($_POST){
if($_POST['user']==ADMIN_USER && hash('sha256',$_POST['pass'])==ADMIN_PASS){
$_SESSION['admin']=true;
header('Location: dashboard.php');
exit;
}}
?>
<form method="post">
<input name="user" placeholder="اسم المستخدم">
<input type="password" name="pass" placeholder="كلمة المرور">
<button>دخول</button>
</form>
