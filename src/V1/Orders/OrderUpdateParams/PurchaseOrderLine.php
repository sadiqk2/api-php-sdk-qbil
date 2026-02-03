<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\OrderUpdateParams;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type PurchaseOrderLineShape = array{
 *   destinationQuantity: float|null,
 *   grossWeight: float|null,
 *   purchaseContractLineID: string|null,
 *   sourceQuantity: float|null,
 *   batchNumber?: string|null,
 *   destinationDryMatterPercentage?: float|null,
 *   destinationLotID?: string|null,
 *   expirationDate?: string|null,
 *   lineID?: string|null,
 *   loadingAddressID?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   manufactureDate?: string|null,
 *   numberOfLots?: int|null,
 *   numberOfPackages?: int|null,
 *   origin?: string|null,
 *   originForIntrastat?: string|null,
 *   packagingID?: string|null,
 *   packingCount?: int|null,
 *   palletCount?: int|null,
 *   palletTypeID?: string|null,
 *   quantityPerPacking?: float|null,
 *   sourceDryMatterPercentage?: float|null,
 *   stackingDetails?: string|null,
 *   supplierInstructions?: string|null,
 *   supplierReference?: string|null,
 *   unloadingAddressID?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class PurchaseOrderLine implements BaseModel
{
    /** @use SdkModel<PurchaseOrderLineShape> */
    use SdkModel;

    /**
     * The quantity delivered to the destination for this line.
     */
    #[Required]
    public ?float $destinationQuantity;

    /**
     * The gross weight of the product in this line.
     */
    #[Required]
    public ?float $grossWeight;

    /**
     * The contract line id for the purchase.
     */
    #[Required('purchaseContractLineId')]
    public ?string $purchaseContractLineID;

    /**
     * The quantity sourced for this line.
     */
    #[Required]
    public ?float $sourceQuantity;

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
     * Identifier of the destination lot<span style="color:red;">(applicable if the destination is new stock/lot)</span>.
     */
    #[Optional('destinationLotId', nullable: true)]
    public ?string $destinationLotID;

    /**
     * Expiration date for this line.
     */
    #[Optional(nullable: true)]
    public ?string $expirationDate;

    /**
     * The unique identifier for this order line (nullable for new lines).
     */
    #[Optional('lineId', nullable: true)]
    public ?string $lineID;

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
     * The number of lots included in this line.
     */
    #[Optional(nullable: true)]
    public ?int $numberOfLots;

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
     * Intrastat origin code for this line.
     */
    #[Optional(nullable: true)]
    public ?string $originForIntrastat;

    /**
     * Packaging identifier for this line <span style="color:red;">(applicable if the destination is new stock/lot)</span>.
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
     * The pallet type id used for this line. Pallet types can be retrieved via the /pallets endpoint.
     */
    #[Optional('palletTypeId', nullable: true)]
    public ?string $palletTypeID;

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
     * Details about stacking for this line.
     */
    #[Optional(nullable: true)]
    public ?string $stackingDetails;

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
     * Address identifier where unloading occurs <span style="color:red;">(applicable if the destination is new stock/lot)</span>.
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
     * `new PurchaseOrderLine()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * PurchaseOrderLine::with(
     *   destinationQuantity: ...,
     *   grossWeight: ...,
     *   purchaseContractLineID: ...,
     *   sourceQuantity: ...,
     * )
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new PurchaseOrderLine)
     *   ->withDestinationQuantity(...)
     *   ->withGrossWeight(...)
     *   ->withPurchaseContractLineID(...)
     *   ->withSourceQuantity(...)
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
        ?string $purchaseContractLineID,
        ?float $sourceQuantity,
        ?string $batchNumber = null,
        ?float $destinationDryMatterPercentage = null,
        ?string $destinationLotID = null,
        ?string $expirationDate = null,
        ?string $lineID = null,
        ?string $loadingAddressID = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?string $manufactureDate = null,
        ?int $numberOfLots = null,
        ?int $numberOfPackages = null,
        ?string $origin = null,
        ?string $originForIntrastat = null,
        ?string $packagingID = null,
        ?int $packingCount = null,
        ?int $palletCount = null,
        ?string $palletTypeID = null,
        ?float $quantityPerPacking = null,
        ?float $sourceDryMatterPercentage = null,
        ?string $stackingDetails = null,
        ?string $supplierInstructions = null,
        ?string $supplierReference = null,
        ?string $unloadingAddressID = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        $self['destinationQuantity'] = $destinationQuantity;
        $self['grossWeight'] = $grossWeight;
        $self['purchaseContractLineID'] = $purchaseContractLineID;
        $self['sourceQuantity'] = $sourceQuantity;

        null !== $batchNumber && $self['batchNumber'] = $batchNumber;
        null !== $destinationDryMatterPercentage && $self['destinationDryMatterPercentage'] = $destinationDryMatterPercentage;
        null !== $destinationLotID && $self['destinationLotID'] = $destinationLotID;
        null !== $expirationDate && $self['expirationDate'] = $expirationDate;
        null !== $lineID && $self['lineID'] = $lineID;
        null !== $loadingAddressID && $self['loadingAddressID'] = $loadingAddressID;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $manufactureDate && $self['manufactureDate'] = $manufactureDate;
        null !== $numberOfLots && $self['numberOfLots'] = $numberOfLots;
        null !== $numberOfPackages && $self['numberOfPackages'] = $numberOfPackages;
        null !== $origin && $self['origin'] = $origin;
        null !== $originForIntrastat && $self['originForIntrastat'] = $originForIntrastat;
        null !== $packagingID && $self['packagingID'] = $packagingID;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $palletCount && $self['palletCount'] = $palletCount;
        null !== $palletTypeID && $self['palletTypeID'] = $palletTypeID;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $sourceDryMatterPercentage && $self['sourceDryMatterPercentage'] = $sourceDryMatterPercentage;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;
        null !== $supplierInstructions && $self['supplierInstructions'] = $supplierInstructions;
        null !== $supplierReference && $self['supplierReference'] = $supplierReference;
        null !== $unloadingAddressID && $self['unloadingAddressID'] = $unloadingAddressID;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;

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
     * The gross weight of the product in this line.
     */
    public function withGrossWeight(?float $grossWeight): self
    {
        $self = clone $this;
        $self['grossWeight'] = $grossWeight;

        return $self;
    }

    /**
     * The contract line id for the purchase.
     */
    public function withPurchaseContractLineID(
        ?string $purchaseContractLineID
    ): self {
        $self = clone $this;
        $self['purchaseContractLineID'] = $purchaseContractLineID;

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
     * Identifier of the destination lot<span style="color:red;">(applicable if the destination is new stock/lot)</span>.
     */
    public function withDestinationLotID(?string $destinationLotID): self
    {
        $self = clone $this;
        $self['destinationLotID'] = $destinationLotID;

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
     * The unique identifier for this order line (nullable for new lines).
     */
    public function withLineID(?string $lineID): self
    {
        $self = clone $this;
        $self['lineID'] = $lineID;

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
     * The number of lots included in this line.
     */
    public function withNumberOfLots(?int $numberOfLots): self
    {
        $self = clone $this;
        $self['numberOfLots'] = $numberOfLots;

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
     * Intrastat origin code for this line.
     */
    public function withOriginForIntrastat(?string $originForIntrastat): self
    {
        $self = clone $this;
        $self['originForIntrastat'] = $originForIntrastat;

        return $self;
    }

    /**
     * Packaging identifier for this line <span style="color:red;">(applicable if the destination is new stock/lot)</span>.
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
     * The pallet type id used for this line. Pallet types can be retrieved via the /pallets endpoint.
     */
    public function withPalletTypeID(?string $palletTypeID): self
    {
        $self = clone $this;
        $self['palletTypeID'] = $palletTypeID;

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
     * Details about stacking for this line.
     */
    public function withStackingDetails(?string $stackingDetails): self
    {
        $self = clone $this;
        $self['stackingDetails'] = $stackingDetails;

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
     * Address identifier where unloading occurs <span style="color:red;">(applicable if the destination is new stock/lot)</span>.
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
