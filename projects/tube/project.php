<div class="grid">
<div class="unit whole"></div>
	<div class="unit w-1-3 regular longtext">

This is an analysis of the redundancy in the London Tube Network. The most influential stations if disrupted are King's Cross St. Pancrass, Baker St, Bank and Oxford Circus. Because the classic measures of betweenness and closeness centrality do not consider how easy it is to circumvent a node in case of disruption, a new measure is defined that compares the cummulative closeness centrality of the enitre network to that of a subgraph excluding the node in question.
	</div>

<?php 

	// image("./projects/tube/mintree.png", 'half','The minimum spanning tree highlights the links that are crucial (red) to pertain a single component. Very few links are redundant (gray).');
	image("./projects/tube/mintree.png", 'w-1-3','Minimum Spanning Tree');
	image("./projects/tube/degdes.png", 'w-1-3','Degree Distribution');

	image("./projects/tube/cl.png", 'w-1-3','Closeness Centrality');
	image("./projects/tube/betw.png", 'w-1-3','Betweenness Centrality');
	image("./projects/tube/cl-diff.png", 'w-1-3','Global Closeness Difference Centrality');


?>
		<!-- 
	<div class="unit whole regular">Stations in the light of closeness centrality, betweenness centrality and closeness-difference centrality:</div>

	<div class="unit w-1-3"><img src="./projects/tube/cl.png"></div>
	<div class="unit w-1-3"><img src="./projects/tube/betw.png"></div>
	<div class="unit w-1-3"><img src="./projects/tube/cl-diff.png"></div>
 -->
</div>