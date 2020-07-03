<?php
    class Dancer{
        private $name;
        private $gender;
        function __construct($name, $gender)
        {
            $this->name = $name;
            $this->gender = $gender;
        }
        function getName(){
            return $this->name;
        }
        function getGender(){
            return $this->gender;
        }
    }