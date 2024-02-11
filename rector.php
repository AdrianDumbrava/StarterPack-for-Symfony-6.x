<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return static function (RectorConfig $rectorConfig): void {
    // register single rule
    $rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);

    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);

    // here we can define, what sets of rules will be applied
    // tip: use "SetList" class to autocomplete sets with your IDE
    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::PHP_83,
        SetList::TYPE_DECLARATION,
    ]);
};
