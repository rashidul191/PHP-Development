<?php

// Solid ->  Dependency Inversion Principle

interface Database {
    public function connect();
}

class MySQLDatabase implements Database {
    public function connect() {
        echo "Connecting to MySQL Database.\n";
    }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        echo "Connecting to PostgreSQL Database.\n";
    }
}

class UserRepository {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getUserData() {
        $this->database->connect();
        echo "Fetching user data.\n";
    }
}

// Usage
$mysqlDatabase = new MySQLDatabase();
$userRepository = new UserRepository($mysqlDatabase);
$userRepository->getUserData(); // Works with MySQL Database.

$postgresDatabase = new PostgreSQLDatabase();
$userRepository = new UserRepository($postgresDatabase);
$userRepository->getUserData(); // Works with PostgreSQL Database.
