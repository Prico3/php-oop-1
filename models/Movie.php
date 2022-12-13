<?php


class Movie
{
    public $title;
    public $genre;
    public $duration;

    public function __construct(String $title, String $genre, int $duration)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getDetails()
    {
        return "Titolo: $this->title, Genere: $this->genre , Durata: $this->duration minuti";
    }
}
