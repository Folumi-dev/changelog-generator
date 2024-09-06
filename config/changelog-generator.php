<?php

declare(strict_types=1);

return [
    'changelog_directory' => env('CHANGELOG_DIRECTORY', 'changelogs'),
    'changelog_location' => env('CHANGELOG_DIRECTORY', 'CHANGELOG.md'),
    'changelog_date_format' => env('CHANGELOG_DATE_FORMAT', 'Y-m-d'),
];
