<?php include "header.php";?>

	<header>
		<h1 class="text-center text-2xl my-5">Rock Paper Scissors</h1>
	</header>


	<!-- This is the score board -->
	<div class="border border-solid border-white w-48 mx-auto">
		<div id="user-label">User</div>
		<div id="computer-label">Comp</div>
		<span id="user-score">0</span>:<span id="computer-score">0</span>
	</div>

	<div>
		<p>Paper covers rock. You Win!</p>
	</div>

	<!-- These are the choices you can pick from -->
	<div class="flex space-x-4 justify-center">
		<div id="r" class="flex-0">
			<img src="<?=get_template_directory_uri()?>/images/rock.png" alt="Rock" width="150">
		</div>
		<div id="p" class="flex-0">
			<img src="<?=get_template_directory_uri()?>/images/paper.png" alt="Paper" width="150">
		</div>
		<div id="s" class="flex-0">
			<img src="<?=get_template_directory_uri()?>/images/scissors.png" alt="Scissors" width="150">
		</div>
	</div>

	<p id="action-message">Make your move</p>





