

<a href="about.php"><div class="corner top-right"><div id="cornercontent">about</div></div></a>

<?php
for ($i=0; $i < count($_SESSION['projects']); $i++) { 


// project($id,$title,$description,$imgurl)
project(
	$i,
	$_SESSION['projects'][$i]->title,
	$_SESSION['projects'][$i]->description,
	$_SESSION['projects'][$i]->imgurl,
	$_SESSION['projects'][$i]->url,
	$_SESSION['projects'][$i]->onclick

	);
}
 ?>
<div></div>



<!--  	<script type="text/javascript">
	
$('.container').hover(
function(){
	
	$(this).removeClass('w-1-5');
	$(this).addClass('w-1-1');
},
function(){
$(this).removeClass('w-1-1');
$(this).addClass('w-1-5');
}
);
</script>
 -->