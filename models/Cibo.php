<?php

require_once __DIR__  . '/Product.php';

class Cibo extends Product{
    public $croccantini; 
    public $umido;

    public function __construct(string $_name, string $_description, float $_price,  string $_imageUrl, bool $_isInStock, int $_quantity, Category $_category, bool $_croccantini, bool $_umido){
        parent::__construct($_name, $_description, $_price,  $_imageUrl, $_isInStock, $_quantity, $_category);
        $this->croccantini = $_croccantini;
        $this->umido = $_umido;
    }
}