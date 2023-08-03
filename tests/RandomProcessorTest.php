<?php declare(strict_types=1);

namespace tests;

use App\FileWriter\CsvFileWriter;
use App\FileWriter\JsonFileWriter;
use App\RandomProcessor;
use Exception;
use PHPUnit\Framework\TestCase;

class RandomProcessorTest extends TestCase
{
	private array $list = [
		['Name', 'age', 'Gender'],
		['Bob', 20, 'Male'],
		['John', 25, 'Male'],
		['Jessica', 30, 'Female']
	];

	/**
	 * @throws Exception
	 */
	public function testWriteCsvData(): void
	{
		//$mockJsonWriter = $this->createMock(CsvFileWriter::class);
		//$mockJsonWriter->method('writeToFile')->willReturn(true);

		$fileWriter = new CsvFileWriter;

		$processor = new RandomProcessor($fileWriter);

		// DO SOMETHING
		$result = $processor->process('test_test.csv', $this->list);

		// MAKE ASSERTIONS
		$this->assertTrue($result);
	}

	/**
	 * @throws Exception
	 */
	public function testWriteJsonData(): void
	{
		$fileWriter = new JsonFileWriter;

		$processor = new RandomProcessor($fileWriter);

		// DO SOMETHING
		$result = $processor->process('test_test.json', $this->list);

		// MAKE ASSERTIONS
		$this->assertTrue($result);
	}
}