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

$stmt = $db->prepare("SELECT id, name, tags_count FROM so_badges WHERE name LIKE  ? LIMIT 10");
$stmt->execute(["%$badge%"]); 

$result = $stmt->fetchAll(); 

$has_file = [];
foreach ($result as $key => $value) {
	if(file_exists($file = __DIR__ . '/badges/' . $value['name'] . '.svg')){
		$has_file[] = ["name" => $value['name'], "src" => file_get_contents($file)]; 
	}
}

if($has_file){
	echo json_encode($has_file);
}