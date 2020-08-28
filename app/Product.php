<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //attributes id, name , price, created at, updated at

    protected $fillable = ['name', 'price'];

    public function getId() {
        return $this->attributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'] = $id;
    }
    
    public function getName() {
        return $this->attributes['name'];
    }

    public function setName($name) {
        $this->attributes['name'] = $name;
    }
    
    public function getPrice() {
        return $this->attributes['price'];
    }

    public function setPrice($price) {
        $this->attributes['price'] = $price;
    }
}
