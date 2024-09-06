<?php

use \Illuminate\Support\Facades\Artisan;
use \Folumi\ChangelogGenerator\Commands\ChangelogGeneratorCommand;

it('can test', function () {
    /*$directory = base_path() . config('changelog-generator.changelog_directory');

    mkdir($directory, 0777);

    file_put_contents(config('changelog_directory') . '/test.yml', <<<yml
        issue: #1234
        title: test ticket
        contributor: @GeNyaa
        yml
    );*/

    Artisan::call(ChangelogGeneratorCommand::class, [
        'version' => 'v1.0.0',
    ]);
});
