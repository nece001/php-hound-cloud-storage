<?php

namespace Nece\Hound\Cloud\Storage;

use Exception;

class StorageException extends Exception
{
    public function __construct(string $message, $code = '', Exception $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->code = $code;
    }
}
