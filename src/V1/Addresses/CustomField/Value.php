<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Addresses\CustomField;

use QbilPhpSDK\Core\Concerns\SdkUnion;
use QbilPhpSDK\Core\Conversion\Contracts\Converter;
use QbilPhpSDK\Core\Conversion\Contracts\ConverterSource;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\V1\Addresses\CustomField\Value\UnionMember4;

/**
 * @phpstan-import-type UnionMember4Shape from \QbilPhpSDK\V1\Addresses\CustomField\Value\UnionMember4
 *
 * @phpstan-type ValueVariants = string|null|bool|float|list<string|null|float|bool>
 * @phpstan-type ValueShape = ValueVariants|list<UnionMember4Shape>
 */
final class Value implements ConverterSource
{
    use SdkUnion;

    /**
     * @return list<string|Converter|ConverterSource>|array<string,string|Converter|ConverterSource>
     */
    public static function variants(): array
    {
        return [
            'string', 'bool', 'float', 'float', new ListOf(UnionMember4::class),
        ];
    }
}
