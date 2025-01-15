<?php

// 1. Integer (Tam Sayılar)
$age = 25;
echo "Integer: " . $age . "\n"."</br>"; // Çıktı: 25

// 2. Float (Ondalık Sayılar)
$price = 19.99;
echo "Float: " . $price . "\n"."</br>"; // Çıktı: 19.99

// 3. String (Metinler)
$name = "Emre";
echo "String: " . $name . "\n"."</br>"; // Çıktı: Emre

// 4. Boolean (Mantıksal Değerler: true/false)
$is_student = true;
echo "Boolean (true): " . $is_student . "\n"."</br>"; // Çıktı: 1 (PHP 'true' değerini 1 olarak gösterir)

$is_employee = false;
echo "Boolean (false): " . $is_employee . "\n"."</br>"; // Çıktı: (boş, çünkü false)

// 5. Array (Diziler)
$fruits = array("Elma", "Armut", "Muz");
echo "Array: " . $fruits[0] . ", " . $fruits[1] . ", " . $fruits[2] . "\n"."</br>"; // Çıktı: Elma, Armut, Muz

// 6. Object (Nesneler)
class Car {
    public $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function get_model() {
        return $this->model;
    }
}

$myCar = new Car("Tesla");
echo "Object: " . $myCar->get_model() . "\n"; // Çıktı: Tesla

// 7. NULL (Boş Değer)
$nothing = null;
echo "NULL: " . var_export($nothing, true) . "\n"; // Çıktı: NULL


?>

