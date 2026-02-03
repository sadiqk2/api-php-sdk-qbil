<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Addresses;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField\Value;

/**
 * @phpstan-import-type ValueVariants from \QbilPhpSDK\V1\Addresses\CustomField\Value
 * @phpstan-import-type ValueShape from \QbilPhpSDK\V1\Addresses\CustomField\Value
 *
 * @phpstan-type CustomFieldShape = array{
 *   key?: string|null, value?: ValueShape|null
 * }
 */
final class CustomField implements BaseModel
{
    /** @use SdkModel<CustomFieldShape> */
    use SdkModel;

    #[Optional]
    public ?string $key;

    /** @var ValueVariants|null $value */
    #[Optional(union: Value::class)]
    public string|bool|float|array|null $value;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param ValueShape|null $value
     */
    public static function with(
        ?string $key = null,
        string|bool|float|array|null $value = null
    ): self {
        $self = new self;

        null !== $key && $self['key'] = $key;
        null !== $value && $self['value'] = $value;

        return $self;
    }

    public function withKey(string $key): self
    {
        $self = clone $this;
        $self['key'] = $key;

        return $self;
    }

    /**
     * @param ValueShape $value
     */
    public function withValue(string|bool|float|array|null $value): self
    {
        $self = clone $this;
        $self['value'] = $value;

        return $self;
    }
}
