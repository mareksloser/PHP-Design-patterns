<?php declare(strict_types=1);

namespace App\FileWriter;

interface NewFileWriter
{
	public function write($data);
}