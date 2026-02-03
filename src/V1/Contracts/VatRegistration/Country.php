<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\VatRegistration;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type CountryShape = array{
 *   code?: string|null, isEuMember?: bool|null, name?: string|null
 * }
 */
final class Country implements BaseModel
{
    /** @use SdkModel<CountryShape> */
    use SdkModel;

    #[Optional]
    public ?string $code;

    #[Optional]
    public ?bool $isEuMember;

    #[Optional]
    public ?string $name;

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
        ?bool $isEuMember = null,
        ?string $name = null
    ): self {
        $self = new self;

        null !== $code && $self['code'] = $code;
        null !== $isEuMember && $self['isEuMember'] = $isEuMember;
        null !== $name && $self['name'] = $name;

        return $self;
    }

    public function withCode(string $code): self
    {
        $self = clone $this;
        $self['code'] = $code;

        return $self;
    }

    public function withIsEuMember(bool $isEuMember): self
    {
        $self = clone $this;
        $self['isEuMember'] = $isEuMember;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }
}
