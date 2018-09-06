<?php

declare(strict_types=1);

namespace Codesum\PoorDB\Exceptions;

use Exception;
use Throwable;

class InvalidDataSourceException extends Exception
{
    public function __construct(string $message = "Invalid Data Source Exception", int $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
