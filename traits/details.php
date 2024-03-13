<?php

trait details {
    public $marca; 

    public function setDetails($marca){
        $this->Details = $marca;
    }

    public function getDetails(){
        return  $this->Details;
    }

}
?>