<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ProductionOrders\ProductionOrder;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 *
 * @phpstan-type ProductionResultShape = array{
 *   id?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   description?: string|null,
 *   expiryDate?: string|null,
 *   internalRemarksAboutLot?: string|null,
 *   label?: string|null,
 *   origin?: string|null,
 *   packaging?: string|null,
 *   packagingSpecification?: string|null,
 *   packingCount?: int|null,
 *   product?: string|null,
 *   productionDate?: string|null,
 *   productSpecification?: string|null,
 *   quantity?: float|null,
 *   quantityPerPacking?: float|null,
 *   sample?: string|null,
 *   stackingDetails?: string|null,
 *   supplierReference?: string|null,
 *   warehouseReference?: string|null,
 *   wrapping?: string|null,
 *   wrappingSpecification?: string|null,
 * }
 */
final class ProductionResult implements BaseModel
{
    /** @use SdkModel<ProductionResultShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $expiryDate;

    #[Optional]
    public ?string $internalRemarksAboutLot;

    #[Optional]
    public ?string $label;

    #[Optional]
    public ?string $origin;

    #[Optional(nullable: true)]
    public ?string $packaging;

    #[Optional]
    public ?string $packagingSpecification;

    #[Optional]
    public ?int $packingCount;

    #[Optional]
    public ?string $product;

    #[Optional]
    public ?string $productionDate;

    #[Optional]
    public ?string $productSpecification;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?float $quantityPerPacking;

    #[Optional]
    public ?string $sample;

    #[Optional]
    public ?string $stackingDetails;

    #[Optional]
    public ?string $supplierReference;

    #[Optional]
    public ?string $warehouseReference;

    #[Optional]
    public ?string $wrapping;

    #[Optional]
    public ?string $wrappingSpecification;

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
        ?string $id = null,
        ?array $customFields = null,
        ?string $description = null,
        ?string $expiryDate = null,
        ?string $internalRemarksAboutLot = null,
        ?string $label = null,
        ?string $origin = null,
        ?string $packaging = null,
        ?string $packagingSpecification = null,
        ?int $packingCount = null,
        ?string $product = null,
        ?string $productionDate = null,
        ?string $productSpecification = null,
        ?float $quantity = null,
        ?float $quantityPerPacking = null,
        ?string $sample = null,
        ?string $stackingDetails = null,
        ?string $supplierReference = null,
        ?string $warehouseReference = null,
        ?string $wrapping = null,
        ?string $wrappingSpecification = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $description && $self['description'] = $description;
        null !== $expiryDate && $self['expiryDate'] = $expiryDate;
        null !== $internalRemarksAboutLot && $self['internalRemarksAboutLot'] = $internalRemarksAboutLot;
        null !== $label && $self['label'] = $label;
        null !== $origin && $self['origin'] = $origin;
        null !== $packaging && $self['packaging'] = $packaging;
        null !== $packagingSpecification && $self['packagingSpecification'] = $packagingSpecification;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $product && $self['product'] = $product;
        null !== $productionDate && $self['productionDate'] = $productionDate;
        null !== $productSpecification && $self['productSpecification'] = $productSpecification;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $sample && $self['sample'] = $sample;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;
        null !== $supplierReference && $self['supplierReference'] = $supplierReference;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;
        null !== $wrapping && $self['wrapping'] = $wrapping;
        null !== $wrappingSpecification && $self['wrappingSpecification'] = $wrappingSpecification;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

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

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withExpiryDate(string $expiryDate): self
    {
        $self = clone $this;
        $self['expiryDate'] = $expiryDate;

        return $self;
    }

    public function withInternalRemarksAboutLot(
        string $internalRemarksAboutLot
    ): self {
        $self = clone $this;
        $self['internalRemarksAboutLot'] = $internalRemarksAboutLot;

        return $self;
    }

    public function withLabel(string $label): self
    {
        $self = clone $this;
        $self['label'] = $label;

        return $self;
    }

    public function withOrigin(string $origin): self
    {
        $self = clone $this;
        $self['origin'] = $origin;

        return $self;
    }

    public function withPackaging(?string $packaging): self
    {
        $self = clone $this;
        $self['packaging'] = $packaging;

        return $self;
    }

    public function withPackagingSpecification(
        string $packagingSpecification
    ): self {
        $self = clone $this;
        $self['packagingSpecification'] = $packagingSpecification;

        return $self;
    }

    public function withPackingCount(int $packingCount): self
    {
        $self = clone $this;
        $self['packingCount'] = $packingCount;

        return $self;
    }

    public function withProduct(string $product): self
    {
        $self = clone $this;
        $self['product'] = $product;

        return $self;
    }

    public function withProductionDate(string $productionDate): self
    {
        $self = clone $this;
        $self['productionDate'] = $productionDate;

        return $self;
    }

    public function withProductSpecification(string $productSpecification): self
    {
        $self = clone $this;
        $self['productSpecification'] = $productSpecification;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    public function withQuantityPerPacking(float $quantityPerPacking): self
    {
        $self = clone $this;
        $self['quantityPerPacking'] = $quantityPerPacking;

        return $self;
    }

    public function withSample(string $sample): self
    {
        $self = clone $this;
        $self['sample'] = $sample;

        return $self;
    }

    public function withStackingDetails(string $stackingDetails): self
    {
        $self = clone $this;
        $self['stackingDetails'] = $stackingDetails;

        return $self;
    }

    public function withSupplierReference(string $supplierReference): self
    {
        $self = clone $this;
        $self['supplierReference'] = $supplierReference;

        return $self;
    }

    public function withWarehouseReference(string $warehouseReference): self
    {
        $self = clone $this;
        $self['warehouseReference'] = $warehouseReference;

        return $self;
    }

    public function withWrapping(string $wrapping): self
    {
        $self = clone $this;
        $self['wrapping'] = $wrapping;

        return $self;
    }

    public function withWrappingSpecification(
        string $wrappingSpecification
    ): self {
        $self = clone $this;
        $self['wrappingSpecification'] = $wrappingSpecification;

        return $self;
    }
}
