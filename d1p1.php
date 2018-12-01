<?php
	Class Summary {
		private $_lines;
		
		public function load_the_lines($filename) { $this -> _lines = file($filename); }
		public function sum_the_lines() {
			$sum = 0;
			foreach ($this -> _lines as $line) {
				$sum = $line + $sum;
			}
			return $sum;
		}
	}

?>
