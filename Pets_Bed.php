<?php
require_once __DIR__.'./Product.php';

class Pets_Bed extends Product {
        public $materials = [];
        public $size;

        public function __construct(
            string $name,
            string $category,
            string $brand,
            string $price,
            string $details,
            string $img,
            /* Categorie $category, */
            string $materials,
            string $size,
        )
        {
            parent::__construct(
                $name,
                $category,
                $brand,
                $price,
                $details,
                $img,
               /*  $category, */
            );
            $this->materials = $materials;
            $this->size = $size;
        }
    }