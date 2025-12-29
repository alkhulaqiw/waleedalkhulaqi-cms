<?php
session_start();
if(!isset($_SESSION['admin'])) exit;
if(!is_dir('../uploads')) mkdir('../uploads');
move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$_FILES['file']['name']);
header('Location: dashboard.php');
