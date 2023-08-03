<?php declare(strict_types=1);

namespace App\FileWriter;

class NullFileWriter extends FileWriter
{

	public function writeToFile(string $file_name, array $data): bool
	{
		return true;
	}
}