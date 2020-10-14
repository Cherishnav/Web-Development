//Connetion of your Database.
<?php
$name = $_POST['Unam'];
$pass = $_POST['Pass'];
$servername = "localhost";
$username = "root";
// password of your databse. If not set, leave it empty.
$password = "";
// database name
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Inserting data to your database
// Replace "adminlogin" with table name
// Replace "adminname" with row name
// Replace "password" with row name
$sql = "INSERT INTO adminlogin (adminname, password)
VALUES ('$name', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


// sending welcome mail
if (isset($_POST['sendMailBtn'])) {
    $fromEmail = 'YOUR MAIL ID';
    $toEmail = $_POST['toEmail'];
    $subjectName = 'Welcome';
    $message = 'Hi,'.$_POST['name'];

    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div>
                 '.$message.'<br/>
                    <h1>Thank you for registering with us.</h1></br>
                    We wish to fulfil your goals.</br>
                    Regards.<br/>
				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Thank you for registering with us!")</script>';
    echo '<script>window.location.href="Login Page.php";</script>';
}
?>
