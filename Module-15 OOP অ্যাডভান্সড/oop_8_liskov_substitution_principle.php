<?php

// Solid -> Liskov Substitution Principle

interface Bird {
    public function eat(); // All birds can eat.
}

interface FlyingBird extends Bird {
    public function fly(); // Only birds that can fly implement this.
}

class Sparrow implements FlyingBird {
    public function eat() {
        echo "I eat seeds.\n";
    }

    public function fly() {
        echo "I can fly high.\n";
    }
}

class Penguin implements Bird {
    public function eat() {
        echo "I eat fish.\n";
    }
}

// Usage
function letBirdFly(FlyingBird $bird) {
    $bird->fly();
}

$sparrow = new Sparrow();
letBirdFly($sparrow); // Works fine.

$penguin = new Penguin();
// letBirdFly($penguin); // Error at compile time: Penguin doesn't implement FlyingBird.
// This respects LSP as Penguins are not forced to "fly."
