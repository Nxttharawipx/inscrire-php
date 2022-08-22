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
	                <h2 style="color: #514880;">Register for additional subject</h2>
	                <p class="w-lg-50" style="color: #514880;">ลงทะเบียนวิชาเพิ่มเติม</p>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="card mt-2">
				  <div class="card-header text-center">
				    ลงทะเบียนเลือกวิชาเพิ่มเติมเพิ่มเติม
				  </div>
				  <div class="card-body">
				    <div class="">เลือกวิชาลงทะเบียนเลือกวิชาเพิ่มเติม</div>
				    <form class="form mt-1" action="php/subject_db.php" method="POST">
				    	<input type="hidden" name="" value="<?= $_SESSION['student_id']; ?>">

				    	<select class="form-select" aria-label="Default select example">
				    		<option selected>เลือกวิชา</option>
							<option value="1" name="">ระบําพัดจีน</option>
							<option value="2" name="">นาฏศิลป์ไทย</option>
							<option value="3" name="">นาฏศิลป์ในอาเซียน</option>
							<option value="4" name="">ดนตรีสากล</option>
							<option value="5" name="">ดนตรีไทย</option>
							<option value="6" name="">ศิลปะการออกแบบ</option>
						</select>
				    	<button type="submit" name="submit" class="btn btn-success w-100 mt-2"> ยืนยัน </button>
				    </form>
				  </div>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>