<?php
session_start();
if(!isset($_SESSION['admin'])){header('Location: login.php');exit;}
?>
<h2>لوحة التحكم</h2>
<form method="post" enctype="multipart/form-data" action="upload.php">
<input type="file" name="file">
<button>رفع ملف</button>
</form>
<a href="logout.php">خروج</a>
