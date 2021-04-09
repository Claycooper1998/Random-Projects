<?php include "header.php";?>

	<header>
		<h1 class="text-center text-2xl my-5">Rock Paper Scissors</h1>
	</header>


	<!-- This is the score board -->
	<div class="border border-solid border-white w-52 h-16 mx-auto text-white relative px-10">
		<div id="user-label" class="text-center bg-red-600 text-xs absolute -left-5 top-4 p-2">User</div>
		<div id="computer-label" class="text-center bg-red-600 text-xs absolute -right-5 top-4 p-2">Comp</div>
		<div class="text-center text-5xl pt-2">
			<span id="user-score">0</span>:<span id="computer-score">0</span>
		</div>
	</div>

	<div>
		<p class="text-center text-6xl text-white pt-4 pb-8">Paper covers rock. You Win!</p>
	</div>

	<!-- These are the choices you can pick from -->
	<div class="flex space-x-16 justify-center">
		<div id="r" class="flex-0 cursor-pointer">
			<img src="<?=get_template_directory_uri()?>/images/rock.png" alt="Rock" width="150">
		</div>
		<div id="p" class="flex-0 cursor-pointer">
			<img src="<?=get_template_directory_uri()?>/images/paper.png" alt="Paper" width="150">
		</div>
		<div id="s" class="flex-0 cursor-pointer">
			<img src="<?=get_template_directory_uri()?>/images/scissors.png" alt="Scissors" width="150">
		</div>
	</div>

	<p id="action-message" class="text-center pt-5 text-2xl text-white">Make your move!</p>



	<script>
		
		// Cashing the DOM... meaning we will be using these elements later and we can create a shortcut to grab it easily
		const userScore = 0;
		const computerScore = 0;
		const userScore_span = document.getElementById("user-score");
		const computerScore_span = document.getElementById("computer-score");
		const scoreBoard_div = document.querySelector(".score-board");
		const result_div = document.querySelector(".result");
		const rock_div = document.getElementById("r");
		const paper_div = document.getElementById("p");
		const scissors_div = document.getElementById("s");


		function getComputerChoice() {
			const choices = ['r','p','s'];
			console.log(Math.random() * 3);
		}
		getComputerChoice();

		function game(userChoice) {
			console.log("HELLO" + userChoice);
		}

		function main() {

			rock_div.addEventListener("click", function() {
				game("r");
			})

			paper_div.addEventListener("click", function() {
				game("p");
			})

			scissors_div.addEventListener("click", function() {
				game("s");
			})

		}

		main();



	</script>





