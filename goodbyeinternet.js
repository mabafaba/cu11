
// selfdestruct():
	// switches two characters in the html code
	// then waits for a random amount of time
	// then the function calls itself. The code keeps running until the page is closed.

// parameters:
	// mutationrate:
		// the maximum time in seconds to wait to repeat mutation
	// severity: integer 1,2 or 3 for 3 levels of severity
 		// 0: only affects the content of element with id 'goodbyeinternet'
 		// 1: affects everything in <body></body>
 		// 2: affects entire html top to bottom.
 		// 3: doesn't even preserve dom brackets! Apocalyptical. Should obviously be the default.


// selfdestruct start: A starter function just for this website to first change the text in the project box and wait 5 seconds before selfdestruct() begins. 

// string of mystical characters for mystical mode
// list of object from which one is destroyed based on severity level.
what_to_destruct = ['#goodbyeinternet','body','html'];
// list of styles
styles = ['switch','mystic']
// list of mystical characters
specialchars = '˕˖˗˘˙˚˛˜˝˞˟ˠˡˢˣˤ˥˦˧˨˩˪˫ˬ˭ˮ˯˰˱˲˳˴˵˶˷˸˹˺˻˼˽˾˿̴̵̶̷̸̡̢̧̨̛̖̗̘̙̜̝̞̟̣̤̥̦̩̪̫̬̭̮̯̰̱̲̳̹̺̻̼͇͈͉͍͎́̂̃̄̅̆̇̈̉̊̋̌̍̎̏̐̑̒̓̔̽̾̿́͂̓̈́͆͊͋͌̕̚ͅ͏͓͔͕͖͙͚͐͑͒͗͛ͣͤͥͦͧͨͩͪͫͬͭͮͯ͘͜͟͢͝͞͡ͰͱͲͳʹ͵Ͷͷ͸͹ͺͻͼͽ;Ϳ΀΁΂΃΄΅Ά·ΈΉΊ΋Ό΍ΎΏΐΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡ΢ΣΤΥΦΧΨΩΪΫάέήίΰαβγδεζηθικλμνξοπρςστυφχψωϊϋόύώϏϐϑϒϓϔϕϖϗϘϙϚϛϜϝϞϟϠϡϢϣϤϥϦϧϨϩϪϫϬϭϮϯϰϱϲϳϴϵ϶ϷϸϹϺϻϼϽϾϿЀЁЂЃЄЅІЇЈЉЊЋЌЍЎЏАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдежзийклмнопрстуфхцчшщъыьэюяѐёђѓєѕіїјљњћќѝўџѠѡѢѣѤѥѦѧѨѩѪѫѬѭѮѯѰѱѲѳѴѵѶѷѸѹѺѻѼѽѾѿҀҁ҂҃҄҅҆҇҈҉ҊҋҌҍҎҏҐґҒғҔҕҖҗҘҙҚқҜҝҞҟҠҡҢңҤҥҦҧҨҩҪҫҬҭҮүҰұҲҳҴҵҶҷҸҹҺһҼҽҾҿӀӁӂӃӄӅӆӇӈӉӊӋӌӍӎӏӐӑӒӓӔӕӖӗӘәӚӛӜӝӞӟӠӡӢӣӤӥӦӧӨөӪӫӬӭӮӯӰӱӲӳӴӵӶӷӸӹӺӻӼӽӾӿԀԁԂԃԄԅԆԇԈԉԊԋԌԍԎԏԐԑԒԓԔԕԖԗԘԙԚԛԜԝԞԟԠԡԢԣԤԥԦԧԨԩԪԫԬԭԮԯ԰ԱԲԳԴԵԶԷԸԹԺԻԼԽԾԿؠءآأؤإئابةتثجحخدذرزسشصضطظعغػؼؽؾؿـفقكلمنهوىيًٌٍَُِّْٕٖٜٟٓٔٗ٘ٙٚٛٝٞ٠١٢٣٤٥٦٧٨٩٪٫٬٭ٮٯٰٱٲٳٴٵٶٷٸٹٺٻټٽپٿڀځڂڃڄڅچڇڈډڊڋڌڍڎڏڐڑڒړڔڕږڗژڙښڛڜڝڞڟऀँंःऄअआइईउऊऋऌऍऎएऐऑऒओऔ';


