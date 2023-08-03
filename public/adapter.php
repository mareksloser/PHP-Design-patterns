<?php declare(strict_types=1);

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$list = array(
	['Name', 'age', 'Gender'],
	['Bob', 20, 'Male'],
	['John', 25, 'Male'],
	['Jessica', 30, 'Female']
);

$newCsvFileWriter = new \App\FileWriter\NewCsvFileWriter;
$fileWriter = new \App\FileWriter\Adapters\NewCsvFileWriterAdapter($newCsvFileWriter);

$process = new \App\RandomProcessor($fileWriter);
$process->process('test.json', $list);