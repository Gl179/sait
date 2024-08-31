<?php
// Базовый класс
class Car {
    private $brand;
    private $model;
    private $color;

    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }

    public function displayInfo() {
        return "Car: " . $this->getBrand() . " " . $this->getModel() . ", Color: " . $this->getColor();
    }
}

// Наследуемый класс
class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($brand, $model, $color, $batteryCapacity) {
        parent::__construct($brand, $model, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }

    public function displayInfo() {
        return parent::displayInfo() . ", Battery Capacity: " . $this->getBatteryCapacity() . " kWh";
    }
}

// Создание объекта
$myElectricCar = new ElectricCar("Tesla", "Model S", "Black", 100);

// Вывод информации
echo $myElectricCar->displayInfo(); 
// Получение марки автомобиля
echo $myElectricCar->getBrand(); // Выведет: Tesla

// Получение емкости аккумулятора
echo $myElectricCar->getBatteryCapacity(); // Выведет: 100

// Изменение цвета автомобиля - не работает, так как свойство `color` private
// $myElectricCar->color = "Blue"; // Ошибка!

?>
