<?php 
class Product
{
    public $name;
    public $category;
    public $brand;
    public $price;
    public $details;
    public $img;
    /* public $category; */

    public function __construct(
        string $name,
        string $category,
        string $brand,
        string $price,
        string $details,
        string $img,
        /* Categorie $category, */

    ) {
        $this->name = $name;
        $this->category = $category;
        $this->brand = $brand;
        $this->price = $price;
        $this->details = $details;
        $this->img = $img;
        /* $this->category = $category; */
    }


}