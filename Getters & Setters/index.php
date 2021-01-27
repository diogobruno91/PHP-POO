<?php

class Product 
{
    private $name;
    private $price;
    private $description;
    private $category;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getdescription() {
        return $this->description;
    }

    public function setdescription($description) {
        $this->name = $description;
    }

    public function getcategory() {
        return $this->category;
    }

    public function setcategory($category) {
        $this->name = $category;
    }
    

}

$product = new Product();
$product->setName('Diogo Bruno');
print $product->getName();