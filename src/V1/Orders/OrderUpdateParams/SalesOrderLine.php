<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\OrderUpdateParams;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type SalesOrderLineShape = array{
 *   destinationQuantity: float|null,
 *   grossWeight: float|null,
 *   packagingID: string|null,
 *   salesContractLineID: string|null,
 *   destinationDryMatterPercentage?: float|null,
 *   lineID?: string|null,
 *   loadingAddressID?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   numberOfLots?: int|null,
 *   packingCount?: int|null,
 *   palletCount?: int|null,
 *   palletType?: string|null,
 *   quantityPerPacking?: float|null,
 *   sourceDryMatterPercentage?: float|null,
 *   sourceLot?: string|null,
 *   sourceQuantity?: float|null,
 *   stackingDetails?: string|null,
 *   unloadingAddressID?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 * }
 */
final class SalesOrderLine implements BaseModel
{
    /** @use SdkModel<SalesOrderLineShape> */
    use SdkModel;

    /**
     * The quantity delivered to the destination for this sales order line.
     */
    #[Required]
    public ?float $destinationQuantity;

    /**
     * The gross weight of the product in this sales order line.
     */
    #[Required]
    public ?float $grossWeight;

    /**
     * Packaging identifier for this sales order line.
     */
    #[Required('packagingId')]
    public ?string $packagingID;

    /**
     * The contract line number for the sales order.
     */
    #[Required('salesContractLineId')]
    public ?string $salesContractLineID;

    /**
     * The dry matter percentage at the destination for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?float $destinationDryMatterPercentage;

    /**
     * The unique identifier for this order line (nullable for new lines).
     */
    #[Optional('lineId', nullable: true)]
    public ?string $lineID;

    /**
     * Address identifier where loading occurs for this sales order line.
     */
    #[Optional('loadingAddressId', nullable: true)]
    public ?string $loadingAddressID;

    /**
     * Reference for loading operations for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?string $loadingReference;

    /**
     * Remarks about loading for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?string $loadingRemarks;

    /**
     * The number of lots included in this sales order line.
     */
    #[Optional(nullable: true)]
    public ?int $numberOfLots;

    /**
     * The number of packings for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?int $packingCount;

    /**
     * Number of pallets for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?int $palletCount;

    /**
     * Pallet identifier for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?string $palletType;

    /**
     * The quantity per packing unit for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?float $quantityPerPacking;

    /**
     * The dry matter percentage at the source for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?float $sourceDryMatterPercentage;

    /**
     * Source lot identifier for this sales order line <span style="color:red;">(assign null if the origin/source is unknown)</span>.
     */
    #[Optional(nullable: true)]
    public ?string $sourceLot;

    /**
     * <span style="color:red;">Required when the origin is stock/Lot</span>.
     */
    #[Optional(nullable: true)]
    public ?float $sourceQuantity;

    /**
     * Details about stacking for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?string $stackingDetails;

    /**
     * Address identifier where unloading occurs for this sales order line.
     */
    #[Optional('unloadingAddressId', nullable: true)]
    public ?string $unloadingAddressID;

    /**
     * Reference for unloading operations for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?string $unloadingReference;

    /**
     * Remarks about unloading for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?string $unloadingRemarks;

    /**
     * `new SalesOrderLine()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * SalesOrderLine::with(
     *   destinationQuantity: ...,
     *   grossWeight: ...,
     *   packagingID: ...,
     *   salesContractLineID: ...,
     * )
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new SalesOrderLine)
     *   ->withDestinationQuantity(...)
     *   ->withGrossWeight(...)
     *   ->withPackagingID(...)
     *   ->withSalesContractLineID(...)
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
     */
    public static function with(
        ?float $destinationQuantity,
        ?float $grossWeight,
        ?string $packagingID,
        ?string $salesContractLineID,
        ?float $destinationDryMatterPercentage = null,
        ?string $lineID = null,
        ?string $loadingAddressID = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?int $numberOfLots = null,
        ?int $packingCount = null,
        ?int $palletCount = null,
        ?string $palletType = null,
        ?float $quantityPerPacking = null,
        ?float $sourceDryMatterPercentage = null,
        ?string $sourceLot = null,
        ?float $sourceQuantity = null,
        ?string $stackingDetails = null,
        ?string $unloadingAddressID = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
    ): self {
        $self = new self;

        $self['destinationQuantity'] = $destinationQuantity;
        $self['grossWeight'] = $grossWeight;
        $self['packagingID'] = $packagingID;
        $self['salesContractLineID'] = $salesContractLineID;

        null !== $destinationDryMatterPercentage && $self['destinationDryMatterPercentage'] = $destinationDryMatterPercentage;
        null !== $lineID && $self['lineID'] = $lineID;
        null !== $loadingAddressID && $self['loadingAddressID'] = $loadingAddressID;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $numberOfLots && $self['numberOfLots'] = $numberOfLots;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $palletCount && $self['palletCount'] = $palletCount;
        null !== $palletType && $self['palletType'] = $palletType;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $sourceDryMatterPercentage && $self['sourceDryMatterPercentage'] = $sourceDryMatterPercentage;
        null !== $sourceLot && $self['sourceLot'] = $sourceLot;
        null !== $sourceQuantity && $self['sourceQuantity'] = $sourceQuantity;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;
        null !== $unloadingAddressID && $self['unloadingAddressID'] = $unloadingAddressID;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;

        return $self;
    }

