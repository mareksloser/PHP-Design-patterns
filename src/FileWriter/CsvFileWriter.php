<?php declare(strict_types=1);

namespace App\FileWriter;

class CsvFileWriter extends FileWriter
{
	public function writeToFile($file_name, $data): bool
	{
		try {
			$fp = fopen($this->rootDirectory() . $file_name, 'wb');

			foreach ($data as $key => $fields)
			{
				if(is_string($fields)) {
					fputcsv($fp, [$key]);
					fputcsv($fp, [$fields]);

				} else {

					fputcsv($fp, $fields);
				}
			}

			fclose($fp);

		} catch (\JsonException $e) {
			return false;
		}

		return true;
	}
}