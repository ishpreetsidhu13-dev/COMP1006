/1. Set Up & Start


//2. Code Commenting

// inline Comment

<?php
declare(strict_types=1);


//3. Variables, Data Tyoes, Concatenation, Conditional Statements & Echo
$firstName = "Harmanjeet"; // string
$lastName = "Singh"; // string
$age = 20; // int
$isStudent = true; // boolean

echo "<p>Hello there, my name is " . $firstName . " " . $lastName . "</p>";

if ($isStudent) {
    echo "<p>I am a student and I am " . $age . " years old.</p>";
} else {
    echo "<p> opps I am not a student.</p>";
}
//4. Loosely Typed Language Demo
$num1= 1;
$num2= "10";

function add(int $num1, int $num2) :int {
    return $num1 + $num2;
}
$result = add($num1, (int)$num2);
echo "<p>" . $result . "</p>";
//5. Strict Types & Types Hints
declare(strict_types=1);


//6. OOP with PHP 

class Person {
    private string $firstName;
    private string $lastName;
    private int $age;

    public function __construct(string $firstName, string $lastName, int $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function introduce(): string {
        return "Hello, my name is " . $this->firstName . " " . $this->lastName . " and I am " . $this->age . " years old.";
    }
}

$person = new Person("Harmanjeet", "Singh", 20);
echo "<p>" . $person->introduce() . "</p>";