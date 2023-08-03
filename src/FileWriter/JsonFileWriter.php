<?php declare(strict_types=1);

namespace App\FileWriter;

class JsonFileWriter extends FileWriter
{

	public function writeToFile($file_name, $data): bool
	{
		try {
			$dataJson = json_encode($data, JSON_THROW_ON_ERROR);
		} catch (\JsonException $e) {
			return false;
		}

		return (bool) file_put_contents($this->rootDirectory() . $file_name, $dataJson);
	}
}