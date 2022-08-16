<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> ลงทะเบียนเลือกกิจกรรมเพิ่มเติม </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<div class="card mt-2">
				  <div class="card-header text-center">
				    ลงทะเบียนเลือกกิจกรรมเพิ่มเติม
				  </div>
				  <div class="card-body">
				    <!-- <div>เข้าระบบในนาม : <?php echo $_SESSION['firstname']; ?></div> -->
				    <div class="">เลือกวิชาลงทะเบียนเลือกกิจกรรมเพิ่มเติม</div>
				    <form class="form mt-1">
				    	<div class="form-check mt-2">
				    		<input type="radio" name="subject" class="form-check-input">
				    		<label class="form-check-label">
				    			คณิตศาสตร์
				    		</label>
				    	</div>
				    	<div class="form-check mt-2">
				    		<input type="radio" name="subject" class="form-check-input">
				    		<label class="form-check-label">
				    			ภาษาไทย
				    		</label>
				    	</div>
				    	<div class="form-check mt-2">
				    		<input type="radio" name="subject" class="form-check-input">
				    		<label class="form-check-label">
				    			ศิลปะ
				    		</label>
				    	</div>
				    	<div class="form-check mt-2">
				    		<input type="radio" name="subject" class="form-check-input">
				    		<label class="form-check-label">
				    			ดนตรี
				    		</label>
				    	</div>
				    	<div class="form-check mt-2">
				    		<input type="radio" name="subject" class="form-check-input">
				    		<label class="form-check-label">
				    			พละ
				    		</label>
				    	</div>
				    	<button type="submit" name="submit" class="btn btn-success w-100 mt-2"> ยืนยัน </button>
				    </form>
				  </div>
				</div>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="js/bootstarp.bundle.js"></script>
</body>
</html>