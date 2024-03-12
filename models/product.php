<?php
class product{
    public $name;
    public $prezzo;
    public $image;
    public $available ;
    public $quantity;
    public $category;


    public function __construct(
        $_name,
        $_prezzo,
        $_image,
        $_available,
        $_quantity,
        Category $_category,
    ){
        $this->name = $_name;
        $this->prezzo = $_prezzo;
        $this->image = $_image;
        $this->available = $_available;
        $this->category = $_category;
        $this->quantity = $_quantity;
    }

    public function getProductDetails()
    {
        return 
        "Prodotto : $this->name,
         Prezzo : $this->prezzo,
         Quantità : $this->quantity";
    }

     public function getIcon()
    {
        $icon = $this->category->icon;
        return  "<i class='$icon'></i>";
    }
}
?>