<?php 
// verifying the login data

// Connecting to database
include_once('connection.php'); 

function test_input($data) { 
	
	$data = trim($data); 
	$data = stripslashes($data); 
	$data = htmlspecialchars($data); 
	return $data; 
} 

if ($_SERVER["REQUEST_METHOD"]== "POST") { 
	
	$adminname = test_input($_POST["adminname"]); 
	$password = test_input($_POST["password"]); 
	$stmt = $conn->prepare("SELECT * FROM adminlogin"); 
	$stmt->execute(); 
	$users = $stmt->fetchAll(); 
	
	foreach($users as $user) { 
		
		if(($user['adminname'] == $adminname) && 
			($user['password'] == $password)) { 
				header("Location: adminpage.php"); 
		} 
		else { 
			echo "<script language='javascript'>"; 
			echo "alert('WRONG INFORMATION')"; 
			echo "</script>"; 
			die(); 
		} 
	} 
} 
	$m = $_POST["adminname"];
	$a = 'Yes';
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "login";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO attendence (adminname,attended) VALUES ('$m','$a')";

    $conn->close();
?> 
