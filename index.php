<?php 

include 'php/server.php';

if (isset($_GET["logout"])) {
    session_destroy();
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
	<div class="position-relative py-4 py-xl-5">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 style="color: #514880;">Husarasin High School</h2>
                <p class="w-lg-50" style="color: #514880;">โรงเรียนมัธยมปลายฮุสราศิลป์</p>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
    <div class="row">
        <div class="col-md-8 col-xl-6 mx-auto p-4">
        		<hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<h4 style="color: #514880;">ลงทะเบียนวิชาเพิ่มเติม</h4>
		                	<p class="text-muted">นักเรียนฮุสราเข้ามาลงทะเบียนวิชาเพิ่มกันด้วยนาจาา</p>
			                <a href="subject.php">เลือกวิชาเพิ่มเติม</a>
		                	<!-- <img src="pic/pencil.png" width="50px" height="50px"> -->
		                </div>
		            </div>
		            <hr class="my-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div></div>
		            </div>
		        </div>
		    </div>
		</div>
		</div>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>