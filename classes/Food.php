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
            string $brand,
            string $price,
            string $details,
            string $img,
            $category,
            string $expirationDate,
            string $composition,
            string $allergies,
            $weight,
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
            $this->expirationDate = $expirationDate;

            $this->expiredFnc($expirationDate);
            
            $this->composition = $composition;
            $this->allergies = $allergies;
            if (is_int($weight)) {
                $this->weight = $weight;
            }
            else {
                throw new Exception('ERRORE: Is not a Int');
            }
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

    