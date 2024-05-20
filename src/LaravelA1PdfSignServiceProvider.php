<?php

namespace Rumbleh\LaravelA1PdfSign;

use Illuminate\Support\ServiceProvider;
use Rumbleh\LaravelA1PdfSign\Commands\{SignPdfCommand, ValidatePdfSignatureCommand};

class LaravelA1PdfSignServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SignPdfCommand::class,
                ValidatePdfSignatureCommand::class
            ]);
        }
    }
}
