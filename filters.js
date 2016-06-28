
// checking dom elements for active filters, 
// sending filters to php, 
// retrieving json containing 'in' and 'out' ids based on project attributes,
// then setting 'in' projects to visible and 'out' to invisible
function updateFilters(condition){
// $('html').css('background-image','url("backtiles.gif")');
$('.rauschenberg').css('display','inline');

// $('.project.container.super').css('display','none');

	var typeFilter = [];
	$(".filters").find(".type.active").each(function(){ typeFilter.push(this.id)});
	var keywordFilter = [];
	$(".filters").find(".keyword.active").each(function(){ keywordFilter.push(this.id)});

	console.log('filter applied: ' + keywordFilter);
	// console.log(keywordFilter);

	$.ajax({ 
		type: "GET", 
		url: "filter.php", 
		data: {
			type:  typeFilter,
			keywords: keywordFilter

		}

		, 
 // dataType: "json",     // change
 error: function (request, error) {
        console.log(error);
     },
 success: function(filtered) { 
 	filtered = $.parseJSON(filtered)
 	console.log(filtered);

 

 	window.setTimeout(function(){
 			 	for (var i = filtered['in'].length - 1; i >= 0; i--) {
 		$('#project' + filtered['in'][i]).css('display','inline');
 		
 	
 	}
for (var i = filtered['out'].length - 1; i >= 0; i--) {
 		console.log(('#project' + filtered['in'][i]));
 		// $(('#project' + filtered['in'][i])).css('visibility','visible');
 		$(('#project' + filtered['out'][i])).css('display','none');
 	}
 	// $('html').css('background-image','none');
 		$('.rauschenberg').css('display','none');
 	


}, 400)
 	


 } 
});	



}



// toggle 'active' class in filters when clicked. 
// distinguishes between filter groups,
// and decides if filters can be applied together or only exlusively within a certain group
// (e.g. only one "type" filter can be selected but multiple "keyword" filters.)
// non exclusive group buttons send nonexisting group name (e.g. String "nonExclusiveGroup") as exclusiveGroup parameter
function clickFilterButton(id,exclusiveGroup){


// if(//if clicked button is not active:
// !$('#'+id).hasClass('active')){
// 	$('.'+exclusiveGroup).removeClass('active');
// 	$('#'+id).toggleClass('active');

// }else{//if clicked button is already active:
// 	$('#'+id).toggleClass('active');
// 	$('.'+exclusiveGroup).removeClass('active');
// }
// }else{//if clicked button is already active:
// 	$('#'+id).toggleClass('active');
// 	$('.'+exclusiveGroup).removeClass('active');
// }
if(//if clicked button is not active:
$('#'+id).hasClass('active')){

	$('.filter').removeClass('active');
	$('#removefilters').addClass('active')
}else{
	$('.filter').removeClass('active');
	$('#'+id).addClass('active');
}
// if(id=='removefilters'){
// 		$('.filter').removeClass('active');

// }

updateFilters();

}

function removeAllFilters(){
$('.filter.button.active').removeClass('active');
updateFilters(function(){$('#removefilters').addClass('active');
})
}




