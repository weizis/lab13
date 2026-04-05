<?php
class Worker {
    public $name;
    public $age;
    public $salary;
    
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$worker1 = new Worker("Иван Петров", 25, 50000);
$worker2 = new Worker("Анна Сидорова", 30, 60000);
echo "Работник 1: " . $worker1->name . ", " . $worker1->age . " лет, " .
 $worker1->salary . " руб.<br>";
echo "Работник 2: " . $worker2->name . ", " . $worker2->age . " лет, " .
 $worker2->salary . " руб.<br>";

$sumSalary = $worker1->salary + $worker2->salary;
$sumAge = $worker1->age + $worker2->age;
echo "Сумма зарплат: " . $sumSalary . " руб.<br>";
echo "Сумма возрастов: " . $sumAge . " лет.<br>";

?>
