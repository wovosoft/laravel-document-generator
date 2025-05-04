<?php

namespace Wovosoft\LaravelDocumentGenerator\Commands;

use Illuminate\Console\Command;

class LaravelDocumentGeneratorCommand extends Command
{
    public $signature = 'laravel-document-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
