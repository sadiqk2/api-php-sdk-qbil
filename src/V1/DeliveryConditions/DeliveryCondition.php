<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\DeliveryConditions;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type DeliveryConditionShape = array{
 *   code?: string|null, description?: string|null
 * }
 */
final class DeliveryCondition implements BaseModel
{
    /** @use SdkModel<DeliveryConditionShape> */
    use SdkModel;

    #[Optional]
    public ?string $code;

    #[Optional]
    public ?string $description;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(
        ?string $code = null,
        ?string $description = null
    ): self {
        $self = new self;

        null !== $code && $self['code'] = $code;
        null !== $description && $self['description'] = $description;

        return $self;
    }

    public function withCode(string $code): self
    {
        $self = clone $this;
        $self['code'] = $code;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }
}
