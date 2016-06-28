<?php
// set session save path // set permission to 0600 for files // DANGER >>>> sessiondata folder is on 777!!!
// session_save_path('0;0600;' . getcwd() . '/sessiondata');
session_start();
?>
 <?php 

// echo json_encode($_GET['keywords']);
// echo json_encode($_SESSION['projects'][3]->keywords);
// echo json_encode(array_diff($_GET['keywords'], $_SESSION['projects'][0]->keywords));
$in = [];
$out = [];


if(in_array('all', $_GET['keywords']) | in_array('removefilters', $_GET['keywords'])){
echo json_encode(array('in' => range(0, count($_SESSION['projects'])-1), 'out'=>array()));
}else{
for ($i=0; $i < count($_SESSION['projects']); $i++) { 
// array_diff(arr1,arr2) returns all values in arr1 that are not contained in arr2 
// array_push($in, [$_GET['type'][0],$_SESSION['projects'][$i]->type]);



// TYPE
if(// if no type filter is on, set to passed:
	!isset($_GET['type'])){
$typePassed=true;
 }else{//otherwise check if type is identical
if($_GET['type'][0]==$_SESSION['projects'][$i]->type){
$typePassed=true;
}else{$typePassed=false;
}
}


// // KEYWORD
// if(is_null($_GET['keywords'])){
// 	$keywordsPassed=true;
// }else 
	$countDiff = array_diff($_GET['keywords'], $_SESSION['projects'][$i]->keywords);
	if(is_null($countDiff)){
		$keywordsPassed=false;
		// echo json_encode('   pass:null  ');
	}else if(count($countDiff)==0){
		$keywordsPassed=true;
		// echo json_encode('   pass:length 0   ');
	}else{$keywordsPassed=false;
		// echo json_encode('   no pass: else');
	}
// else if(is_string($_GET['keywords'][0])){
// 	$countDiff = array_diff([$_GET['keywords'][0]], $_SESSION['projects'][$i]->keywords);
// 	if(is_null($countDiff)){
// 		$keywordsPassed=true;
// 	}else{$keywordsPassed=false;}
	

// }

// echo json_encode($keywordsPassed);


// $CountfilterKeywordsNotInProjectData = array_diff($_GET['keywords'], $_SESSION['projects'][$i]->keywords);
// echo json_encode([$_GET['type']]);
// echo json_encode($_SESSION);
if ($keywordsPassed & $typePassed) {
array_push($in, $i);
}else{
array_push($out, $i);
}
}
// [$_GET['keywords'],$_SESSION['projects'][0]->keywords]
echo json_encode(array('in'=>$in,'out'=>$out));
// echo '}';	


}
?>