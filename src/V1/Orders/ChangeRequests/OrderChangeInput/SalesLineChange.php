<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\SalesLineChange\Mode;

/**
 * @phpstan-type SalesLineChangeShape = array{
 *   lineID: string,
 *   destinationDryMatterPercentage?: float|null,
 *   destinationQuantity?: float|null,
 *   grossWeight?: float|null,
 *   loadingAddressID?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   mode?: null|Mode|value-of<Mode>,
 *   packagingID?: string|null,
 *   packingCount?: int|null,
 *   palletCount?: int|null,
 *   palletID?: string|null,
 *   quantityPerPacking?: float|null,
 *   sourceDryMatterPercentage?: float|null,
 *   sourceLotID?: string|null,
 *   sourceQuantity?: float|null,
 *   unloadingAddressID?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class SalesLineChange implements BaseModel
{
    /** @use SdkModel<SalesLineChangeShape> */
    use SdkModel;

    /**
     * Reference to existing sales order line.
     */
    #[Required('lineId')]
    public string $lineID;

    /**
     * The dry matter percentage at the destination for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?float $destinationDryMatterPercentage;

    /**
     * The quantity delivered to the destination for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?float $destinationQuantity;

    /**
     * The gross weight of the product in this sales order line.
     */
    #[Optional(nullable: true)]
    public ?float $grossWeight;

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
     * Mode: "update" modifies existing line, "add" creates new line using the referenced line's contract.
     *
     * @var value-of<Mode>|null $mode
     */
    #[Optional(enum: Mode::class)]
    public ?string $mode;

    /**
     * Packaging identifier for this sales order line.
     */
    #[Optional('packagingId', nullable: true)]
    public ?string $packagingID;

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
    #[Optional('palletId', nullable: true)]
    public ?string $palletID;

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
     * Source lot identifier for this sales order line.
     */
    #[Optional('sourceLotId', nullable: true)]
    public ?string $sourceLotID;

    /**
     * The quantity at source for this sales order line.
     */
    #[Optional(nullable: true)]
    public ?float $sourceQuantity;

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
     * Reference to the warehouse for this line.
     */
    #[Optional(nullable: true)]
    public ?string $warehouseReference;

    /**
     * `new SalesLineChange()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * SalesLineChange::with(lineID: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new SalesLineChange)->withLineID(...)
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
     * @param Mode|value-of<Mode>|null $mode
     */
    public static function with(
        string $lineID,
        ?float $destinationDryMatterPercentage = null,
        ?float $destinationQuantity = null,
        ?float $grossWeight = null,
        ?string $loadingAddressID = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        Mode|string|null $mode = null,
        ?string $packagingID = null,
        ?int $packingCount = null,
        ?int $palletCount = null,
        ?string $palletID = null,
        ?float $quantityPerPacking = null,
        ?float $sourceDryMatterPercentage = null,
        ?string $sourceLotID = null,
        ?float $sourceQuantity = null,
        ?string $unloadingAddressID = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        $self['lineID'] = $lineID;

        null !== $destinationDryMatterPercentage && $self['destinationDryMatterPercentage'] = $destinationDryMatterPercentage;
        null !== $destinationQuantity && $self['destinationQuantity'] = $destinationQuantity;
        null !== $grossWeight && $self['grossWeight'] = $grossWeight;
        null !== $loadingAddressID && $self['loadingAddressID'] = $loadingAddressID;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $mode && $self['mode'] = $mode;
        null !== $packagingID && $self['packagingID'] = $packagingID;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $palletCount && $self['palletCount'] = $palletCount;
        null !== $palletID && $self['palletID'] = $palletID;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $sourceDryMatterPercentage && $self['sourceDryMatterPercentage'] = $sourceDryMatterPercentage;
        null !== $sourceLotID && $self['sourceLotID'] = $sourceLotID;
        null !== $sourceQuantity && $self['sourceQuantity'] = $sourceQuantity;
        null !== $unloadingAddressID && $self['unloadingAddressID'] = $unloadingAddressID;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;

        return $self;
    }

    /**
     * Reference to existing sales order line.
     */
    public function withLineID(string $lineID): self
    {
        $self = clone $this;
        $self['lineID'] = $lineID;

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
     * Mode: "update" modifies existing line, "add" creates new line using the referenced line's contract.
     *
     * @param Mode|value-of<Mode> $mode
     */
    public function withMode(Mode|string $mode): self
    {
        $self = clone $this;
        $self['mode'] = $mode;

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
    public function withPalletID(?string $palletID): self
    {
        $self = clone $this;
        $self['palletID'] = $palletID;

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
     * Source lot identifier for this sales order line.
     */
    public function withSourceLotID(?string $sourceLotID): self
    {
        $self = clone $this;
        $self['sourceLotID'] = $sourceLotID;

        return $self;
    }

    /**
     * The quantity at source for this sales order line.
     */
    public function withSourceQuantity(?float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

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

    /**
     * Reference to the warehouse for this line.
     */
    public function withWarehouseReference(?string $warehouseReference): self
    {
        $self = clone $this;
        $self['warehouseReference'] = $warehouseReference;

        return $self;
    }
}
