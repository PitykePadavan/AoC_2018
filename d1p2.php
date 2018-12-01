<?php
	class SumPart {
		private $_part_results = array(0);
		private $_lines;
		
		public function load_the_lines($filename) {
			$lines = file($filename);
			$this -> _lines = $lines;
		}
		
		public function get_first_repeat() {
			$this -> check_reaching_twice_loop();
			return end($this -> _part_results); 
		}
		
		private function check_reaching_twice_once() {
			$found = False;
			foreach ($this -> _lines as $line) {
				$next_result = end($this -> _part_results) + $line;
				if (in_array($next_result, $this -> _part_results)) {
					$found = True;
					array_push($this -> _part_results,$next_result);
					break;
				}
				array_push($this -> _part_results,$next_result);
			}
			return $found;
		}
		
		private function check_reaching_twice_loop() {
			$found = False;
			while (boolval ($found) == False) {
				$found = $this -> check_reaching_twice_once();
			}
		}
	}
	

	
	
	
?>