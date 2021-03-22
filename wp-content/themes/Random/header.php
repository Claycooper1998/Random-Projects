<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php wp_head();?> 
		<!--^^^^^  this is loads all the function.php stuff into the page ^^^^^ -->     
	</head>
	<body class="bg-gray-500">
		<div class="h-16 bg-blue-700 flex sm:px-6 lg:px-8">
			<p class="flex-1 text-white text-left font-bold text-4xl pt-4 pl-3 tracking-wider justiify-start">Clayton Cooper</p>
			<headng>
				<h1 class="flex-1 text-white text-left font-bold text-4xl pt-4 pl-3 tracking-wider justiify-between"><?php the_title(); ?></h1>
			</headng>
			<p class="flex-1 text-white text-right font-bold text-4xl pt-4 pr-3 tracking-wider justify-end">Random Stuff</p>
		</div>
		<?php include 'nav.php';?>






		<div class="bg-white rounded-md py-5 px-5 m-10">
		<p class="text-center pb-2 font-bold text-2xl">About This Website</p>

		<p class="text-left pb-2 text-xl">  This is the content page where lots of code should be tested and posted. 
			This is a good spot to show off past projects while also using this a working spot for new projects currently being worked on.
		</p>
	</div>
	<div class="flex">
		<div class="bg-white rounded-md py-5 px-5 mx-10 flex-1">
			<p class="text-center">Project 1</p>
		</div>
		<div class="bg-white rounded-md py-5 px-5 mx-10 flex-1">
			<p class="text-center">Project 2</p>
		</div>
	</div>