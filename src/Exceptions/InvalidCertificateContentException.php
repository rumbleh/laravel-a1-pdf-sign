<?php

namespace Rumbleh\LaravelA1PdfSign\Exceptions;

use Exception;
use Stringable;

class InvalidCertificateContentException extends Exception implements Stringable
{
    public function __construct(int $code = 0, Exception $previous = null)
    {
        $message = 'Invalid file content, accept only valid OpenSSLCertificate.';
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
