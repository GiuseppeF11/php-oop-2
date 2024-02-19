<?php
require_once __DIR__.'./Product.php';

class Toy extends Product {
        public $materials = [];
        public $description;
        public $pet_size;

        public function __construct(
            string $name,
            string $brand,
            string $price,
            string $details,
            string $img,
            /* Categorie $category, */
            string $materials,
            string $description,
            string $pet_size,

        )
        {
            parent::__construct(
                $name,
                $brand,
                $price,
                $details,
                $img,
               /*  $category, */
                $materials,
                $description,
                $pet_size,
            );
            $this->materials = $materials;
            $this->description = $description;
            $this->pet_size = $pet_size;
        }
    }