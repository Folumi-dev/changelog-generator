<?php

namespace Folumi\ChangelogGenerator;

use Folumi\ChangelogGenerator\Commands\ChangelogGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ChangelogGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('changelog-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_changelog_generator_table')
            ->hasCommand(ChangelogGeneratorCommand::class);
    }
}
