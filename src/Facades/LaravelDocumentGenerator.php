<?php

namespace Wovosoft\LaravelDocumentGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wovosoft\LaravelDocumentGenerator\LaravelDocumentGenerator
 */
class LaravelDocumentGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Wovosoft\LaravelDocumentGenerator\LaravelDocumentGenerator::class;
    }
}
