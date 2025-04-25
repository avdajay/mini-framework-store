<?php

class Product extends Database
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $image_url;

    public function __construct($id, $name, $description, $price, $image_url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image_url = $image_url;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

}