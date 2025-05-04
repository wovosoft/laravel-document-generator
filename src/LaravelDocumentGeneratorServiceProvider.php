<?php

namespace Wovosoft\LaravelDocumentGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wovosoft\LaravelDocumentGenerator\Commands\LaravelDocumentGeneratorCommand;

class LaravelDocumentGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-document-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_document_generator_table')
            ->hasCommand(LaravelDocumentGeneratorCommand::class);
    }
}
