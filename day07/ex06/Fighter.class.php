<?php
    abstract class Fighter {

        public $field;

       abstract public function fight($tmp);

        public function __construct($str)
        {
            $this->field = $str;
        }
    }