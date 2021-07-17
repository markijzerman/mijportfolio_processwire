

<?php

include('./_head.php'); // include header markup ?>

<style>
/*basic page style*/
.topnav a {
		color: black; 
	}

.title h1{
	color: black;
}
</style>

	<div id='content'><?php 

		// if it's not one of the categories, output the title of the work
		if($page->parent()->get('title') != 'Home')
		echo "<h1>" . $page->get('headline|title') . "</h1>"  . "<div class='year'>" . " (" . $page->get('year') . ")" . "</div>" ;

	
		// output bodycopy
		echo $page->body; 
	
		// render navigation to child pages
		renderNav($page->children);


		
		
	
	?></div><!-- end content -->


	<aside id='sidebar'>
	<div id='credits'><?php
	echo $page->get(sidebar);
	echo $page->get(presented);
	echo $page->get(credits);

			
	?>
	</div>

	
</aside><!-- end sidebar -->

<?php include('./_foot.php'); // include footer markup ?>
