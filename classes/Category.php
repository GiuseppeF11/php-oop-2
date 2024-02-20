<?php
require_once __DIR__.'./Product.php';

class Category {
        public $name;

        public function __construct(
            $name,
        )
        {
            $this->name = $name;
        }
    }

    