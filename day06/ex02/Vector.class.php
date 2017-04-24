<?php
    require_once 'Color.class.php';
    require_once 'Vertex.class.php';
	class Vector {
        private $_x;
        private $_y;
        private $_z;
        private $_w;
        static $verbose  = FALSE;

		public function __construct($ar)
        {
            if (array_key_exists('dest', $ar))
            {
                if (array_key_exists('orig', $ar)) {
                    $this->_x = $ar['dest']->_x - $ar['orig']->_x;
                    $this->_y = $ar['dest']->_y - $ar['orig']->_y;
                    $this->_z = $ar['dest']->_z - $ar['orig']->_z;
                }
                else
                {
                    $orig = new Vertex(array(
                        'x' => 0, 'y' =>0, 'z' => 0, 'w' => 1, 'rgb' => 16777215));
                    $this->_x = $ar['dest']->_x - $orig->_x;
                    $this->_y = $ar['dest']->_y - $orig->_y;
                    $this->_z = $ar['dest']->_z - $orig->_z;
                }
            }
            if (Vector::$verbose === TRUE) {
                printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) constructed\n",
                    $this->_x, $this->_y, $this->_z, $this->_w);
            }
        }
        public static function doc(){
            return (file_get_contents('Vector.doc.txt'));
        }

        public function __toString(){
            return sprintf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f )",
            $this->_x, $this->_y, $this->_z, $this->_w);
        }

        public function __destruct(){
            if (Vector::$verbose === TRUE) {
                printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) destructed\n",
                    $this->_x, $this->_y, $this->_z, $this->_w);

            }
        }

        public function magnitude(){
            return sqrt((pow($this->_x, 2) +
                pow($this->_y, 2) +
                pow($this->_z, 2)));
        }

        public function normalize(){
            $length = $this->magnitude();
            return new Vector(array('dest' => new Vertex(array(
                'x' => ($this->_x / $length),
                'y' => ($this->_y / $length),
                'z' => ($this->_z / $length)
        ))));
        }

        public function add(Vector $rhs ){
            return new Vector(array('dest' => new Vertex(array(
                'x' => $this->_x + $rhs->_x,
                'y' => $this->_y + $rhs->_y,
                'z' => $this->_z + $rhs->_z,
                'w' => $this->_w))));
        }

        public function sub(Vector $rhs ){
            return new Vector(array('dest' => new Vertex(array(
                'x' => $this->_x - $rhs->_x,
                'y' => $this->_y - $rhs->_y,
                'z' => $this->_z - $rhs->_z,
                'w' => $this->_w))));
        }

        public function opposite(){
            return new Vector(array('dest' => new Vertex(array(
                'x' => $this->_x * -1,
                'y' => $this->_y * -1,
                'z' => $this->_z * -1,
                'w' => $this->_w))));
        }

        public function scalarProduct($k){
            return new Vector(array('dest' => new Vertex(array(
                'x' => $this->_x * $k,
                'y' => $this->_y * $k,
                'z' => $this->_z * $k,
                'w' => $this->_w))));
        }

        public function dotProduct(Vector $rhs ){
            return $this->_x * $rhs->_x + $this->_y * $rhs->_y + $this->_z * $rhs->_z;
        }

        public function cos( Vector $rhs ){
            return $this->dotProduct($rhs) / ($this->magnitude() * $rhs->magnitude());
        }

        public function crossProduct( Vector $rhs ){
            return new Vector(array('dest' => new Vertex(array(
                'x' => $this->_y * $rhs->_z - $this->_z * $rhs->_y,
                'y' => $this->_z * $rhs->_x - $this->_x * $rhs->_z,
                'z' => $this->_x * $rhs->_y - $this->_y * $rhs->_x,
                'w' => $this->_w))));
        }
    }
?>