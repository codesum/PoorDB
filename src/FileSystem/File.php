<?php

declare(strict_types=1);

namespace Codesum\PoorDB\FileSystem;

class File
{
    private $fileHandler = null;

    public function __construct($filePath = null)
    {
        $this->fileHandler = new FileIO($filePath);
    }

    public function read()
    {
        try {
            return $this->fileHandler->read();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
