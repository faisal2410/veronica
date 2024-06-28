<?php

// $host = "localhost";
// $dbname = "veronica";
// $username = "root";
// $password = "";

try {
    // $dsn = "mysql:host=$host;dbname=$dbname";
    $dsn = "sqlite:database.sqlite";
    // $dsn="sqlite:my_database.db";
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Create a table
    $pdo->exec('CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        email TEXT UNIQUE NOT NULL,
        password TEXT NOT NULL
    )');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
