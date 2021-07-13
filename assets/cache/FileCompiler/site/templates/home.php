<?php

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<style>
.topnav a {		
	-webkit-text-stroke: 1px black;
   		color: white;
		  text-shadow:
		       3px 3px 0 #000,
		     -1px -1px 0 #000,  
		      1px -1px 0 #000,
		      -1px 1px 0 #000,
		       1px 1px 0 #000;

		  }

.title h1 a {
		-webkit-text-stroke: 1px black;
   		color: white;
		  text-shadow:
		       3px 3px 0 #000,
		     -1px -1px 0 #000,  
		      1px -1px 0 #000,
		      -1px 1px 0 #000,
		       1px 1px 0 #000;
}

.titleslider a {
		/*-webkit-text-stroke: 1.2px black;*/
   		color: white;
/*		  text-shadow:
		       1px 1px 0 #000,
		     -1px -1px 0 #000,  
		      1px -1px 0 #000,
		      -1px 1px 0 #000,
		       1px 1px 0 #000;*/
}
	}

</style>

	<div class='backgrounddiv'><?php
		foreach($page->children as $cat) {
			foreach ($cat->children as $project) {
				if($project->images->count > 0) echo "<div class='bgslider' style='background-image:url(" . $project->images->first()->url . ");'  /> </div>";
		}
	}
	?></div>

	<div class='titleslider'><?php
		foreach($page->children as $cat) {
			foreach ($cat->children as $project) {
				if($project->images->count > 0) echo "<a class='title' style='display-block' href='$project->url'>$project->title</a>";

		}
	}



	?></div>

	<script>
	$(document).ready(function(){
  		$('.backgrounddiv').slick({
    		lazyLoad: 'ondemand',
    		// centerMode: true,
      		arrows: false,
      		dots: false,
      		autoplay: true,
		    autoplaySpeed: 6000,
		    mobileFirst: true,
		    asNavFor: '.titleslider',
		    swipeToSlide: true,
		    touchThreshold: 50
		    // variableWidth: true
    		// variableHeight: true
  		});

  		$('.titleslider').slick({
		      dots: false,
		      arrows: false,
		      autoplay: true,
		      autoplaySpeed: 6000,
		      mobileFirst: true,
		      pauseOnFocus: false,
		      pauseOnHover: false,
		      asNavFor: '.backgrounddiv'
		});
	});
</script>

	<div id='content'><?php

	
		// output 'headline' if available, otherwise 'title'
		// echo "<h1>" . $page->get('headline|title') . "</h1>";
	
		// output bodycopy
		echo $page->body;
	
		// render navigation to child pages
		// renderNav($page->children);
	
	?></div><!-- end content -->
	
	<div id='sidebar'><?php
	
		// if(count($page->images)) {
	
		// 	// if the page has images on it, grab one of them randomly... 
		// 	$image = $page->images->getRandom();
			
		// 	// resize it to 400 pixels wide
		// 	$image = $image->width(400);
			
		// 	// output the image at the top of the sidebar...
		// 	echo "<img src='$image->url' alt='$image->description' />";
		// }
	
		// output sidebar text if the page has it
		echo $page->sidebar;
	
	?></div><!-- end sidebar -->

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>


