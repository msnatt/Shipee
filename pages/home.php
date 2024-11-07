<?php
$tile = "home";
$aboutpage1 = "about";
?>

<?php include 'compo/head.php'?>
<div>
    <?php echo $tile?>
    <input type="button" value="about" onclick="location.href='<?php echo $aboutpage1?>'"/>
</div>