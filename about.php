<?php
// set session save path // set permission to 0600 for files // DANGER >>>> sessiondata folder is on 777!!!
// session_save_path('0;0600;' . getcwd() . '/sessiondata');
session_start();
$_SESSION['projects'] =json_decode(file_get_contents('./projects.json'))->projects;
?>


<!DOCTYPE html>
<html>
<head>
	<?php include_once('import.php') ?>
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>About</title>


</head>
<body>
<a href="./frame.php"><div class="corner top-right"><div id="cornercontent">all<br>projects</div></div></a>
			<div id="placeholder" style="position: relative;height:40%;width: 100%;position: relative;"></div>

	<div id="content" style="text-align: left;">

		<!-- <div id="headline" class="grid"><?php// include_once('head.php') ?></div> -->
		<div class="grid">
			<div class="unit whole">  </div>
		</div>
<!-- 		<div id="nav" class="grid"><?php //include_once('nav.php') ?></div> -->
		<!-- <div id="main filters" class="grid"><?php //include_once('main.php') ?></div> -->
		<!-- <div id="foot" class="grid"><?php //include_once('foot.php') ?></div> -->

	<div class="grid"><div class="unit whole"> <b>This site is under construction.</b>
	<br>This is the portfolio of Martin Barner, Research Assistant at the Centre for Advanced Spatial Analysis at UCL.
	<br><div id="ad"></div>

<NOSCRIPT>
    Email address protected by JavaScript.<BR>
    Please enable JavaScript to contact me.
</NOSCRIPT>
	</div></div>
	</div>
</body>
</html>



<SCRIPT TYPE="text/javascript">
<!-- 
// protected email script by Joe Maller
// JavaScripts available at http://www.joemaller.com
// this script is free to use and distribute
// but please credit me and/or link to my site

e='gmail.com'
emailE=('barner.mar' + "" + '@' + e);
$('#ad').html('<A href="mailto:' + emailE + '">' + emailE + '</a>');

 //-->
</script>




<?php // if (!isset($_SESSION['loaded'])) { if($_SESSION['loaded'] != true){ ?>

<script type="text/javascript">

	function makeclick(){
		$('.container').click(function(){
		$(this).css('overflow','hidden');
		// $(this).css('visibility','hidden');
		$(this).find('*').css('visibility','hidden');
		$(this).animate({'width':"1px"},50);
		$(this).animate({'height':"1px"},50);

		// $(this).animate({'height':"1px"},100);
	})

	}



$('body').append(
	"<div id='loadcounter' style='text-align:center; position:fixed; z-index:1000; bottom: 0%;left: 0%;width:100%;height:20%; color:#FFFFFF;padding:5px;background-color:black;font-size: 15px; font-family: monospace"
	 + '"'
	 + "'Courier New', 'Courier', 'monospace'"
	 + '"'
	 + "></div>");

	bodycomplete = $('#content').html();
	bodynow = "";
	timeout = 20;	 //milliseconds
	duration = 2000; //milliseconds
	charGroupSize = timeout * bodycomplete.length / duration
	addletter(bodynow,bodycomplete);

	function addletter(now,original){
		// add a few letters; check every time if still relevant
		for (var i = 0; i <= charGroupSize; i++) {
			if(now.length < original.length){
				now =  original[original.length-now.length-1] +(now || '');
			$('#content').html(now);
			$('#loadcounter').html('<br>' + now.length + " / " + original.length);

			}
		}

		if(now.length < original.length){
			setTimeout(function(){
			addletter(now,original)},timeout);

			}else{
			$('#loadcounter').remove();
				console.log('done loading source');

		}
	}




// complete in x seconds
// wait w milliseconds between set of n chars
// N chars in total
// 1sec = w * N / n 
// n = w * N / 1000

// 100
</script>


<?php //}} ?>









<?php $_SESSION['loaded'] = true ?>