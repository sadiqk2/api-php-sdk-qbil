<?php

declare(strict_types=1);

namespace QbilPhpSDK\Core\Conversion;

use QbilPhpSDK\Core\Conversion\Concerns\ArrayOf;
use QbilPhpSDK\Core\Conversion\Contracts\Converter;

/**
 * @internal
 */
final class ListOf implements Converter
{
    use ArrayOf;

    // @phpstan-ignore-next-line missingType.iterableValue
    private function empty(): array|object
    {
        return [];
    }
}
