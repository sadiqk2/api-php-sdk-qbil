<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Products;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Products\Product\Description;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type DescriptionShape from \QbilPhpSDK\V1\Products\Product\Description
 *
 * @phpstan-type ProductShape = array{
 *   id?: string|null,
 *   availableInSubsidiaries?: list<string>|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   dangerous?: bool|null,
 *   descriptions?: list<Description|DescriptionShape>|null,
 *   gnCode?: string|null,
 *   idtfNumber?: string|null,
 *   liquid?: bool|null,
 *   packaging?: string|null,
 *   productCode?: string|null,
 *   productGroup?: mixed,
 *   productNumber?: string|null,
 *   productNumbering?: string|null,
 *   purchaseRestricted?: bool|null,
 *   remarks?: string|null,
 *   salesRestricted?: bool|null,
 *   specification?: string|null,
 *   taricCode?: string|null,
 *   tariefCode?: string|null,
 *   tariffCode?: string|null,
 * }
 */
final class Product implements BaseModel
{
    /** @use SdkModel<ProductShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /** @var list<string>|null $availableInSubsidiaries */
    #[Optional(list: 'string')]
    public ?array $availableInSubsidiaries;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?bool $dangerous;

    /** @var list<Description>|null $descriptions */
    #[Optional(list: Description::class)]
    public ?array $descriptions;

    #[Optional]
    public ?string $gnCode;

    #[Optional]
    public ?string $idtfNumber;

    #[Optional]
    public ?bool $liquid;

    #[Optional(nullable: true)]
    public ?string $packaging;

    #[Optional]
    public ?string $productCode;

    /**
     * The group details for the product.
     */
    #[Optional]
    public mixed $productGroup;

    #[Optional]
    public ?string $productNumber;

    /**
     * @deprecated
     */
    #[Optional]
    public ?string $productNumbering;

    #[Optional]
    public ?bool $purchaseRestricted;

    #[Optional]
    public ?string $remarks;

    #[Optional]
    public ?bool $salesRestricted;

    #[Optional]
    public ?string $specification;

    #[Optional]
    public ?string $taricCode;

    /**
     * @deprecated
     */
    #[Optional]
    public ?string $tariefCode;

    #[Optional]
    public ?string $tariffCode;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $availableInSubsidiaries
     * @param list<CustomField|CustomFieldShape>|null $customFields
     * @param list<Description|DescriptionShape>|null $descriptions
     */
    public static function with(
        ?string $id = null,
        ?array $availableInSubsidiaries = null,
        ?array $customFields = null,
        ?bool $dangerous = null,
        ?array $descriptions = null,
        ?string $gnCode = null,
        ?string $idtfNumber = null,
        ?bool $liquid = null,
        ?string $packaging = null,
        ?string $productCode = null,
        mixed $productGroup = null,
        ?string $productNumber = null,
        ?string $productNumbering = null,
        ?bool $purchaseRestricted = null,
        ?string $remarks = null,
        ?bool $salesRestricted = null,
        ?string $specification = null,
        ?string $taricCode = null,
        ?string $tariefCode = null,
        ?string $tariffCode = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $availableInSubsidiaries && $self['availableInSubsidiaries'] = $availableInSubsidiaries;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $dangerous && $self['dangerous'] = $dangerous;
        null !== $descriptions && $self['descriptions'] = $descriptions;
        null !== $gnCode && $self['gnCode'] = $gnCode;
        null !== $idtfNumber && $self['idtfNumber'] = $idtfNumber;
        null !== $liquid && $self['liquid'] = $liquid;
        null !== $packaging && $self['packaging'] = $packaging;
        null !== $productCode && $self['productCode'] = $productCode;
        null !== $productGroup && $self['productGroup'] = $productGroup;
        null !== $productNumber && $self['productNumber'] = $productNumber;
        null !== $productNumbering && $self['productNumbering'] = $productNumbering;
        null !== $purchaseRestricted && $self['purchaseRestricted'] = $purchaseRestricted;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $salesRestricted && $self['salesRestricted'] = $salesRestricted;
        null !== $specification && $self['specification'] = $specification;
        null !== $taricCode && $self['taricCode'] = $taricCode;
        null !== $tariefCode && $self['tariefCode'] = $tariefCode;
        null !== $tariffCode && $self['tariffCode'] = $tariffCode;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * @param list<string> $availableInSubsidiaries
     */
    public function withAvailableInSubsidiaries(
        array $availableInSubsidiaries
    ): self {
        $self = clone $this;
        $self['availableInSubsidiaries'] = $availableInSubsidiaries;

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

    public function withDangerous(bool $dangerous): self
    {
        $self = clone $this;
        $self['dangerous'] = $dangerous;

        return $self;
    }

    /**
     * @param list<Description|DescriptionShape> $descriptions
     */
    public function withDescriptions(array $descriptions): self
    {
        $self = clone $this;
        $self['descriptions'] = $descriptions;

        return $self;
    }

    public function withGnCode(string $gnCode): self
    {
        $self = clone $this;
        $self['gnCode'] = $gnCode;

        return $self;
    }

    public function withIdtfNumber(string $idtfNumber): self
    {
        $self = clone $this;
        $self['idtfNumber'] = $idtfNumber;

        return $self;
    }

    public function withLiquid(bool $liquid): self
    {
        $self = clone $this;
        $self['liquid'] = $liquid;

        return $self;
    }

    public function withPackaging(?string $packaging): self
    {
        $self = clone $this;
        $self['packaging'] = $packaging;

        return $self;
    }

    public function withProductCode(string $productCode): self
    {
        $self = clone $this;
        $self['productCode'] = $productCode;

        return $self;
    }

    /**
     * The group details for the product.
     */
    public function withProductGroup(mixed $productGroup): self
    {
        $self = clone $this;
        $self['productGroup'] = $productGroup;

        return $self;
    }

    public function withProductNumber(string $productNumber): self
    {
        $self = clone $this;
        $self['productNumber'] = $productNumber;

        return $self;
    }

    public function withProductNumbering(string $productNumbering): self
    {
        $self = clone $this;
        $self['productNumbering'] = $productNumbering;

        return $self;
    }

    public function withPurchaseRestricted(bool $purchaseRestricted): self
    {
        $self = clone $this;
        $self['purchaseRestricted'] = $purchaseRestricted;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withSalesRestricted(bool $salesRestricted): self
    {
        $self = clone $this;
        $self['salesRestricted'] = $salesRestricted;

        return $self;
    }

    public function withSpecification(string $specification): self
    {
        $self = clone $this;
        $self['specification'] = $specification;

        return $self;
    }

    public function withTaricCode(string $taricCode): self
    {
        $self = clone $this;
        $self['taricCode'] = $taricCode;

        return $self;
    }

    public function withTariefCode(string $tariefCode): self
    {
        $self = clone $this;
        $self['tariefCode'] = $tariefCode;

        return $self;
    }

    public function withTariffCode(string $tariffCode): self
    {
        $self = clone $this;
        $self['tariffCode'] = $tariffCode;

        return $self;
    }
}
