<?php declare(strict_types=1);

namespace App\FileWriter\Adapters;

use App\FileWriter\FileWriter;
use App\FileWriter\NewFileWriter;


class NewCsvFileWriterAdapter extends FileWriter
{
	private NewFileWriter $fileWriter;

	/**
	 * @throws \Exception
	 */
	public function __construct(NewFileWriter $fileWriter)
	{
		parent::__construct();

		$this->fileWriter = $fileWriter;
	}
	
	public function writeToFile(string $file_name, array $data): bool
	{
		$this->fileWriter->write($data);

		return true;
	}
}