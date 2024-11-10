<!DOCTYPE html>
<html>

<?php include "header.html";
session_start();
?>

<body>
    <p>Login Page</p>
    <a href="Register.php">Register </a>
    <div class="container-fluid bg-height-vh">
        <div class="row">
            <div class="col-6 row bg-color-side-left justify-content-center bg-height-vh">
                <div class="bg-height-vh col-12 w-50 align-content-center">
                    <div class="container ">
                        <h3>Login</h3>
                    </div>
                    <div class="container">
                        <form class="form-horizontal" action="connectdb.php" method="post">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>

                            <label for="password">Password </label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <br>
                            <div class="row justify-content-end">
                                <button class="btn col-4 btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <!-- right contant -->
            </div>
        </div>
    </div>
    <div id="popup" class="toast popup show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="justify-content-center row align-content-center">
            <p id="popupMessage" class="col-10" style="margin: 0;">This is a custom popup message!</p>
            <button type="button" class="btn-close col-2" onclick="closePopup()" aria-label="Close"></button>
        </div>
    </div>
    <?php

    // เช็คว่า session มีข้อความหรือไม่
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']); // ลบข้อความหลังจากแสดงแล้ว
    } else {
        $message = "";
    }
    ?>
    <script>
        // ตรวจสอบว่ามีข้อความใน PHP ที่ส่งมาไหม 
        <?php if ($message != "") { ?>
            document.getElementById("popupMessage").innerText = "<?php echo $message; ?>";
            document.getElementById("popup").style.display = "block";
        <?php } ?>
        // ปิดpopup
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>

</html>