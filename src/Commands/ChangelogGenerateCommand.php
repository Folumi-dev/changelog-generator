<?php

namespace Folumi\ChangelogGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class ChangelogGenerateCommand extends Command
{
    public $signature = 'changelog:generate {version}';

    public $description = 'Generate changelog based on files in changelog folder.';

    public function handle(): int
    {
        $directory = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_directory');
        $changelogLocation = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_location');
        $date = Carbon::now()->format(config('changelog-generator.changelog_date_format'));

        $files = collect(scandir($directory))->filter(function (string $filename) {
            if ($filename === '.' || $filename === '..') {
                return false;
            }

            return true;
        });

        $changelogFileContents = '';

        if (File::exists($changelogLocation)) {
            $changelogFileContents = File::get($changelogLocation);
        }

        $changelog = Str::of($changelogFileContents)
            ->replace("# Changelog\n", '');

        $files->each(function (string $file) use ($directory, &$changelog) {
            $filePath = $directory.'/'.$file;

            $data = Yaml::parseFile($filePath);

            $changelog = $changelog->prepend("* [{$data['issue']}] {$data['title']} by {$data['contributor']} \n");

            File::delete($filePath);
        });

        $changelog = $changelog->prepend("\n")
            ->prepend("## {$this->argument('version')} - {$date}\n")
            ->prepend("\n")
            ->prepend("# Changelog\n");

        File::replace($changelogLocation, $changelog->toString());

        $this->comment('All done');

        return self::SUCCESS;
    }
}
