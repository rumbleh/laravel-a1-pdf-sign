<?php

namespace Rumbleh\LaravelA1PdfSign\Entities;

class ValidatedSignedPDF extends BaseEntity
{
    public function __construct(
        public bool  $isValidated,
        public array $data
    )
    {
    }

}
