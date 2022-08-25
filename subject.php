<?php 

include 'php/server.php';

if (isset($_GET["logout"])) {
    session_destroy();
    echo "<script>alert('ไว้เจอกันใหม่นะคะ'); window.location = 'login.php'</script>";
  }

  //all
  $queryall = "SELECT * FROM subject";
  $resultall = mysqli_query($con, $queryall);

//check reg
  $student_id = $_SESSION['student_id'];
  
  $register = "SELECT * FROM subject_register WHERE student_id = $student_id";
  $resultreg = mysqli_query($con, $register);
  
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
				  <?php if (mysqli_num_rows($resultreg)) { 
				  	$student = mysqli_fetch_array($resultreg); 
				  	$namesub = mysqli_fetch_array($resultall);
				  ?>
				  <div class="card-body">
				  		<div> คุณ <?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?> ได้ทำการเลือกวิชาเพิ่มเติมของวิชา <?php echo $namesub['subject_name'] ?> ไปแล้ว</div>
				  </div>
				  <?php } ?>
				<?php if (!mysqli_num_rows($resultreg)) { ?>
					<div class="card-body">
				    <div class="">เลือกวิชาลงทะเบียนเลือกวิชาเพิ่มเติม</div>
				    <form class="form mt-1" action="php/subject_db.php" method="POST">
				    	<select class="form-select" aria-label="Default select example" name="sub">
  							<option selected>Open this select menu</option>
							    <?php
									while ($row = $resultall->fetch_assoc()) {
								?>
								<option value="<?php echo $row['subject_code'];?>"><?php echo $row['subject_name']?> </option>
								<?php } ?>
							</select>
				    	<button type="submit" name="submit" class="btn btn-success w-100 mt-2"> ยืนยัน </button>
				    </form>
				    </div>
				<?php } ?>



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