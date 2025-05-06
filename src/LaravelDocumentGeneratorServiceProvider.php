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
            ->hasMigration('create_laravel_document_generator_table')
            ->hasViews("laravel-document-generator")
            ->hasCommand(LaravelDocumentGeneratorCommand::class);
    }
}
