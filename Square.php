<?php
include_once 'Rectangle.php';

class Square extends geometry_object\Rectangle {
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}