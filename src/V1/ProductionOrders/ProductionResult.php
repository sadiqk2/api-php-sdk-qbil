<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ProductionOrders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\ProductionOrders\ProductionResult\Wrapping;

/**
 * @phpstan-type ProductionResultShape = array{
 *   packagingID: float,
 *   productID: float,
 *   id?: float|null,
 *   description?: string|null,
 *   expiryDate?: string|null,
 *   internalRemarksAboutLot?: string|null,
 *   label?: string|null,
 *   origin?: string|null,
 *   packagingSpecification?: string|null,
 *   productionDate?: string|null,
 *   productSpecification?: string|null,
 *   quantity?: float|null,
 *   quantityPerPacking?: float|null,
 *   sample?: string|null,
 *   stackingDetails?: string|null,
 *   supplierReference?: string|null,
 *   warehouseReference?: string|null,
 *   wrapping?: null|Wrapping|value-of<Wrapping>,
 *   wrappingSpecification?: string|null,
 * }
 */
final class ProductionResult implements BaseModel
{
    /** @use SdkModel<ProductionResultShape> */
    use SdkModel;

    /**
     * Packaging resource's id.
     */
    #[Required('packagingId')]
    public float $packagingID;

    /**
     * Product resource's id.
     */
    #[Required('productId')]
    public float $productID;

    /**
     * Production result id (for updates only).
     */
    #[Optional]
    public ?float $id;

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

    #[Optional]
    public ?string $packagingSpecification;

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

    /**
     * Indicates if wrapping should be applied.
     *
     * @var value-of<Wrapping>|null $wrapping
     */
    #[Optional(enum: Wrapping::class)]
    public ?string $wrapping;

    #[Optional]
    public ?string $wrappingSpecification;

    /**
     * `new ProductionResult()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * ProductionResult::with(packagingID: ..., productID: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new ProductionResult)->withPackagingID(...)->withProductID(...)
     * ```
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Wrapping|value-of<Wrapping>|null $wrapping
     */
    public static function with(
        float $packagingID,
        float $productID,
        ?float $id = null,
        ?string $description = null,
        ?string $expiryDate = null,
        ?string $internalRemarksAboutLot = null,
        ?string $label = null,
        ?string $origin = null,
        ?string $packagingSpecification = null,
        ?string $productionDate = null,
        ?string $productSpecification = null,
        ?float $quantity = null,
        ?float $quantityPerPacking = null,
        ?string $sample = null,
        ?string $stackingDetails = null,
        ?string $supplierReference = null,
        ?string $warehouseReference = null,
        Wrapping|string|null $wrapping = null,
        ?string $wrappingSpecification = null,
    ): self {
        $self = new self;

        $self['packagingID'] = $packagingID;
        $self['productID'] = $productID;

        null !== $id && $self['id'] = $id;
        null !== $description && $self['description'] = $description;
        null !== $expiryDate && $self['expiryDate'] = $expiryDate;
        null !== $internalRemarksAboutLot && $self['internalRemarksAboutLot'] = $internalRemarksAboutLot;
        null !== $label && $self['label'] = $label;
        null !== $origin && $self['origin'] = $origin;
        null !== $packagingSpecification && $self['packagingSpecification'] = $packagingSpecification;
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

    /**
     * Packaging resource's id.
     */
    public function withPackagingID(float $packagingID): self
    {
        $self = clone $this;
        $self['packagingID'] = $packagingID;

        return $self;
    }

    /**
     * Product resource's id.
     */
    public function withProductID(float $productID): self
    {
        $self = clone $this;
        $self['productID'] = $productID;

        return $self;
    }

    /**
     * Production result id (for updates only).
     */
    public function withID(float $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

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

    public function withPackagingSpecification(
        string $packagingSpecification
    ): self {
        $self = clone $this;
        $self['packagingSpecification'] = $packagingSpecification;

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

    /**
     * Indicates if wrapping should be applied.
     *
     * @param Wrapping|value-of<Wrapping> $wrapping
     */
    public function withWrapping(Wrapping|string $wrapping): self
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
