<?php
require_once __DIR__ . "/product.php";

class toys extends product{

    protected $genre;

    public function __construct(

        $_name,
        $_prezzo,
        $_image,
        $_available,
        Category $_category,
    )
    {
        parent::__construct($_name, $_prezzo, $_image, $_available, $_category,);
    }

    public function setGenre($_genre){
        $this->genre = $_genre;
    }

    public function getGenre(){
       return $this->genre;
    }
}

?>