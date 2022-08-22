<nav class="navbar navbar-light navbar-expand-md py-3" style="background: #f2cc67;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php"><span style="color: #514880;">Husarasin</span></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="subject.php" style="color: #514880;">ลงทะเบียนวิชาเพิ่มเติม</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <?php if(isset($_SESSION['firstname'])) { ?>
                    <div class="navbar-text me-4" style="color: #514880;">
                        ผู้ใช้ : <?php echo $_SESSION['firstname']; ?>    <?php echo $_SESSION['lastname']; ?>
                    </div>
                    <a class="btn btn-danger" type="button" href="index.php?logout='0'">ออกจากระบบ</a>
                <?php } ?>
            </div>
        </div>
</nav>