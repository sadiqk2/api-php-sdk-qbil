<?php

declare(strict_types=1);

namespace QbilPhpSDK\Core\Conversion;

use QbilPhpSDK\Core\Conversion\Concerns\ArrayOf;
use QbilPhpSDK\Core\Conversion\Contracts\Converter;

/**
 * @internal
 */
final class MapOf implements Converter
{
    use ArrayOf;
}
