<?php
    require_once 'Color.class.php';
	class Vertex{
		private $_x;
		private $_y;
		private $_z;
		private $_w;
		private $_color;
		static $verbose = FALSE;

		public function __construct($ar){
			$this->_x = floatval($ar['x']);
			$this->_y = floatval($ar['y']);
			$this->_z = floatval($ar['z']);
			$this->_w = floatval($ar['w']);
			if (array_key_exists('w', $ar))
				$this->_w = $ar['w'];
			else
				$this->_w = 1;
			if (array_key_exists('color', $ar))
				$this->_color = $ar['color'];
			else
				$this->_color = new Color(array(
					'red' => 255,
					'green' => 255,
					'blue' => 255));
			if (Vertex::$verbose === TRUE){
				printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s ) constructed\n",
				$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->__toString());
			}
		}
		public static function doc(){
			return (file_get_contents('Vertex.doc.txt'));
		}
		public function __toString(){
			if (Vertex::$verbose === TRUE)
			{
				return sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s )",
				$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->__toString());
			}
			else
			{
				return sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f )",
				$this->_x, $this->_y, $this->_z, $this->_w);
			}
		}
		public function __get($name)
		{
			return $this->$name;
		}

		public function __set($name, $value)
		{
			$this->$name = $value;
		}
		public function __destruct()
		{
			if (Vertex::$verbose === TRUE){
				printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s ) destructed\n",
				$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->__toString());
			}
		}
	}
?>