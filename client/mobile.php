<!DOCTYPE html>
<html>
<head>
<script>
function login(){
	//window.location = document.referrer;
	window.location.href = 'loginM.php';
}
</script>
</head>
<body>
	<?php
		echo '<script type="text/javascript"> login(); </script>';
	?>
</body>
</html>