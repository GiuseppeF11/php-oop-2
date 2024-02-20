<?php
require_once __DIR__.'./Product.php';

class Food extends Product {
        public $expirationDate;
        public $expired = false;
        public $composition;
        public $allergies;
        public $weight;

        public function __construct(
            string $name,
            string $category,
            string $brand,
            string $price,
            string $details,
            string $img,
            /* Categorie $category, */
            string $expirationDate,
            string $composition,
            string $allergies,
            int $weight,
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
            $this->expirationDate = $expirationDate;

            $this->expiredFnc($expirationDate);
            
            $this->composition = $composition;
            $this->allergies = $allergies;
            $this->weight = $weight;
        }

        public function expiredFnc($expirationDate) {
            $currentDate = date('Y-m-d');
            if ($expirationDate < $currentDate) {
                $this->expired = true;
            }else{
                $this->expired = false;
            }
        }
    }

    