<?php



class Car
{
	public $model;
	public $color;
	public $price;
	public function __construct($model, $color, $price)
	{
		$this->model = $model;
		$this->color = $color;
		$this->price = $price;
	}
	public function getInfo()
	{
		echo $this->model . PHP_EOL;
        echo $this->color . PHP_EOL;
        echo $this->price . PHP_EOL;
        $this->br();
	}
	private function br()
	{
		echo '<br>';
	}
}

$toyota = new Car('Toyota Prius', 'red', '12000$');
$kia = new Car('Kia Rio', 'black', '11300$');


class TV
{
	public $model;
	public $color;
	public $price;
	public function __construct($model, $color, $price)
	{
		$this->model = $model;
		$this->color = $color;
		$this->price = $price;
	}
	public function getInfo()
	{
		echo $this->model . PHP_EOL;
        echo $this->color . PHP_EOL;
        echo $this->price . PHP_EOL;
        $this->br();
	}
	private function br()
	{
		echo '<br>';
	}
}

$samsung = new TV('Samsung wfr4444', 'black', '350$');
$lg = new TV('LG php1', 'white', '300$');

class Pen
{
	public $model;
	public $color;
	public $price;
	public function __construct($model, $color, $price)
	{
		$this->model = $model;
		$this->color = $color;
		$this->price = $price;
	}
	public function getInfo()
	{
		echo $this->model . PHP_EOL;
        echo $this->color . PHP_EOL;
        echo $this->price . PHP_EOL;
        $this->br();
	}
	private function br()
	{
		echo '<br>';
	}
}
$w1 = new Pen('Шариковая ручка 1', 'black', '1$');
$w2 = new Pen('Шариковая ручка 2', 'black', '1$');

class Duck
{
	public $name;
	public $color;
	public function __construct($name, $color)
	{
		$this->name = $name;
		$this->color = $color;
	}
	public function getInfo()
	{
		echo $this->name . PHP_EOL;
        echo $this->color . PHP_EOL;
        $this->br();
	}
	private function br()
	{
		echo '<br>';
	}
}
$duck1 = new Duck('Donald Duck', 'white');
$duck2 = new Duck('Goward Duck', 'yellow');

class Product
{
	public $name;
    public $quantity;
    public $price;
    
	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
	public function getInfo()
	{
		echo $this->name . PHP_EOL;
        echo $this->price . PHP_EOL;
        $this->br();
	}
	private function br()
	{
		echo '<br>';
	}
}

$cake = new Product('Наполеон', '17$');

$coffee = new Product('Старбакс', '110$');

?>