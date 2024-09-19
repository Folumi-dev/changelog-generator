<?php

declare(strict_types=1);

namespace Folumi\ChangelogGenerator\Commands;

use Folumi\ChangelogGenerator\Actions\GenerateChangelog;
use Illuminate\Console\Command;

final class ChangelogGenerateCommand extends Command
{
    public $signature = 'changelog:generate {version}';

    public $description = 'Generate changelog based on files in changelog folder.';

    public function __construct(
        private GenerateChangelog $generateChangelog,
    ) {
        parent::__construct();
    }

    public function handle(): int
    {
        ($this->generateChangelog)($this->argument('version'));

        return self::SUCCESS;
    }
}
