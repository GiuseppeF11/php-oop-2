<?php

trait Dimension {
    public $length;
    public $width;
    public function __construct( int $length, int $width) {
        $this->length = $length;
        $this->width = $width;
    }
}