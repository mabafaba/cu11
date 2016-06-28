<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
	echo json_encode($_SESSION);
?>

</body>
</html>