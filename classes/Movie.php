<?php 
class Movie {
    public $title;
    public $genre;
    public $length;

    public function __construct($title, $genre, $length){
        $this-> title = $title;
        $this-> genre = $genre;
        $this-> length = $length;
    }

    public function getTitle(){
        return $this -> title;
    }

    public function getGenre(){
        return $this -> genre;
    }

    public function getlength(){
        return $this -> length;
    }
}
?>