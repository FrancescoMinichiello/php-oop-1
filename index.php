<?php

class Movie
{
    public $title;
    public $price;
    public $movieRelease;


    function __construct(
        string $_title,
        int $_price,
        int $_movieRelease
    ) {
        $this->title = "$_title";
        $this->price = $_price;
        $this->movieRelease = $_movieRelease;
    }
}

$spiderman = new Movie("Spiderman", 40, 2012);
$avengers = new Movie("Avengers", 30, 2011);