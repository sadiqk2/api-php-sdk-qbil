<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Addresses;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 *
 * @phpstan-type AddressShape = array{
 *   id?: int|null,
 *   addressLine?: string|null,
 *   addressLine2?: string|null,
 *   addressLine3?: string|null,
 *   city?: string|null,
 *   correspondencePreference?: string|null,
 *   country?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   email?: string|null,
 *   fax?: string|null,
 *   isFactory?: bool|null,
 *   isInvoicingAddress?: bool|null,
 *   isLoadingUnloadingLocation?: bool|null,
 *   isMailingAddress?: bool|null,
 *   isManufacturer?: bool|null,
 *   overriddenCompanyName?: string|null,
 *   phone?: string|null,
 *   relation?: string|null,
 *   remarks?: string|null,
 *   ubn?: string|null,
 *   zipCode?: string|null,
 * }
 */
final class Address implements BaseModel
{
    /** @use SdkModel<AddressShape> */
    use SdkModel;

    #[Optional]
    public ?int $id;

    #[Optional]
    public ?string $addressLine;

    #[Optional]
    public ?string $addressLine2;

    #[Optional]
    public ?string $addressLine3;

    #[Optional]
    public ?string $city;

    #[Optional]
    public ?string $correspondencePreference;

    #[Optional]
    public ?string $country;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?string $email;

    #[Optional]
    public ?string $fax;

    #[Optional]
    public ?bool $isFactory;

    #[Optional]
    public ?bool $isInvoicingAddress;

    #[Optional]
    public ?bool $isLoadingUnloadingLocation;

    #[Optional]
    public ?bool $isMailingAddress;

    #[Optional]
    public ?bool $isManufacturer;

    #[Optional]
    public ?string $overriddenCompanyName;

    #[Optional]
    public ?string $phone;

    #[Optional(nullable: true)]
    public ?string $relation;

    #[Optional]
    public ?string $remarks;

    #[Optional]
    public ?string $ubn;

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
     */
    public static function with(
        ?int $id = null,
        ?string $addressLine = null,
        ?string $addressLine2 = null,
        ?string $addressLine3 = null,
        ?string $city = null,
        ?string $correspondencePreference = null,
        ?string $country = null,
        ?array $customFields = null,
        ?string $email = null,
        ?string $fax = null,
        ?bool $isFactory = null,
        ?bool $isInvoicingAddress = null,
        ?bool $isLoadingUnloadingLocation = null,
        ?bool $isMailingAddress = null,
        ?bool $isManufacturer = null,
        ?string $overriddenCompanyName = null,
        ?string $phone = null,
        ?string $relation = null,
        ?string $remarks = null,
        ?string $ubn = null,
        ?string $zipCode = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $addressLine && $self['addressLine'] = $addressLine;
        null !== $addressLine2 && $self['addressLine2'] = $addressLine2;
        null !== $addressLine3 && $self['addressLine3'] = $addressLine3;
        null !== $city && $self['city'] = $city;
        null !== $correspondencePreference && $self['correspondencePreference'] = $correspondencePreference;
        null !== $country && $self['country'] = $country;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $email && $self['email'] = $email;
        null !== $fax && $self['fax'] = $fax;
        null !== $isFactory && $self['isFactory'] = $isFactory;
        null !== $isInvoicingAddress && $self['isInvoicingAddress'] = $isInvoicingAddress;
        null !== $isLoadingUnloadingLocation && $self['isLoadingUnloadingLocation'] = $isLoadingUnloadingLocation;
        null !== $isMailingAddress && $self['isMailingAddress'] = $isMailingAddress;
        null !== $isManufacturer && $self['isManufacturer'] = $isManufacturer;
        null !== $overriddenCompanyName && $self['overriddenCompanyName'] = $overriddenCompanyName;
        null !== $phone && $self['phone'] = $phone;
        null !== $relation && $self['relation'] = $relation;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $ubn && $self['ubn'] = $ubn;
        null !== $zipCode && $self['zipCode'] = $zipCode;

        return $self;
    }

    public function withID(int $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAddressLine(string $addressLine): self
    {
        $self = clone $this;
        $self['addressLine'] = $addressLine;

        return $self;
    }

    public function withAddressLine2(string $addressLine2): self
    {
        $self = clone $this;
        $self['addressLine2'] = $addressLine2;

        return $self;
    }

    public function withAddressLine3(string $addressLine3): self
    {
        $self = clone $this;
        $self['addressLine3'] = $addressLine3;

        return $self;
    }

    public function withCity(string $city): self
    {
        $self = clone $this;
        $self['city'] = $city;

        return $self;
    }

    public function withCorrespondencePreference(
        string $correspondencePreference
    ): self {
        $self = clone $this;
        $self['correspondencePreference'] = $correspondencePreference;

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

    public function withEmail(string $email): self
    {
        $self = clone $this;
        $self['email'] = $email;

        return $self;
    }

    public function withFax(string $fax): self
    {
        $self = clone $this;
        $self['fax'] = $fax;

        return $self;
    }

    public function withIsFactory(bool $isFactory): self
    {
        $self = clone $this;
        $self['isFactory'] = $isFactory;

        return $self;
    }

    public function withIsInvoicingAddress(bool $isInvoicingAddress): self
    {
        $self = clone $this;
        $self['isInvoicingAddress'] = $isInvoicingAddress;

        return $self;
    }

    public function withIsLoadingUnloadingLocation(
        bool $isLoadingUnloadingLocation
    ): self {
        $self = clone $this;
        $self['isLoadingUnloadingLocation'] = $isLoadingUnloadingLocation;

        return $self;
    }

    public function withIsMailingAddress(bool $isMailingAddress): self
    {
        $self = clone $this;
        $self['isMailingAddress'] = $isMailingAddress;

        return $self;
    }

    public function withIsManufacturer(bool $isManufacturer): self
    {
        $self = clone $this;
        $self['isManufacturer'] = $isManufacturer;

        return $self;
    }

    public function withOverriddenCompanyName(
        string $overriddenCompanyName
    ): self {
        $self = clone $this;
        $self['overriddenCompanyName'] = $overriddenCompanyName;

        return $self;
    }

    public function withPhone(string $phone): self
    {
        $self = clone $this;
        $self['phone'] = $phone;

        return $self;
    }

    public function withRelation(?string $relation): self
    {
        $self = clone $this;
        $self['relation'] = $relation;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withUbn(string $ubn): self
    {
        $self = clone $this;
        $self['ubn'] = $ubn;

        return $self;
    }

    public function withZipCode(string $zipCode): self
    {
        $self = clone $this;
        $self['zipCode'] = $zipCode;

        return $self;
    }
}
