<?php

declare(strict_types=1);

use Folumi\ChangelogGenerator\Actions\YmlFileGenerate;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

it('can generate changelog file', function () {
    $directory = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_directory');

    File::ensureDirectoryExists($directory);

    $this->artisan('changelog:file')
        ->expectsQuestion('What is your issue number?', '#1234')
        ->expectsQuestion('What is the description of your change?', 'test change')
        ->expectsQuestion('What is the username of the contributor?', 'author')
        ->assertSuccessful();

    $changelog = File::get($directory.DIRECTORY_SEPARATOR.'1234.yml');

    expect($changelog)
        ->toContain('issue:')
        ->toContain('#1234')
        ->toContain('contributor:')
        ->toContain('author')
        ->toContain('description:')
        ->toContain('test change');

    File::delete($directory.DIRECTORY_SEPARATOR.'1234.yml');
});
