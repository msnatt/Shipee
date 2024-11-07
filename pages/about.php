<?php
$tile = "about";
$homepage1 = "home";
?>

<?php include 'compo/head.php'?>
<div>
    <?php echo $tile?>
    <input type="button" value="home" onclick="location.href='<?php echo $homepage1?>'"/>
</div>