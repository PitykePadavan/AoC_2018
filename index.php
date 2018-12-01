<?php
	function write_solution($day,$part,$solution) {
		$output = "Day " . $day . " Part " . $part . " solution: " . $solution . "<br> \n";
		return $output;
	}

	include 'd1p1.php';
	$Day1Part1 = new Summary;
	$Day1Part2->load_the_lines('day1.txt');
	echo write_solution(1,1,$Day1Part2->sum_the_lines() );

	include 'd1p2.php';
	$Day1Part2 = new SumPart;
	$Day1Part2->load_the_lines('day1.txt');
	echo write_solution(1,2,$Day1Part2->get_first_repeat() );
?>