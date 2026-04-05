<?php
class Worker {
    public $name;
    private $age;
    public $salary;
    
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName(){
	return $this->name;
    }
    public function setAge($newAge){
	$this->age=$newAge;
    }
    public function getAge(){
	return $this->age;
    }
    public function getSalary($workers){
	  $total=0;
	  foreach ($workers as $worker){
		$total+=$worker->salary;
	  }
	  return $total;
    }
}


$worker1 = new Worker("Иван Петров", 25, 50000);
$worker2 = new Worker("Анна Сидорова", 30, 60000);
$workers = [$worker1, $worker2];

echo "Работник 1:<br>";
echo "  getName(): " . $worker1->getName() . "<br>";
echo "  getAge(): " . $worker1->getAge() . "<br>";
echo "  salary: " . $worker1->salary . " руб.<br>";

echo "Работник 2:<br>";
echo "  getName(): " . $worker2->getName() . "<br>";
echo "  getAge(): " . $worker2->getAge() . "<br>";
echo "  salary: " . $worker2->salary . " руб.<br>";

$totalSalary = $worker1->getSalary($workers);
$sumAge = $worker1->getAge() + $worker2->getAge();
echo "Сумма зарплат через getSalary(): " . $totalSalary . " руб.<br>";
echo "Сумма возрастов: " . $sumAge . " лет.<br>";

echo "До изменения: возраст worker1 = " . $worker1->getAge() . "<br>";
$worker1->setAge(35);
echo "После setAge(35): возраст worker1 = " . $worker1->getAge() . "<br>";
?>
