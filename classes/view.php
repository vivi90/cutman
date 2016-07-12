<?php
    /**
     * View class
     */
    class View {
    	// Model
    	private $model;
        
        public function __construct($model) {
            $this->model = $model;
        }
		
		// Display final browser content
		public function display() {
			include BASEPATH.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'calculate.phtml';
		}
    }
    
?>