<?
require 'sistem/class_lib.php';
$page='login';
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
$sistemUtama = new Sistem();
$sistemUtama->mulai($page);
$src = 'tampilan/page/'.strtolower($page).".php";
if (file_exists($src)) {
	require $src;
}
else{
	echo "We're very sorry. The page you requested doesn't exist! Back to <a href='?page=home'>home</a>.";
}
?>