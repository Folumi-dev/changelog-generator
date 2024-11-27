# Changelog

All notable changes to `changelog-generator` will be documented in this file.

## v1.2.1 - 2024-11-27

- Fixed bug with return typing
- Added test for file generation command

**Full Changelog**: https://github.com/Folumi-dev/changelog-generator/compare/v1.2.0...v1.2.1

## v1.2.0 - 2024-09-19

* Added translations file for more customization
* Fix a bug with testing if it was ran multiple times in a row
* Changed title to description in yml ***Update all yml files from title to description***
* Moved the actual actions of the commands into classes so they can be used outside of commands

**Full Changelog**: https://github.com/Folumi-dev/changelog-generator/compare/v1.1.2...v1.2.0

## v1.1.2 - 2024-09-06

- Fixed issue with Str class use missing.

## v1.1.1 - 2024-09-06

- Fixed issue with folder creation, if folder already existed.
- Removes # and @ from input to prevent duplication.

## v1.1.0 - 2024-09-06

- Added yml file generator command `php artisan changelog:file`

## v1.0.0 - 2024-09-06

Initial release
