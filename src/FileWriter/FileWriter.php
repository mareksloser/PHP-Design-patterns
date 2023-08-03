<?php declare(strict_types=1);

namespace App\FileWriter;

abstract class FileWriter
{
	public function __construct()
	{
		if(!is_dir($this->rootDirectory())) {
			throw new \Exception("Folder {$this->rootDirectory()} not found");
		}
	}

	public function rootDirectory($folder_name = 'data'): string
	{
		return dirname(__DIR__, 2) . DIRECTORY_SEPARATOR  . $folder_name . DIRECTORY_SEPARATOR;
	}

	abstract public function writeToFile(string $file_name, array $data): bool;
}