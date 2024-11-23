<?php

// Solid -> Interface Segregation

interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

class Developer implements Workable, Eatable {
    public function work() {
        echo "Writing code.\n";
    }

    public function eat() {
        echo "Eating lunch.\n";
    }
}

class Robot implements Workable {
    public function work() {
        echo "Working tirelessly.\n";
    }
}

// Usage
$developer = new Developer();
$developer->work(); // Outputs: Writing code.
$developer->eat();  // Outputs: Eating lunch.

$robot = new Robot();
$robot->work(); // Outputs: Working tirelessly.
// $robot->eat(); // This is not even possible, as the Robot class doesn't implement Eatable.

