<?php
require_once __DIR__ . "/product.php";

class food extends product{

    protected $calories;

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

    public function setCalories($_calories){
        $this->calories = $_calories;
    }

    public function getCalories(){
       return  $this->calories;
    }
}

?>