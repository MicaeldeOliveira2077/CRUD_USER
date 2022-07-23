<?php

header('Content-Type: text/html; charset=utf-8');

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'aplication';

$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) die("Falha de conexão com o banco e dados: " . $conn->connect_error);

$conn->query("SET NAMES 'utf8'");
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');

$conn->query('SET GLOBAL lc_time_names = pt_BR');
$conn->query('SET lc_time_names = pt_BR');