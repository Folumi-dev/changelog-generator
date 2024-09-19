<?php

declare(strict_types=1);

namespace Folumi\ChangelogGenerator;

use Folumi\ChangelogGenerator\Commands\ChangelogFileGenerateCommand;
use Folumi\ChangelogGenerator\Commands\ChangelogGenerateCommand;
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
            ->hasCommands(
                ChangelogGenerateCommand::class,
                ChangelogFileGenerateCommand::class,
            )
            ->hasTranslations();
    }
}
