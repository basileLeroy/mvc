<?php

declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'Modal/DatabaseManager.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['databaseName']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection