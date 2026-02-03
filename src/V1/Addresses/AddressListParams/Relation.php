<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Addresses\AddressListParams;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type RelationShape = array{shortCode?: string|null}
 */
final class Relation implements BaseModel
{
    /** @use SdkModel<RelationShape> */
    use SdkModel;

    #[Optional]
    public ?string $shortCode;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(?string $shortCode = null): self
    {
        $self = new self;

        null !== $shortCode && $self['shortCode'] = $shortCode;

        return $self;
    }

    public function withShortCode(string $shortCode): self
    {
        $self = clone $this;
        $self['shortCode'] = $shortCode;

        return $self;
    }
}
