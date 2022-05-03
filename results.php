<?php
// This function displays a statement to see what movie rating a specific age should be permitted to see
  
	// get user input (age)
	$age = $_POST['age'];

  // declare constants
  define (FIRST_THRESHOLD, 18);
  define (SECOND_THRESHOLD, 13);
  define (THIRD_THRESHOLD, 8);

// if statements, if youa re 18 years old or older, you are permitted to watch an R rated movie alone, if you are 13-17 years old, you are permitted to watch a PG-13 rated movie alone, if you are 8-12 years old, you are permitted to watch a G rated movie alone, and if you are 7 years or younger, you should not be seeing a movie alone
	if ($age >= FIRST_THRESHOLD) {
		echo "You are permitted to watch an R rated movie alone!";
	}

  else if ($age >= SECOND_THRESHOLD) {
    echo "You are permitted to watch a PG-13 rated movie alone.";
  }

  else if ($age >= THIRD_THRESHOLD) {
    echo "You are permitted to watch a G rated movie alone.";
  }

  else {
    echo "You should not be going to see a movie alone. Parental guidance is extremely encouraged.";
  }
?>