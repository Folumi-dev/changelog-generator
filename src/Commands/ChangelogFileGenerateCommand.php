<?php

declare(strict_types=1);

namespace Folumi\ChangelogGenerator\Commands;

use Folumi\ChangelogGenerator\Actions\YmlFileGenerate;
use Illuminate\Console\Command;

final class ChangelogFileGenerateCommand extends Command
{
    public $signature = 'changelog:file';

    public $description = 'Generate changelog file in the changelog folder.';

    public function __construct(
        private readonly YmlFileGenerate $ymlFileGenerate,
    ) {
        parent::__construct();
    }

    public function handle(): int
    {
        $issue = $this->ask('What is your issue number?');
        $description = $this->ask('What is the description of your change?');
        $contributor = $this->ask('What is the username of the contributor?');

        return (int) ($this->ymlFileGenerate)($issue, $description, $contributor);
    }
}
