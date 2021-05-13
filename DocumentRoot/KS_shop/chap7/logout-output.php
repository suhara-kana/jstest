<?php session_start(); 
include_once '../../book/header.php'; 
require_once 'menu.php'; 

if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}

include_once '../../book/footer.php'; ?>