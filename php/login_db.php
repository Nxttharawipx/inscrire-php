<?php
    include 'server.php';

    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    $querylog = "SELECT * FROM student WHERE student_id = '$student_id' AND password = '$password' ";
    
    $resultlog = mysqli_query($con, $querylog);

    while ($row = $resultlog->fetch_assoc()) {
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname']; 
    }

    if (mysqli_num_rows($resultlog)) {
        echo "<script>alert('ยินดีต้อนรับนักเรียนเข้าสู่ระบบ'); window.location = '../index.php'</script>";
    } else {
        echo "<script>alert('เลขประจำตัว หรือ รหัสผ่านของนักเรียนไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง'); window.location = '../login.php'</script>";
    }
?>