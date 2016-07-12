<?php
    /**
     * Controller class
     */
    class Controller {
    	// Model
        private $model;
		
        function __construct($model) {
            $this->model = $model;
        }
    }
    
?>