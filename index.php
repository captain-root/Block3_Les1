<?php
class Car
{
    public $brand;
    public $model;
    public $color;
    public $speed;
    public $fuel;
    public $carBody;
    public function __construct($brand, $model, $color, $speed = 180 , $fuel, $carBody)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->carBody = $carBody;
    }
    public function timing($distance)
    { // расчет среднего времени в пути
        $time = $distance / $this->speed;
        return $time;
    }
}
$car1 = new Car('Mercedes', 'Benz 75', 'небесно-голубой', 250, 9, 'пикап');
$car2 = new Car('Audi', 'A8', 'белый', 240, 12, 'седан');
echo $car1->brand . '<br>';
echo $car1->model . '<br>';
echo $car1->color . '<br>';
echo $car1->carBody . '<br>';
echo $car1->timing(200) . '<br>';
echo '<hr>';
echo $car2->brand . '<br>';
echo $car2->model . '<br>';
echo $car2->color . '<br>';
echo $car2->carBody . '<br>';
echo $car2->timing(200) . '<br>';
echo '<hr>';

class TV
{
    public $brand;
    public $model;
    public $diagonal;
    public $price;
    public $hdr;
    public $smart;
    public $sleepTimer;
    public function __construct($brand, $model, $diagonal, $price, $hdr, $smart, $sleepTimer)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->price = $price;
        $this->hdr = $hdr;
        $this->smart = $smart;
        $this->sleepTimer = $sleepTimer;
    }
    public function timerSleep($bedtime)
    {
        if ($this->sleepTimer === false) {
            echo 'я телевизор ' . $this->brand . ' у меня нет функции будильника';
        } else {
            echo 'я телевизор ' . $this->brand . ' выключусь в: ' . $bedtime;
        }
    }
}
$tv1 = new TV('JVC', 'lt-40m640', 38, 18250, false, false, false);
$tv2 = new TV('samsung', 'ue40k6500bu', 32, 14790, true, true, true);


class Pen
{
    public $brand;
    public $country;
    public $colorBody;
    public $colorInk;
    public $thicknessLine;
    public $price;
    public function __construct($brand, $country, $colorBody, $colorInk, $thicknessLine, $price)
    {
        $this->brand = $brand;
        $this->country = $country;
        $this->colorBody = $colorBody;
        $this->colorInk = $colorInk;
        $this->thicknessLine = $thicknessLine;
        $this->price = $price;
    }
    public function setColorBody($color)
    {
        return $this->colorBody = $color;
    }
}
$pen1 = new Pen('PILOT', 'Китай', 'зеленый', 'зеленый', 0.5, 39.5);
$pen2 = new Pen('SUPER PILOT', 'Китай', 'синий', 'синий', 0.3, 45.5);

class Duck
{
    public $family;
    public $color;
    public $weight;
    public function __construct($family, $color, $weight)
    {
        $this->family = $family;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function fly($country)
    {
        echo ' наступает зима, утка улетает в ' . $country;
    }
}
$duck1 = new Duck('Кряква', 'черно-бело=зеленая', 1.5);
$duck2 = new Duck('Малая свистящая', 'коричнево-рыжая', 1.0);

class Product
{
    public $category;
    public $brand;
    public $model;
    public $color;
    public $description;
    public $price;
    public $height;
    public $width;
    public $weight;
    public function __construct($category, $brand, $model, $color, $description, $price, $height, $width, $weight)
    {
        $this->category = $category;
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->description = $description;
        $this->price = $price;
        $this->height = $height;
        $this->width = $width;
        $this->weight = $weight;
    }
    public function getPriceWithDiscount($discount)
    {
        $priceWithDiscount = $this->price - ($this->price * ($discount / 100));
        return $priceWithDiscount;
    }
}
$product1 = new Product('Телефоны', 'Samsung', 'GalaxyIV', 'белый',
    'средний телефон', 17500, 140, 69, 130);
$product2 = new Product('Ноутбуки', 'MSI', 'GE620DX', 'черный',
    'игровой ноутбук', 85000, 325, 265, 3650);