function selfdestruct(severity,mutationrate,style){
	what_to_destruct = ['#goodbyeinternet','body','html'];
styles = ['switch','mystic']
// list of mystical characters
specialchars = '˕˖˗˘˙˚˛˜˝˞˟ˠˡˢˣˤ˥˦˧˨˩˪˫ˬ˭ˮ˯˰˱˲˳˴˵˶˷˸˹˺˻˼˽˾˿̴̵̶̷̸̡̢̧̨̛̖̗̘̙̜̝̞̟̣̤̥̦̩̪̫̬̭̮̯̰̱̲̳̹̺̻̼͇͈͉͍͎́̂̃̄̅̆̇̈̉̊̋̌̍̎̏̐̑̒̓̔̽̾̿́͂̓̈́͆͊͋͌̕̚ͅ͏͓͔͕͖͙͚͐͑͒͗͛ͣͤͥͦͧͨͩͪͫͬͭͮͯ͘͜͟͢͝͞͡ͰͱͲͳʹ͵Ͷͷ͸͹ͺͻͼͽ;Ϳ΀΁΂΃΄΅Ά·ΈΉΊ΋Ό΍ΎΏΐΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡ΢ΣΤΥΦΧΨΩΪΫάέήίΰαβγδεζηθικλμνξοπρςστυφχψωϊϋόύώϏϐϑϒϓϔϕϖϗϘϙϚϛϜϝϞϟϠϡϢϣϤϥϦϧϨϩϪϫϬϭϮϯϰϱϲϳϴϵ϶ϷϸϹϺϻϼϽϾϿЀЁЂЃЄЅІЇЈЉЊЋЌЍЎЏАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдежзийклмнопрстуфхцчшщъыьэюяѐёђѓєѕіїјљњћќѝўџѠѡѢѣѤѥѦѧѨѩѪѫѬѭѮѯѰѱѲѳѴѵѶѷѸѹѺѻѼѽѾѿҀҁ҂҃҄҅҆҇҈҉ҊҋҌҍҎҏҐґҒғҔҕҖҗҘҙҚқҜҝҞҟҠҡҢңҤҥҦҧҨҩҪҫҬҭҮүҰұҲҳҴҵҶҷҸҹҺһҼҽҾҿӀӁӂӃӄӅӆӇӈӉӊӋӌӍӎӏӐӑӒӓӔӕӖӗӘәӚӛӜӝӞӟӠӡӢӣӤӥӦӧӨөӪӫӬӭӮӯӰӱӲӳӴӵӶӷӸӹӺӻӼӽӾӿԀԁԂԃԄԅԆԇԈԉԊԋԌԍԎԏԐԑԒԓԔԕԖԗԘԙԚԛԜԝԞԟԠԡԢԣԤԥԦԧԨԩԪԫԬԭԮԯ԰ԱԲԳԴԵԶԷԸԹԺԻԼԽԾԿؠءآأؤإئابةتثجحخدذرزسشصضطظعغػؼؽؾؿـفقكلمنهوىيًٌٍَُِّْٕٖٜٟٓٔٗ٘ٙٚٛٝٞ٠١٢٣٤٥٦٧٨٩٪٫٬٭ٮٯٰٱٲٳٴٵٶٷٸٹٺٻټٽپٿڀځڂڃڄڅچڇڈډڊڋڌڍڎڏڐڑڒړڔڕږڗژڙښڛڜڝڞڟऀँंःऄअआइईउऊऋऌऍऎएऐऑऒओऔ';

	console.log(what_to_destruct[severity]);
	html_source = $(what_to_destruct[severity]).html();

// loop not in use; could switch more than one pair of characters per mutation
for(var i=0;i<=0;i++)
{
	a = parseInt(Math.random()*html_source.length);

	if(style==1 || style==3){
		b = parseInt(Math.random()*html_source.length);



		if(html_source[a] != '<' & html_source[a] != '>' & html_source[b] != '<' & html_source[b] != '>' ){
			aletter = html_source[a];
			html_source = html_source.replaceAt(a, html_source[b]);
			html_source = html_source.replaceAt(b,aletter);
// console.log(html_source);
}
}else if(style==2){
	b = parseInt(Math.random()*specialchars.length);
	if(html_source[a] != '<' & html_source[a] != '>'){
		html_source = html_source.replaceAt(a, specialchars[b]);
		console.log(specialchars[b]);
	}


}


setTimeout(function(){
	selfdestruct(1,25,2)
}, Math.random()*300);
}
$(what_to_destruct[severity]).html(html_source);

}

function selfdestruct_start(){
$('#project11').find('.image').html('<div style="background-color:red;color:white;">goodbye.js <b>activated</b>. this website will break itself in 5 seconds. A very usefull piece of javascript. <a href="goodbyeinternet.js" style="text-decoration:underline;cursor:pointer;">Get Source Code</a></div>')
$('#project11').attr('onclick','')
$('#project11').css('cursor:','default')

setTimeout(function(){
	selfdestruct(1,25,2)
}, 5000);}

// $( document ).ready(function(){


// 	setTimeout(
// 		function(){
// 			selfdestruct();
// 		}, 
// 		5000);
// });


// custom function to replace characters in strings:
// credit to StackOverflow user Cem Kalyoncu
// http://stackoverflow.com/questions/1431094/how-do-i-replace-a-character-at-a-particular-index-in-javascript 
String.prototype.replaceAt=function(index, character) {
	return this.substr(0, index) + character + this.substr(index+character.length);
}