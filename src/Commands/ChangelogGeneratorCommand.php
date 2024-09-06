<?php

namespace Folumi\ChangelogGenerator\Commands;

use Illuminate\Console\Command;

class ChangelogGeneratorCommand extends Command
{
    public $signature = 'changelog:generate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
