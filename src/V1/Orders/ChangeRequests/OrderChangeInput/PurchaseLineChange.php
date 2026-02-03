<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\PurchaseLineChange\Mode;

/**
 * @phpstan-type PurchaseLineChangeShape = array{
 *   lineID: string,
 *   batchNumber?: string|null,
 *   destinationDryMatterPercentage?: float|null,
 *   destinationLotID?: string|null,
 *   destinationQuantity?: float|null,
 *   expirationDate?: string|null,
 *   grossWeight?: float|null,
 *   loadingAddressID?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   manufactureDate?: string|null,
 *   mode?: null|Mode|value-of<Mode>,
 *   numberOfPackages?: int|null,
 *   origin?: string|null,
 *   originForIntrastat?: string|null,
 *   packagingID?: string|null,
 *   packingCount?: int|null,
 *   palletCount?: int|null,
 *   palletID?: string|null,
 *   quantityPerPacking?: float|null,
 *   sourceDryMatterPercentage?: float|null,
 *   sourceQuantity?: float|null,
 *   supplierInstructions?: string|null,
 *   supplierReference?: string|null,
 *   unloadingAddressID?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class PurchaseLineChange implements BaseModel
{
    /** @use SdkModel<PurchaseLineChangeShape> */
    use SdkModel;

    /**
     * Reference to existing purchase order line.
     */
    #[Required('lineId')]
    public string $lineID;

    /**
     * The batch number for this line.
     */
    #[Optional(nullable: true)]
    public ?string $batchNumber;

    /**
     * The dry matter percentage at the destination.
     */
    #[Optional(nullable: true)]
    public ?float $destinationDryMatterPercentage;

    /**
     * Identifier of the destination lot.
     */
    #[Optional('destinationLotId', nullable: true)]
    public ?string $destinationLotID;

    /**
     * The quantity delivered to the destination for this line.
     */
    #[Optional(nullable: true)]
    public ?float $destinationQuantity;

    /**
     * Expiration date for this line.
     */
    #[Optional(nullable: true)]
    public ?string $expirationDate;

    /**
     * The gross weight of the product in this line.
     */
    #[Optional(nullable: true)]
    public ?float $grossWeight;

    /**
     * Address identifier where loading occurs.
     */
    #[Optional('loadingAddressId', nullable: true)]
    public ?string $loadingAddressID;

    /**
     * Reference for loading operations.
     */
    #[Optional(nullable: true)]
    public ?string $loadingReference;

    /**
     * Remarks about loading for this line.
     */
    #[Optional(nullable: true)]
    public ?string $loadingRemarks;

    /**
     * Manufacture date for this line.
     */
    #[Optional(nullable: true)]
    public ?string $manufactureDate;

    /**
     * Mode: "update" modifies existing line, "add" creates new line using the referenced line's contract.
     *
     * @var value-of<Mode>|null $mode
     */
    #[Optional(enum: Mode::class)]
    public ?string $mode;

    /**
     * Number of packages in this line.
     */
    #[Optional(nullable: true)]
    public ?int $numberOfPackages;

    /**
     * Origin location for this line.
     */
    #[Optional(nullable: true)]
    public ?string $origin;

    /**
     * Intrastat origin code for this line. ISO country code format.
     */
    #[Optional(nullable: true)]
    public ?string $originForIntrastat;

    /**
     * Packaging identifier for this line.
     */
    #[Optional('packagingId', nullable: true)]
    public ?string $packagingID;

    /**
     * The number of packings for this line.
     */
    #[Optional(nullable: true)]
    public ?int $packingCount;

    /**
     * Number of pallets for this line.
     */
    #[Optional(nullable: true)]
    public ?int $palletCount;

    /**
     * The type of pallet used for this line.
     */
    #[Optional('palletId', nullable: true)]
    public ?string $palletID;

    /**
     * The quantity per packing unit.
     */
    #[Optional(nullable: true)]
    public ?float $quantityPerPacking;

    /**
     * The dry matter percentage at the source.
     */
    #[Optional(nullable: true)]
    public ?float $sourceDryMatterPercentage;

    /**
     * The quantity sourced for this line.
     */
    #[Optional(nullable: true)]
    public ?float $sourceQuantity;

    /**
     * Instructions from the supplier for this line.
     */
    #[Optional(nullable: true)]
    public ?string $supplierInstructions;

    /**
     * Reference provided by the supplier.
     */
    #[Optional(nullable: true)]
    public ?string $supplierReference;

    /**
     * Address identifier where unloading occurs.
     */
    #[Optional('unloadingAddressId', nullable: true)]
    public ?string $unloadingAddressID;

    /**
     * Reference for unloading operations.
     */
    #[Optional(nullable: true)]
    public ?string $unloadingReference;

    /**
     * Remarks about unloading for this line.
     */
    #[Optional(nullable: true)]
    public ?string $unloadingRemarks;

    /**
     * Reference to the warehouse for this line.
     */
    #[Optional(nullable: true)]
    public ?string $warehouseReference;

    /**
     * `new PurchaseLineChange()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * PurchaseLineChange::with(lineID: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new PurchaseLineChange)->withLineID(...)
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
        ?string $batchNumber = null,
        ?float $destinationDryMatterPercentage = null,
        ?string $destinationLotID = null,
        ?float $destinationQuantity = null,
        ?string $expirationDate = null,
        ?float $grossWeight = null,
        ?string $loadingAddressID = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?string $manufactureDate = null,
        Mode|string|null $mode = null,
        ?int $numberOfPackages = null,
        ?string $origin = null,
        ?string $originForIntrastat = null,
        ?string $packagingID = null,
        ?int $packingCount = null,
        ?int $palletCount = null,
        ?string $palletID = null,
        ?float $quantityPerPacking = null,
        ?float $sourceDryMatterPercentage = null,
        ?float $sourceQuantity = null,
        ?string $supplierInstructions = null,
        ?string $supplierReference = null,
        ?string $unloadingAddressID = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        $self['lineID'] = $lineID;

        null !== $batchNumber && $self['batchNumber'] = $batchNumber;
        null !== $destinationDryMatterPercentage && $self['destinationDryMatterPercentage'] = $destinationDryMatterPercentage;
        null !== $destinationLotID && $self['destinationLotID'] = $destinationLotID;
        null !== $destinationQuantity && $self['destinationQuantity'] = $destinationQuantity;
        null !== $expirationDate && $self['expirationDate'] = $expirationDate;
        null !== $grossWeight && $self['grossWeight'] = $grossWeight;
        null !== $loadingAddressID && $self['loadingAddressID'] = $loadingAddressID;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $manufactureDate && $self['manufactureDate'] = $manufactureDate;
        null !== $mode && $self['mode'] = $mode;
        null !== $numberOfPackages && $self['numberOfPackages'] = $numberOfPackages;
        null !== $origin && $self['origin'] = $origin;
        null !== $originForIntrastat && $self['originForIntrastat'] = $originForIntrastat;
        null !== $packagingID && $self['packagingID'] = $packagingID;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $palletCount && $self['palletCount'] = $palletCount;
        null !== $palletID && $self['palletID'] = $palletID;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $sourceDryMatterPercentage && $self['sourceDryMatterPercentage'] = $sourceDryMatterPercentage;
        null !== $sourceQuantity && $self['sourceQuantity'] = $sourceQuantity;
        null !== $supplierInstructions && $self['supplierInstructions'] = $supplierInstructions;
        null !== $supplierReference && $self['supplierReference'] = $supplierReference;
        null !== $unloadingAddressID && $self['unloadingAddressID'] = $unloadingAddressID;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;

        return $self;
    }

    /**
     * Reference to existing purchase order line.
     */
    public function withLineID(string $lineID): self
    {
        $self = clone $this;
        $self['lineID'] = $lineID;

        return $self;
    }

    /**
     * The batch number for this line.
     */
    public function withBatchNumber(?string $batchNumber): self
    {
        $self = clone $this;
        $self['batchNumber'] = $batchNumber;

        return $self;
    }

    /**
     * The dry matter percentage at the destination.
     */
    public function withDestinationDryMatterPercentage(
        ?float $destinationDryMatterPercentage
    ): self {
        $self = clone $this;
        $self['destinationDryMatterPercentage'] = $destinationDryMatterPercentage;

        return $self;
    }

    /**
     * Identifier of the destination lot.
     */
    public function withDestinationLotID(?string $destinationLotID): self
    {
        $self = clone $this;
        $self['destinationLotID'] = $destinationLotID;

        return $self;
    }

    /**
     * The quantity delivered to the destination for this line.
     */
    public function withDestinationQuantity(?float $destinationQuantity): self
    {
        $self = clone $this;
        $self['destinationQuantity'] = $destinationQuantity;

        return $self;
    }

    /**
     * Expiration date for this line.
     */
    public function withExpirationDate(?string $expirationDate): self
    {
        $self = clone $this;
        $self['expirationDate'] = $expirationDate;

        return $self;
    }

    /**
     * The gross weight of the product in this line.
     */
    public function withGrossWeight(?float $grossWeight): self
    {
        $self = clone $this;
        $self['grossWeight'] = $grossWeight;

        return $self;
    }

    /**
     * Address identifier where loading occurs.
     */
    public function withLoadingAddressID(?string $loadingAddressID): self
    {
        $self = clone $this;
        $self['loadingAddressID'] = $loadingAddressID;

        return $self;
    }

    /**
     * Reference for loading operations.
     */
    public function withLoadingReference(?string $loadingReference): self
    {
        $self = clone $this;
        $self['loadingReference'] = $loadingReference;

        return $self;
    }

    /**
     * Remarks about loading for this line.
     */
    public function withLoadingRemarks(?string $loadingRemarks): self
    {
        $self = clone $this;
        $self['loadingRemarks'] = $loadingRemarks;

        return $self;
    }

    /**
     * Manufacture date for this line.
     */
    public function withManufactureDate(?string $manufactureDate): self
    {
        $self = clone $this;
        $self['manufactureDate'] = $manufactureDate;

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
     * Number of packages in this line.
     */
    public function withNumberOfPackages(?int $numberOfPackages): self
    {
        $self = clone $this;
        $self['numberOfPackages'] = $numberOfPackages;

        return $self;
    }

    /**
     * Origin location for this line.
     */
    public function withOrigin(?string $origin): self
    {
        $self = clone $this;
        $self['origin'] = $origin;

        return $self;
    }

    /**
     * Intrastat origin code for this line. ISO country code format.
     */
    public function withOriginForIntrastat(?string $originForIntrastat): self
    {
        $self = clone $this;
        $self['originForIntrastat'] = $originForIntrastat;

        return $self;
    }

    /**
     * Packaging identifier for this line.
     */
    public function withPackagingID(?string $packagingID): self
    {
        $self = clone $this;
        $self['packagingID'] = $packagingID;

        return $self;
    }

    /**
     * The number of packings for this line.
     */
    public function withPackingCount(?int $packingCount): self
    {
        $self = clone $this;
        $self['packingCount'] = $packingCount;

        return $self;
    }

    /**
     * Number of pallets for this line.
     */
    public function withPalletCount(?int $palletCount): self
    {
        $self = clone $this;
        $self['palletCount'] = $palletCount;

        return $self;
    }

    /**
     * The type of pallet used for this line.
     */
    public function withPalletID(?string $palletID): self
    {
        $self = clone $this;
        $self['palletID'] = $palletID;

        return $self;
    }

    /**
     * The quantity per packing unit.
     */
    public function withQuantityPerPacking(?float $quantityPerPacking): self
    {
        $self = clone $this;
        $self['quantityPerPacking'] = $quantityPerPacking;

        return $self;
    }

    /**
     * The dry matter percentage at the source.
     */
    public function withSourceDryMatterPercentage(
        ?float $sourceDryMatterPercentage
    ): self {
        $self = clone $this;
        $self['sourceDryMatterPercentage'] = $sourceDryMatterPercentage;

        return $self;
    }

    /**
     * The quantity sourced for this line.
     */
    public function withSourceQuantity(?float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

        return $self;
    }

    /**
     * Instructions from the supplier for this line.
     */
    public function withSupplierInstructions(
        ?string $supplierInstructions
    ): self {
        $self = clone $this;
        $self['supplierInstructions'] = $supplierInstructions;

        return $self;
    }

    /**
     * Reference provided by the supplier.
     */
    public function withSupplierReference(?string $supplierReference): self
    {
        $self = clone $this;
        $self['supplierReference'] = $supplierReference;

        return $self;
    }

    /**
     * Address identifier where unloading occurs.
     */
    public function withUnloadingAddressID(?string $unloadingAddressID): self
    {
        $self = clone $this;
        $self['unloadingAddressID'] = $unloadingAddressID;

        return $self;
    }

    /**
     * Reference for unloading operations.
     */
    public function withUnloadingReference(?string $unloadingReference): self
    {
        $self = clone $this;
        $self['unloadingReference'] = $unloadingReference;

        return $self;
    }

    /**
     * Remarks about unloading for this line.
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
