<?php
declare(strict_types=1);

namespace Codesum\PoorDB\Contracts;

interface IOContract
{
    public function read():array;

    public function write(array $data):bool;
}
