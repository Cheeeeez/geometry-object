<?php
namespace geometry_object;
include_once 'Rectangle.php';

class Square extends Rectangle {
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}