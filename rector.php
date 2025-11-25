<?php

/**
 * Rector configuration.
 *
 * @see https://getrector.com/documentation
 */

declare(strict_types=1);

use Rector\Caching\ValueObject\Storage\FileCacheStorage;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withAttributesSets()
    ->withCache(
        // Parameter: cacheDirectory
        '/tmp/rector',
        // Parameter: cacheClass
        // Ensure file system caching is used instead of in-memory.
        FileCacheStorage::class,
    )
    ->withComposerBased(
        phpunit: true,
    )
    ->withImportNames(
        importNames: true,
        importDocBlockNames: true,
        importShortClasses: true,
        removeUnusedImports: true,
    )
    ->withPaths([
        __DIR__,
    ])
    ->withPhpSets()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        privatization: true,
        instanceOf: true,
        earlyReturn: true,
        phpunitCodeQuality: true,
    )
    ->withRootFiles()
;
