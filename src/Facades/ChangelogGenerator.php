<?php

namespace Folumi\ChangelogGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Folumi\ChangelogGenerator\ChangelogGenerator
 */
class ChangelogGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Folumi\ChangelogGenerator\ChangelogGenerator::class;
    }
}
