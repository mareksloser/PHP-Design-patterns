<?php declare(strict_types=1);

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$list = array(
	['Name', 'age', 'Gender'],
	['Bob', 20, 'Male'],
	['John', 25, 'Male'],
	['Jessica', 30, 'Female']
);

$nullFileWriter = new \App\FileWriter\NullFileWriter;

$process = new \App\RandomProcessor($nullFileWriter);
$process->process('test.null', $list);