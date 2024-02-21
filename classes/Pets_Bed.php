<?php
require_once __DIR__.'./Product.php';
require_once __DIR__.'/../traits/Dimension.php';

class Pets_Bed extends Product {
        public $materials = [];
        public $size;
        use Dimension;

        public function __construct(
            string $name,
            string $brand,
            string $price,
            string $details,
            string $img,
            $category,
            string $materials,
            string $size,
            int $length,
            int $width,
        )
        {
            parent::__construct(
                $name,
                $brand,
                $price,
                $details,
                $img,
                $category,
            );
            $this->materials = $materials;
            $this->size = $size;
            $this->length = $length;
            $this->width = $width;
        }
    }