<?php 

function project($id,$title,$description,$imgurl,$url="",$onclick=""){
$ppath = './projects/' . $_SESSION['projects'][$id]->wid . '/';

if(file_exists($ppath . 'main.png'))  {
$mainname = 'main.png';
}else if(file_exists($ppath . 'main.gif')){
$mainname = 'main.gif';
}
// echo json_encode($mainname);


	?>
	<div class=" unit w-1-3 project container super" onclick="<?php echo $onclick ?>" id='<?php echo 'project' . $id ?>'>
	
		<div class="unit project box <?php echo $_SESSION['projects'][$id]->type; ?>">
		<div class='rauschenberg' style="display: none;z-index:50000;position: absolute; top:0px;left:0px;width: 100%;height: 100%; background-image:url('backtiles.gif')">
	</div>
		<?php if ($url==""){ ?>
			<a href="./projects.php?id=<?php echo $id; ?>">
			
		<?php }else{?>
			<a href="<?php echo ( $url); ?>">
		
		<?php } ?>
				<div style="position: relative;width: 100%">
				<div class="unit whole hh2 center" style="height:3em;">
					<div style="padding: 5px;"><?php echo $title; ?></div>
				</div></div>
				<div class="unit whole project image container">
					<!-- extra blank div: padding-bottom trick requires child to be absolute; that makes position relative to containing box istead of content box; padding of parent would be ignored; blank div has has parents content box as containing box, fixing the issue. -->
					<div style="position: relative;width: 100%;height: 100%; background-image:url('backtiles.gif')">
					<div class="image-container"><img class="project image img" src="<?php echo $ppath . $mainname ?>"></div>
					</div>
				</div>
				<div class="unit whole regular" style="padding: 10px;height:8em;overflow: scroll;">
					<?php echo $description ?>
				</div>
			</a>

		</div>
	</div>


	<?php } ?>




<?php function title($title, $columns = 'whole',$align = 'center'){ ?>

	<div class="unit <?php echo $columns ?> hh1" style='text-align: <?php echo $align ?>'><?php echo $title ?> </div><br>

<?php } ?>




<?php 
function image($path, $columns,$description){
?>
<div></div>
	<div class="unit <?php echo $columns ?> image container"> 
	<div class="unit whole">
		<img class="project image" src="<?php echo $path ?>">
	</div>
	<div class="unit whole regular"><?php echo $description ?></div>
	</div>
 <?php } ?>
  



<?php 
function text($text,$columns = 'whole',$align = 'left'){
?>
	<div class="unit <?php echo $columns ?> regular <?php echo $align ?> "> 
		<?php echo $text ?>
	</div>

	</div>





 <?php } ?>
  
