<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php wp_head();?> 
		<!--^^^^^  this is loads all the function.php stuff into the page ^^^^^ -->     
	</head>

	<body>
		<div class="flex space-x-4">
			<?php
				wp_nav_menu(
					array(
						'menu' => 'primary',
						'container' => '',
						'theme_location' => 'primary',
						//I can edit the menu tailwind css here (in the video he shows a different way to add css, but tailwind works perfectly)
						'items_wrap' => '<ul id="" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">%3$s</ul>'
					)
					);
			?>
		</div>
	</body>