<?php
// set session save path // set permission to 0600 for files // DANGER >>>> sessiondata folder is on 777!!!
// session_save_path('0;0600;' . getcwd() . '/sessiondata');
echo var_dump(getcwd() . '/sessiondata');
session_start();
?>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo json_encode($_SESSION);
?>
<!DOCTYPE html>
<html>
<body>



</body>
</html>