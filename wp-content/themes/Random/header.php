<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php wp_head();?> 
		<!--^^^^^  this is loads all the function.php stuff into the page ^^^^^ -->     
	</head>
	<body class="bg-gray-600">
		<div class="h-16 bg-blue-700 flex  sm:px-6 lg:px-8">
			<p class="flex-1 sm::text-lg md:text-2xl lg:text-3xl xl:text-4xl text-white text-left font-bold pt-4 pl-3 tracking-wider justiify-start">Clayton Cooper</p>
			<headng>
				<h1 class="flex-1 sm::text-lg md:text-2xl lg:text-3xl xl:text-4xl text-white text-left font-bold pt-4 pl-3 tracking-wider justiify-between"><?php the_title(); ?></h1>
			</headng>
			<p class="flex-1 sm::text-lg md:text-2xl lg:text-3xl xl:text-4xl text-white text-right font-bold pt-4 pr-3 tracking-wider justify-end">Random Stuff</p>
		</div>
		<?php include 'nav.php';?>
