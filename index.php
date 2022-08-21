<?php
	if (isset($_GET["logout"])) {
    session_destroy($_SESSION['firstname']);
    echo "<script>alert('ไว้เจอกันใหม่นะคะ'); window.location = 'login.php'</script>";
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Husarasin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php include 'php/navbar.php'; ?>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>