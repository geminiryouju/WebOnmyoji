<?php
	include_once "../lib/define.php";
?>

<!DOCTYPE html>
<html>
	<?php include _lib."/header.php";?>
	<body>
		<!-- BG video -->
		<video autoplay muted loop id="myVideo" class="hidden-xs">
		  <source src="<?php echo _admin;?>/videos/video.mp4" type="video/mp4"> <!--link video-->
		</video>
		
		<?php include _lib."/menu.php"; ?>
		
		<!-- BG img in small screen -->
		<div class="visible-xs bg_img"></div>
		
	</body>
</html>