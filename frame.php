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

	<script type="text/javascript">
		



	</script>




	<title>Projects</title>


</head>
<body>
<div id="footer-cover-div">
<div style="position:relative;left:10%;width: 80%;padding-top: 10%;padding-bottom: 10%">
		<div id="placeholder" style="position: relative;height:30px;width: 100%"></div>

	<div id="content" style="text-align: left;">
		<!-- <div id="headline" class="grid"><?php //include_once('head.php') ?></div> -->
		<div id="nav" class="grid"><?php include_once('nav.php') ?></div>
		<div id="placeholder" style="position: relative;height:70px;width: 100%"></div>
		<div id="main filters" class="grid"><?php include_once('main.php') ?></div>
		<div id="foot" class="grid"><?php //include_once('foot.php') ?></div>
	</div>
	</div>
</div>
<div class="footer">
<div style="padding:30px;text-align:center">
<img src="./eye-mini.gif" onclick="rotatethings()" width="50px" height="50px" style="cursor:none" >
</div>
</div>

</body>
</html>
<?php $_SESSION['loaded'] = true ?>

<?php if (!isset($_SESSION['loaded'])) { if($_SESSION['loaded'] != true){ ?>

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
	"<div id='loadcounter' style='text-align:center; position:fixed; z-index:1000; bottom: 20%;left: 0%;width:100%;height:20%; color:#FFFFFF;padding:5px;background-color:black;font-size: 15px; font-family: monospace"
	 + '"'
	 + "'Courier New', 'Courier', 'monospace'"
	 + '"'
	 + "></div>");

	bodycomplete = $('#content').html();
	bodynow = "";
	timeout = 50;	 //milliseconds
	duration = 200000000; //milliseconds
	charGroupSize = timeout * bodycomplete.length / duration
	charGroupSize = 5;

	addletter(bodynow,bodycomplete);

	function addletter(now,original){
console.log(charGroupSize);
			
		// add a few letters; check every time if still relevant
		for (var i = 0; i <= charGroupSize; i++) {
						// charGroupSize = timeout * bodycomplete.length / duration ;
			charGroupSize = 1000;
			if(now.length < original.length){
				now =  original[original.length-now.length-1] +(now || '');
			$('#content').html(now);
			$('#loadcounter').html('writing source <br>' + now.length + " / " + original.length);

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


<?php }} ?>

<?php $_SESSION['loaded'] = true ?>

<!-- 
trigger something when page bottom is reached:
<script type="text/javascript">
console.log('test');
$(window).scroll(function(){
    if ($(window).scrollTop() + $(window).height() >= $(document).height() - 300){
  console.log("bottom of the page reached!");
  loaded[pages[current+1]] = loaded[pages[current+1]] + 1; 
    
        if(loaded[pages[current+1]] <= 1)
             loadMoreContent(current+1);
    }
});

</script> -->
<script type="text/javascript">
function rotatethings(){
	console.log(Math.random() * 3600 *2 -(3600/2))
		$('*').not( "body" ).css('overflow','visible');
		// $( "body" ).css('overflow','scroll');
		$( "html" ).css('overflow','scroll');

	// $('*').css('-webkit-transition','transform 15s  cubic-bezier(0.6, -0.28, 0.735, 0.045)	');
		$('*').not( "body" ).css('-webkit-transition','transform 15s  ease-in	');
		$('*').not( "body" ).css('-webkit-transform-origin','50%,50%');




	$('*').not( "body" ).css("-webkit-transform", function () {
  var rand = (Math.random() * 3600*2) -(3600);
  return 'rotate('+rand/10+'deg) translate(0px,'+rand/100+'px)';  
});
}
</script>
