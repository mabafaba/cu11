<div class="corner top-right"><a href="./frame.php"><div id="cornercontent">all<br>projects</div></a></div>

<?php
// set session save path // set permission to 0600 for files // DANGER >>>> sessiondata folder is on 777!!!
// session_save_path('0;0600;' . getcwd() . '/sessiondata');
session_start();
// check if projects are loaded already, and get if not
if(!isset($_SESSION['projects'])){
$_SESSION['projects'] =json_decode(file_get_contents('./projects.json'))->projects;
}
// get project path based on Session projects metadata
$ppath = './projects/' . $_SESSION['projects'][$_GET['id']]->wid . '/';
?>
<!DOCTYPE html>
<html>
<head>
<?php include_once('import.php') ?>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Projects</title>
</head>

<body>
<div style="position:absolute;left:10%;width: 80%;padding-top: 10%;padding-bottom: 10%">

<div id="content" style="text-align: right;">
	<!-- <div id="headline" class="grid"><?php //include_once('head.php') ?></div> -->
	<!-- <div id="nav" class="grid"><?php //include_once('nav.php') ?></div> -->
	<!-- <div id="projectnav" class="grid"><?php // include_once('./projectsnav.php'); ?></div> -->
	<div id="main" class="unit">
		<!-- include title from projects metadata -->
		<?php title($_SESSION['projects'][$_GET['id']]->title, 'golden-large','left') ?>
		<!-- include main image from project folder -->
		<!-- <?php //image($ppath . 'main.png','golden-small','') ?> -->

		<!-- include project.php from project folder  -->
		<?php include_once($ppath . '/project.php') ?>
	</div>
	
	<div id="foot" class="grid"><?php //include_once('foot.php') ?></div>
</div>
	</div>
</body>
</html>
