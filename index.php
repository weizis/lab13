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
    public function getName(){
	return $this->name;
    }
    public function getAge(){
	return $this->age;
    }
    public function getSalary(){
	return $this->salary;
    }

}

$worker1 = new Worker("Иван Петров", 25, 50000);
$worker2 = new Worker("Анна Сидорова", 30, 60000);
echo "Работник 1:<br>";
echo "  getName(): " . $worker1->getName() . "<br>";
echo "  getAge(): " . $worker1->getAge() . "<br>";
echo "  getSalary(): " . $worker1->getSalary() . " руб.<br>";

echo "Работник 2:<br>";
echo "  getName(): " . $worker2->getName() . "<br>";
echo "  getAge(): " . $worker2->getAge() . "<br>";
echo "  getSalary(): " . $worker2->getSalary() . " руб.<br>";

$sumSalary = $worker1->salary + $worker2->salary;
$sumAge = $worker1->age + $worker2->age;
echo "Сумма зарплат: " . $sumSalary . " руб.<br>";
echo "Сумма возрастов: " . $sumAge . " лет.<br>";

?>
