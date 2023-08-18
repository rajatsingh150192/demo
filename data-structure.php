<?php

class DataStructure{
    private $height;
    private $lenght;


    public function getArea()
    {
        return $this->height * $this->lenght;
    }
    public function getAreaOfCircle()
    {
        return "area of circle";
    }
}