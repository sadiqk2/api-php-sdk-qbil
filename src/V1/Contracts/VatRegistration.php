<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Contracts\VatRegistration\Country;

/**
 * @phpstan-import-type CountryShape from \QbilPhpSDK\V1\Contracts\VatRegistration\Country
 *
 * @phpstan-type VatRegistrationShape = array{
 *   country?: null|Country|CountryShape, registrationNumber?: string|null
 * }
 */
final class VatRegistration implements BaseModel
{
    /** @use SdkModel<VatRegistrationShape> */
    use SdkModel;

    #[Optional(nullable: true)]
    public ?Country $country;

    #[Optional]
    public ?string $registrationNumber;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Country|CountryShape|null $country
     */
    public static function with(
        Country|array|null $country = null,
        ?string $registrationNumber = null
    ): self {
        $self = new self;

        null !== $country && $self['country'] = $country;
        null !== $registrationNumber && $self['registrationNumber'] = $registrationNumber;

        return $self;
    }

    /**
     * @param Country|CountryShape|null $country
     */
    public function withCountry(Country|array|null $country): self
    {
        $self = clone $this;
        $self['country'] = $country;

        return $self;
    }

    public function withRegistrationNumber(string $registrationNumber): self
    {
        $self = clone $this;
        $self['registrationNumber'] = $registrationNumber;

        return $self;
    }
}
