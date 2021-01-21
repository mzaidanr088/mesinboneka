<?php

Class Doll{
    private $name;
    private $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
}

$Dolls = [
    new Doll('Bear', 900000),
    new Doll('Eagle', 900000),
    new Doll('Tiger', 900000),
    new Doll('Dragon', 900000),
    new Doll('Lion', 900000),
];

//method menambahkan asesoris

Class Accessories{
    private $name;
    private $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
}

$accessories = [
    new Accessory('Hat', 30000),
    new Accessory('Stick', 20000),
    new Accessory('Sword', 50000),
    new Accessory('Shild', 40000),
    new Accessory('Magic Ring', 120000),
    new Accessory('Angel wings', 100000),
];

//method pembayaran
Class Payment{
    private $Doll = null;
    private $accessories = [];
    private $total = 0;
    public function __construct(){
    }

    public function selectDoll(Doll $Doll){
        $this->Doll = $Doll;
    }


    public function addAccessory(Accessory $accessory){
        $this->accessories[] = $accessory;
    }

    public function getDoll(){
        return $this->Doll;
    }

    public function getAccessories(){
        return $this->accessories;
    }

    public function discount1(){
        $hasSword = false;
        $hasShild = false;

        foreach ($this->accessories as $accessory){
            if ($accessory->getName() === "Sword") $hasSword = true;
            if ($accessory->getName() === "Shild") $hasShild = true;
        }

        if ($hasSword && $hasShild){
            $this->total = $this->total + 0.10;
     }
    }

    public function discount2(){
        $hasHat = false;
        $hasAngelWings = false;

        foreach ($this->accessories as $accessory){
            if ($accessory->getName() === "Hat") $hasHat = true;
            if ($accessory->getName() === "AngelWings") $hasAngelWings = true;
        }

        if ($hasTopi && $hasAngelWings){
            $this->total = $this->total + 0.13;
    }
    }

    public function discount3(){
        if (isset($this->accessories[2]) && $this->accessories[2] . getName() === "Magic ring"){
            $this->total = $this->total + 0.2;
    }
    }

    public function calculate(){
        $this->total = $this->doll->getPrice();

        foreach ($this->accessories  as $accessory) {
            $this->total += $accessory->getPrice();
        }

        $this->discount1()
        $this->discount2();
        $this->discount3();
    }

    public function getTotal(){
        return $this->total;
  }
}
