<?php   
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbName = "Compar";

try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbName.";", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

Function GetRecentie($conn){
    $stmt = $conn->prepare("SELECT * FROM recentie");
	$stmt->execute();
	$content = $stmt->fetchAll();
	return $content;
}
function InsertDescriptie($conn,$data){
    $stmt = $conn->prepare("INSERT INTO `recentie` (id,Name,Recentie) VALUES(null,:Name,:Recentie)");
    $stmt->execute([':Name'=>$data['Name'], ':Recentie'=>$data['Recentie']]);
    return $data;
}
function InsertMail($conn,$data){
    $stmt = $conn->prepare("INSERT INTO `Mail` (`mail`, `Name`, `ID`,`Descriptie`) VALUES (:mail,:Name,Null,:Descriptie)");
    $stmt->execute([':Name'=>$data['Name'], ':mail'=>$data['mail'] , ':Descriptie'=>$data['Descriptie']]);
}


?>