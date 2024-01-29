<?php

class Category{
    public $name;
    public $description;
    public $iconUrl;

    public function __construct(string $_name, string $_description, string $_iconUrl )
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->iconUrl = $_iconUrl;
    }
}