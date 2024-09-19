<?php

declare(strict_types=1);

namespace Folumi\ChangelogGenerator\Actions;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

final readonly class YmlFileGenerate
{
    public function __invoke(
        string|int $issue,
        string $description,
        string $contributor,
    ): bool {
        $directory = base_path().DIRECTORY_SEPARATOR.config('changelog-generator.changelog_directory');

        File::ensureDirectoryExists($directory);

        $yaml = Yaml::dump([
            'issue' => Str::of($issue)
                ->remove('#')
                ->prepend('#')
                ->toString(),
            'description' => $description,
            'contributor' => Str::of($contributor)
                ->remove('@')
                ->prepend('@')
                ->toString(),
        ]);

        return File::put($directory.DIRECTORY_SEPARATOR.$issue.'.yml', $yaml);
    }
}
