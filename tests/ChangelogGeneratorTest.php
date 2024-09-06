<?php

use Folumi\ChangelogGenerator\Commands\ChangelogGenerateCommand;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

it('can generate changelog', function () {
    $directory = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_directory');
    $changelogLocation = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_location');

    File::makeDirectory($directory);

    File::put(
        $directory.'/test.yml',
        <<<'yml'
        title: 'test change'
        issue: '#1234'
        contributor: '@GeNyaa'
        yml
    );

    Artisan::call(ChangelogGenerateCommand::class, [
        'version' => 'v1.0.0',
    ]);

    $changelog = File::get($changelogLocation);

    expect($changelog)
        ->toStartWith('# Changelog')
        ->toContain('@GeNyaa')
        ->toContain('test change')
        ->toContain('#1234');
});
