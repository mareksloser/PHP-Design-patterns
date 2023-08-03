<?php declare(strict_types=1);

namespace App;

use App\FileWriter\FileWriter;

class RandomProcessor
{
	private FileWriter $fileWriter;

	public function __construct(FileWriter $fileWriter)
	{

		$this->fileWriter = $fileWriter;
	}

	public function process(string $file_name, array $data): bool
	{
		$result = $this->fileWriter->writeToFile($file_name, $data);

		if(!$result) {

			throw new \Exception('Error writing to file');
		}

		return true;
	}
}