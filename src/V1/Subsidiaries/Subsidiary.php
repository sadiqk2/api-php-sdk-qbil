<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Subsidiaries;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Contracts\VatRegistration;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type VatRegistrationShape from \QbilPhpSDK\V1\Contracts\VatRegistration
 *
 * @phpstan-type SubsidiaryShape = array{
 *   id?: string|null,
 *   abbreviationName?: string|null,
 *   accountingCode?: string|null,
 *   accountingCurrency?: string|null,
 *   address?: string|null,
 *   city?: string|null,
 *   cocLocality?: string|null,
 *   cocRegistrationNumber?: string|null,
 *   country?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   name?: string|null,
 *   statisticalExportType?: string|null,
 *   vatRegistrations?: list<VatRegistration|VatRegistrationShape>|null,
 *   website?: string|null,
 *   zipCode?: string|null,
 * }
 */
final class Subsidiary implements BaseModel
{
    /** @use SdkModel<SubsidiaryShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $abbreviationName;

    #[Optional]
    public ?string $accountingCode;

    #[Optional]
    public ?string $accountingCurrency;

    #[Optional]
    public ?string $address;

    #[Optional]
    public ?string $city;

    #[Optional]
    public ?string $cocLocality;

    #[Optional]
    public ?string $cocRegistrationNumber;

    #[Optional]
    public ?string $country;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?string $name;

    #[Optional]
    public ?string $statisticalExportType;

    /** @var list<VatRegistration>|null $vatRegistrations */
    #[Optional(list: VatRegistration::class)]
    public ?array $vatRegistrations;

    #[Optional]
    public ?string $website;

    #[Optional]
    public ?string $zipCode;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<CustomField|CustomFieldShape>|null $customFields
     * @param list<VatRegistration|VatRegistrationShape>|null $vatRegistrations
     */
    public static function with(
        ?string $id = null,
        ?string $abbreviationName = null,
        ?string $accountingCode = null,
        ?string $accountingCurrency = null,
        ?string $address = null,
        ?string $city = null,
        ?string $cocLocality = null,
        ?string $cocRegistrationNumber = null,
        ?string $country = null,
        ?array $customFields = null,
        ?string $name = null,
        ?string $statisticalExportType = null,
        ?array $vatRegistrations = null,
        ?string $website = null,
        ?string $zipCode = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $abbreviationName && $self['abbreviationName'] = $abbreviationName;
        null !== $accountingCode && $self['accountingCode'] = $accountingCode;
        null !== $accountingCurrency && $self['accountingCurrency'] = $accountingCurrency;
        null !== $address && $self['address'] = $address;
        null !== $city && $self['city'] = $city;
        null !== $cocLocality && $self['cocLocality'] = $cocLocality;
        null !== $cocRegistrationNumber && $self['cocRegistrationNumber'] = $cocRegistrationNumber;
        null !== $country && $self['country'] = $country;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $name && $self['name'] = $name;
        null !== $statisticalExportType && $self['statisticalExportType'] = $statisticalExportType;
        null !== $vatRegistrations && $self['vatRegistrations'] = $vatRegistrations;
        null !== $website && $self['website'] = $website;
        null !== $zipCode && $self['zipCode'] = $zipCode;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAbbreviationName(string $abbreviationName): self
    {
        $self = clone $this;
        $self['abbreviationName'] = $abbreviationName;

        return $self;
    }

    public function withAccountingCode(string $accountingCode): self
    {
        $self = clone $this;
        $self['accountingCode'] = $accountingCode;

        return $self;
    }

    public function withAccountingCurrency(string $accountingCurrency): self
    {
        $self = clone $this;
        $self['accountingCurrency'] = $accountingCurrency;

        return $self;
    }

    public function withAddress(string $address): self
    {
        $self = clone $this;
        $self['address'] = $address;

        return $self;
    }

    public function withCity(string $city): self
    {
        $self = clone $this;
        $self['city'] = $city;

        return $self;
    }

    public function withCocLocality(string $cocLocality): self
    {
        $self = clone $this;
        $self['cocLocality'] = $cocLocality;

        return $self;
    }

    public function withCocRegistrationNumber(
        string $cocRegistrationNumber
    ): self {
        $self = clone $this;
        $self['cocRegistrationNumber'] = $cocRegistrationNumber;

        return $self;
    }

    public function withCountry(string $country): self
    {
        $self = clone $this;
        $self['country'] = $country;

        return $self;
    }

    /**
     * @param list<CustomField|CustomFieldShape> $customFields
     */
    public function withCustomFields(array $customFields): self
    {
        $self = clone $this;
        $self['customFields'] = $customFields;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    public function withStatisticalExportType(
        string $statisticalExportType
    ): self {
        $self = clone $this;
        $self['statisticalExportType'] = $statisticalExportType;

        return $self;
    }

    /**
     * @param list<VatRegistration|VatRegistrationShape> $vatRegistrations
     */
    public function withVatRegistrations(array $vatRegistrations): self
    {
        $self = clone $this;
        $self['vatRegistrations'] = $vatRegistrations;

        return $self;
    }

    public function withWebsite(string $website): self
    {
        $self = clone $this;
        $self['website'] = $website;

        return $self;
    }

    public function withZipCode(string $zipCode): self
    {
        $self = clone $this;
        $self['zipCode'] = $zipCode;

        return $self;
    }
}
