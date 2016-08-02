<?php	
	/**
	 * Request class
	 */
	class Request {
		/**
		 * @var array filtered HTTP_GET
		 */
		var $get = array();
		
		/**
		 * @var array filtered HTTP_POST
		 */
		var $post = array();
		
		/**
		 * Constructor
		 * 
		 * @param array $get raw HTTP_GET
		 * @param array $post raw HTTP_POST
		 * 
		 * @return void
		 */
		function __construct($get, $post) {
			// filter HTTP_GET
			$this->get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
			// filter HTTP_POST
			$this->post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		}
		
		/**
		 * returns specific GET or POST variable
		 * 
		 * @param string $type Type of request ("GET" / "POST")
		 * @param string $key Name of key
		 * 
		 * @return mixed value
		 */
		function get($type, $key) {
			if (empty($key)) {
				if (strtoupper(trim($type)) == 'GET') {
					if (isset($this->get[$key])) {
						return $this->get[$key];
					} else {
						return null;
					}
				} elseif (strtoupper(trim($type)) == 'POST') {
					if (isset($this->post[$key])) {
						return $this->post[$key];
					} else {
						return null;
					}
				} else {
					return null;
				}
			}
		}
	}
		