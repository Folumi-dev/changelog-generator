<?php

namespace Folumi\ChangelogGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Yaml\Yaml;

class ChangelogFileGenerateCommand extends Command
{
    public $signature = 'changelog:file';

    public $description = 'Generate changelog file in the changelog folder.';

    public function handle(): int
    {
        $directory = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_directory');

        $issue = $this->ask('What is your issue number?');
        $title = $this->ask('What is the description of your change?');
        $contributor = $this->ask('What is the username of the contributor?');

        File::makeDirectory($directory);

        $yaml = Yaml::dump([
            'issue' => $issue,
            'title' => $title,
            'contributor' => $contributor,
        ]);

        File::put($directory.DIRECTORY_SEPARATOR.$issue.'.yml', $yaml);

        $this->comment('All done');

        return self::SUCCESS;
    }
}
