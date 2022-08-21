<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Husarasin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body style="border-color: #514880;">
    <?php include 'php/navbar.php'; ?>
        <div class="container my-3">
            <div class="row">
                <div class="col-md align-self-center text-center my-2">
                    <h2 style="color: #514880;">Husarasin High School</h2>
                    <p class="w-lg-50" style="color: #514880;">โรงเรียนมัธยมปลายฮุสราศิลป์</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-md-4 col-md-6">
                    <div class="card">
                        <div class="card-body d-flex flex-column align-items-center mt-4">
                            <form class="text-center" method="POST" action="php/login_db.php">
                                <div class="mb-3"><input class="form-control" type="text" name="student_id" placeholder="ใส่เลขประจำตัวนักเรียน" /></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="ใส่รหัสผ่านของนักเรียน" /></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: #514880;">เข้าสู่ระบบ</button></div>
                                <p class="text-muted">หากลืมรหัสผ่านกรุณาติดต่อแอดมิน</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>