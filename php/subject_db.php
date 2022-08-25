<?php
    include "server.php";
    
        $name = $_SESSION['student_id'];
        $price = $_POST['sub'];

        $queryadd = "INSERT INTO subject_register (subject_code, student_id) VALUES ('$price', '$name')";
        $resultadd = mysqli_query($con, $queryadd) or die("try");
        
        if ($resultadd) {
            echo "<script>alert('เพิ่มเมนูสำเร็จ!!'); window.location = '../menu.php'</script>";
        }

?>