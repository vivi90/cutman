<?php
    /**
     * Model class
     */
    class Model {
    	// Input data
    	private $x_start;
		private $x_between;
		private $x_use;
		private $x_notch_wanted;
		private $y_start;
		private $y_between;
		private $y_use;
		private $y_notch_wanted;
		
		// Result data
		private $x1;
		private $x2;
		private $x3;
		private $x_notch;
		private $y1;
		private $y2;
		private $y3;
		private $y_notch;
		
		public function getXStart() {
			return $this->x_start;
		}
		
		public function getXBetween() {
			return $this->x_between;
		}
		
		public function getXUse() {
			return $this->x_use;
		}
		
		public function getXNotchWanted() {
			return $this->x_notch_wanted;
		}
		
		public function getYStart() {
			return $this->y_start;
		}
		
		public function getYBetween() {
			return $this->y_between;
		}
		
		public function getYUse() {
			return $this->y_use;
		}
		
		public function getYNotchWanted() {
			return $this->y_notch_wanted;
		}
		
		public function getX1() {
			return $this->x1;
		}
		
		public function getX2() {
			return $this->x2;
		}
		
		public function getX3() {
			return $this->x3;
		}
		
		public function getXNotch() {
			return $this->x_notch;
		}
		
		public function getY1() {
			return $this->y1;
		}
		
		public function getY2() {
			return $this->y2;
		}
		
		public function getY3() {
			return $this->y3;
		}
		
		public function getYNotch() {
			return $this->y_notch;
		}
		
		public function setXStart($x_start) {
			if (is_numeric($x_start)) {
				$this->x_start = $x_start;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setXBetween($x_between) {
			if (is_numeric($x_between)) {
				$this->x_between = $x_between;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setXUse($x_use) {
			if (is_numeric($x_use)) {
				$this->x_use = $x_use;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setXNotchWanted($x_notch_wanted) {
			if (is_bool($x_notch_wanted)) {
				$this->x_notch_wanted = $x_notch_wanted;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setYStart($y_start) {
			if (is_numeric($y_start)) {
				$this->y_start = $y_start;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setYBetween($y_between) {
			if (is_numeric($y_between)) {
				$this->y_between = $y_between;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setYUse($y_use) {
			if (is_numeric($y_use)) {
				$this->y_use = $y_use;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setYNotchWanted($y_notch_wanted) {
			if (is_bool($y_notch_wanted)) {
				$this->y_notch_wanted = $y_notch_wanted;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setX1($x1) {
			if (is_numeric($x1)) {
				$this->x1 = $x1;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setX2($x2) {
			if (is_numeric($x2)) {
				$this->x2 = $x2;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setX3($x3) {
			if (is_numeric($x3)) {
				$this->x3 = $x3;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setXNotch($x_notch) {
			if (is_numeric($x_notch)) {
				$this->x_notch = $x_notch;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setY1($y1) {
			if (is_numeric($y1)) {
				$this->y1 = $y1;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setY2($y2) {
			if (is_numeric($y2)) {
				$this->y2 = $y2;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setY3($y3) {
			if (is_numeric($y3)) {
				$this->y3 = $y3;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setYNotch($y_notch) {
			if (is_numeric($y_notch)) {
				$this->y_notch = $y_notch;
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
        public function __construct($x_start = 0, $x_between = 0, $x_use = 0, $x_notch_wanted = FALSE, 
        					$y_start = 0, $y_between = 0, $y_use = 0, $y_notch_wanted = FALSE, 
        					$x1 = 0, $x2 = 0, $x3 = 0, $x_notch = 0, 
        					$y1 = 0, $y2 = 0, $y3 = 0, $y_notch) {
        	// Input data
			$this->setXStart($x_start);
			$this->setXBetween($x_between);
			$this->setXUse($x_use);
			$this->setXNotchWanted($x_notch_wanted);
			$this->setYStart($y_start);
			$this->setYBetween($y_between);
			$this->setYUse($y_use);
			$this->setYNotchWanted($y_notch_wanted);
			
			// Result data
			$this->setX1($x1);
			$this->setX2($x2);
			$this->setX3($x3);
			$this->setXNotch($x_notch);
			$this->setY1($y1);
			$this->setY2($y2);
			$this->setY3($y3);
			$this->setYNotch($y_notch);
        }
    }
    
?>