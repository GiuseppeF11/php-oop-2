<?php 
class Product
{
    public $name;
    public $brand;
    public $price;
    public $details;
    public $img;
    /* public $category; */

    public function __construct(
        string $name,
        string $brand,
        string $price,
        string $details,
        string $img,
        /* Categorie $category, */

    ) {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->details = $details;
        $this->img = $img;
        /* $this->category = $category; */
    }


}