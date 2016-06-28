<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="./grid.css"> -->
<link rel="stylesheet" href="../../style.css">
<title>Forest</title>
</head>
<body style="margin:0px;padding: 0px;font-family: monospace;">
<div class="corner top-right"><a href="../../frame.php"><div id="cornercontent">all<br>projects</div></a></div>

<div id="loading" style="padding:30px;">loading high resolution image<div id="wait">...</div></div>
<img class="imgbig" src="./allforest.jpg" style="position: absolute; visibility:hidden;" onclick="toggleImageSize()">
</body>
</html>


<script type="text/javascript">


var dots = window.setInterval( function() {
    var wait = document.getElementById("wait");
    if ( wait.innerHTML.length > 3 ) 
        wait.innerHTML = "";
    else 
        wait.innerHTML += ".";
    }, 300);





var page = $("html, body");
page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
       page.stop();
   });

$(window).on("load", function(){
	     $('body,html').animate({scrollTop: 4600}, 1); 
$('#loading').css('display','none');

$('img').css('visibility','visible');

$('body,html').animate({scrollLeft: 4100}, 25800);

});


function toggleImageSize(){
$('img').toggleClass('imgbig');
$('img').toggleClass('imgsmall');
// $('.imgbig').css('height','4600px');
}




</script>


<style type="text/css">
	

.imgbig{
width: 4600px;
height: 4600px;
}

.imgsmall{
width: 100%;
height: auto;
}


</style>