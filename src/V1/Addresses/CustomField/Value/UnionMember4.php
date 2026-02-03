<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Addresses\CustomField\Value;

use QbilPhpSDK\Core\Concerns\SdkUnion;
use QbilPhpSDK\Core\Conversion\Contracts\Converter;
use QbilPhpSDK\Core\Conversion\Contracts\ConverterSource;

/**
 * @phpstan-type UnionMember4Variants = string|null|float|bool
 * @phpstan-type UnionMember4Shape = UnionMember4Variants
 */
final class UnionMember4 implements ConverterSource
{
    use SdkUnion;

    /**
     * @return list<string|Converter|ConverterSource>|array<string,string|Converter|ConverterSource>
     */
    public static function variants(): array
    {
        return ['string', 'float', 'float', 'bool'];
    }
}
