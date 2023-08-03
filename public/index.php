<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$list = array(
	['Name', 'age', 'Gender'],
	['Bob', 20, 'Male'],
	['John', 25, 'Male'],
	['Jessica', 30, 'Female']
);

$csvFileWriter = new \App\FileWriter\CsvFileWriter;
$jsonFileWriter = new \App\FileWriter\JsonFileWriter;

$process = new \App\RandomProcessor($jsonFileWriter);
$process->process('test.json', $list);
