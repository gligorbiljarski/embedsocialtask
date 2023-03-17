<?php

namespace App\Models;

class Review
{
    private $text;
    private $rating;
    private $date;

    public function __construct($text, $rating, $date)
    {
        $this->text = $text;
        $this->rating = $rating;
        $this->date = $date;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getDate()
    {
        return $this->date;
    }
}
