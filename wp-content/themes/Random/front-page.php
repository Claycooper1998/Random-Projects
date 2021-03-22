<?php
get_header();
?>

	<article>
	
	<?php
		if( have_posts() ){

			while( have_posts() ){

				//this gets the posts we make in wordpress and displays them
				the_post();
				//this will get the content inside of the pages and display them on the page (dynamic)
				the_content();
			}
		}

	?>

	
	</article>
	

	<?php
	get_footer();
	?>

