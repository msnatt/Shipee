<!DOCTYPE html>
<?php include "header.html";
session_start();
$_SESSION['message'] = "Registration successful!";
$message = $_SESSION['message'];
?>

<body>
    <!-- Pop-up Modal -->
    <!-- <div id="popup" class="popup">
        <p id="popupMessage"></p>
        <button onclick="closePopup()">Close</button>
    </div> -->
    <div id="popup" class="toast popup show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="justify-content-center row align-content-center">
            <p id="popupMessage" class="col-10" style="margin: 0;">This is a custom popup message!</p>
            <button type="button" class="btn-close col-2" onclick="closePopup()" aria-label="Close"></button>
        </div>
    </div>




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