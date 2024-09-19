<?php

declare(strict_types=1);

namespace Folumi\ChangelogGenerator\Actions;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Yaml\Yaml;

final readonly class GenerateChangelog
{
    public function __invoke(string $version)
    {
        $directory = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_directory');
        $changelogLocation = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_location');
        $date = Carbon::now()->format(config('changelog-generator.changelog_date_format'));

        $files = collect(File::allFiles($directory)
            ->filter(function (SplFileInfo $file) {
                return Str::of($file->getPathname())->endsWith('.yml');
            }));

        $changelogFileContents = '';

        if (File::exists($changelogLocation)) {
            $changelogFileContents = File::get($changelogLocation);
        }

        $changelog = Str::of($changelogFileContents)
            ->replace("# Changelog\n", '');

        $files->each(function (SplFileInfo $file) use (&$changelog) {

            $data = Yaml::parseFile($file->getContents());

            if (! isset($data['issue'], $data['description'], $data['contributor'])) {
                return;
            }

            $changelog = $changelog->prepend("* [{$data['issue']}] {$data['description']} by {$data['contributor']} \n");

            File::delete($file->getRealPath());
        });

        $changelog = $changelog->prepend("\n")
            ->prepend("## {$version} - {$date}\n")
            ->prepend("\n")
            ->prepend("# Changelog\n");

        File::replace($changelogLocation, $changelog->toString());
    }
}
