<?php

declare(strict_types=1);

namespace Codesum\PoorDB\FileSystem;

use Exception;
use Codesum\PoorDB\Contracts\IOContract;
use Codesum\PoorDB\Exceptions\InvalidDataSourceException;

class FileIO implements IOContract
{
    private $file = null;

    public function __construct($filePath = null)
    {
        $this->file = $filePath;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function read(): array
    {
        if (! file_exists($this->file)) {
            throw new InvalidDataSourceException();
        }

        try {
            $fileRef = fopen($this->file, 'r');

            if(! $fileRef) {
                throw new Exception('Failed to Open file.');
            }

            $fileData = fread($fileRef, filesize($this->file));
            fclose($fileRef);

            $data = json_decode($fileData, true);
        } catch (\Exception $e) {
            throw $e;
        }

        return $data;
    }

    public function write(array $data): bool
    {
        // TODO: Implement write() method.
    }
}
