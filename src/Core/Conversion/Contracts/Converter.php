<?php

declare(strict_types=1);

namespace QbilPhpSDK\Core\Conversion\Contracts;

use QbilPhpSDK\Core\Conversion\CoerceState;
use QbilPhpSDK\Core\Conversion\DumpState;

/**
 * @internal
 */
interface Converter
{
    /**
     * @internal
     */
    public function coerce(mixed $value, CoerceState $state): mixed;

    /**
     * @internal
     */
    public function dump(mixed $value, DumpState $state): mixed;
}