    /**
     * The quantity delivered to the destination for this sales order line.
     */
    public function withDestinationQuantity(?float $destinationQuantity): self
    {
        $self = clone $this;
        $self['destinationQuantity'] = $destinationQuantity;

        return $self;
    }

    /**
     * The gross weight of the product in this sales order line.
     */
    public function withGrossWeight(?float $grossWeight): self
    {
        $self = clone $this;
        $self['grossWeight'] = $grossWeight;

        return $self;
    }

    /**
     * Packaging identifier for this sales order line.
     */
    public function withPackagingID(?string $packagingID): self
    {
        $self = clone $this;
        $self['packagingID'] = $packagingID;

        return $self;
    }

    /**
     * The contract line number for the sales order.
     */
    public function withSalesContractLineID(?string $salesContractLineID): self
    {
        $self = clone $this;
        $self['salesContractLineID'] = $salesContractLineID;

        return $self;
    }

    /**
     * The dry matter percentage at the destination for this sales order line.
     */
    public function withDestinationDryMatterPercentage(
        ?float $destinationDryMatterPercentage
    ): self {
        $self = clone $this;
        $self['destinationDryMatterPercentage'] = $destinationDryMatterPercentage;

        return $self;
    }

    /**
     * The unique identifier for this order line (nullable for new lines).
     */
    public function withLineID(?string $lineID): self
    {
        $self = clone $this;
        $self['lineID'] = $lineID;

        return $self;
    }

    /**
     * Address identifier where loading occurs for this sales order line.
     */
    public function withLoadingAddressID(?string $loadingAddressID): self
    {
        $self = clone $this;
        $self['loadingAddressID'] = $loadingAddressID;

        return $self;
    }

    /**
     * Reference for loading operations for this sales order line.
     */
    public function withLoadingReference(?string $loadingReference): self
    {
        $self = clone $this;
        $self['loadingReference'] = $loadingReference;

        return $self;
    }

    /**
     * Remarks about loading for this sales order line.
     */
    public function withLoadingRemarks(?string $loadingRemarks): self
    {
        $self = clone $this;
        $self['loadingRemarks'] = $loadingRemarks;

        return $self;
    }

    /**
     * The number of lots included in this sales order line.
     */
    public function withNumberOfLots(?int $numberOfLots): self
    {
        $self = clone $this;
        $self['numberOfLots'] = $numberOfLots;

        return $self;
    }

    /**
     * The number of packings for this sales order line.
     */
    public function withPackingCount(?int $packingCount): self
    {
        $self = clone $this;
        $self['packingCount'] = $packingCount;

        return $self;
    }

    /**
     * Number of pallets for this sales order line.
     */
    public function withPalletCount(?int $palletCount): self
    {
        $self = clone $this;
        $self['palletCount'] = $palletCount;

        return $self;
    }

    /**
     * Pallet identifier for this sales order line.
     */
    public function withPalletType(?string $palletType): self
    {
        $self = clone $this;
        $self['palletType'] = $palletType;

        return $self;
    }

    /**
     * The quantity per packing unit for this sales order line.
     */
    public function withQuantityPerPacking(?float $quantityPerPacking): self
    {
        $self = clone $this;
        $self['quantityPerPacking'] = $quantityPerPacking;

        return $self;
    }

    /**
     * The dry matter percentage at the source for this sales order line.
     */
    public function withSourceDryMatterPercentage(
        ?float $sourceDryMatterPercentage
    ): self {
        $self = clone $this;
        $self['sourceDryMatterPercentage'] = $sourceDryMatterPercentage;

        return $self;
    }

    /**
     * Source lot identifier for this sales order line <span style="color:red;">(assign null if the origin/source is unknown)</span>.
     */
    public function withSourceLot(?string $sourceLot): self
    {
        $self = clone $this;
        $self['sourceLot'] = $sourceLot;

        return $self;
    }

    /**
     * <span style="color:red;">Required when the origin is stock/Lot</span>.
     */
    public function withSourceQuantity(?float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

        return $self;
    }

    /**
     * Details about stacking for this sales order line.
     */
    public function withStackingDetails(?string $stackingDetails): self
    {
        $self = clone $this;
        $self['stackingDetails'] = $stackingDetails;

        return $self;
    }

    /**
     * Address identifier where unloading occurs for this sales order line.
     */
    public function withUnloadingAddressID(?string $unloadingAddressID): self
    {
        $self = clone $this;
        $self['unloadingAddressID'] = $unloadingAddressID;

        return $self;
    }

    /**
     * Reference for unloading operations for this sales order line.
     */
    public function withUnloadingReference(?string $unloadingReference): self
    {
        $self = clone $this;
        $self['unloadingReference'] = $unloadingReference;

        return $self;
    }

    /**
     * Remarks about unloading for this sales order line.
     */
    public function withUnloadingRemarks(?string $unloadingRemarks): self
    {
        $self = clone $this;
        $self['unloadingRemarks'] = $unloadingRemarks;

        return $self;
    }
}
