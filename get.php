<?php 
if(!$_GET || !isset($_GET['badge']) || empty($_GET['badge'])) exit(); 

$badge = $_GET['badge'];

if(!file_exists(__DIR__ . '/conf.php')){
	$db = 'badge_link';
	$user = 'root'; 
	$pass = ''; 
}else{
	require __DIR__ . '/conf.php'; 
}

$db = new \PDO("mysql:host=localhost;dbname=$db;charset=utf8mb4", "$user", "$pass", [
	PDO::ATTR_EMULATE_PREPARES => false, 
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
); 

$stmt = $db->prepare("SELECT name FROM so_badges WHERE name = ? LIMIT 1");
$stmt->execute([$badge]); 

$result = $stmt->fetchAll(); 

if($result){
	if(file_exists($file = __DIR__ . '/badges/' . $badge . '.svg')){
		echo file_get_contents($file); 
	}
}