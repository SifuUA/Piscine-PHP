<?php
	Class Color {
		public $red;
		public $green;
		public $blue;
		static $verbose = FALSE;
		
		public function __construct($ar) {
		if (array_key_exists('rgb', $ar))
			{
				$rgb = intval($ar['rgb']);
				$this->red = (16711680 & $rgb) >> 16;
				$this->green = (65280 & $rgb) >> 8;
				$this->blue = (255 & $rgb);
			}
			else
			{
				$this->red = intval($ar['red']);
				$this->green = intval($ar['green']);
				$this->blue = intval($ar['blue']);
			}
			if (Color::$verbose === TRUE) {
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n",
					$this->red, $this->green, $this->blue);
			}
			return ;
		}
		public function __toString(){
			return sprintf("Color( red: %3d, green: %3d, blue: %3d )",
				$this->red, $this->green, $this->blue);
		}
		public function __destruct()
		{
			if (Color::$verbose === TRUE){
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n",
					$this->red, $this->green, $this->blue);
			}
			return ;
		}
		static function doc(){
			return (file_get_contents('Color.doc.txt'));
		}
		public function add(Color $instance){
			return (new Color(array(
				'red' => $this->red + $instance->red,
				'green' => $this->green + $instance->green,
				'blue' => $this->blue + $instance->blue)));
		}
		public function sub(Color $instance){
			return (new Color(array(
				'red' => $this->red - $instance->red,
				'green' => $this->green - $instance->green,
				'blue' => $this->blue - $instance->blue)));
		}
		public function mult($instance){
			return (new Color(array(
				'red' => $this->red * $instance,
				'green' => $this->green * $instance,
				'blue' => $this->blue * $instance)));
		}
	}
?>