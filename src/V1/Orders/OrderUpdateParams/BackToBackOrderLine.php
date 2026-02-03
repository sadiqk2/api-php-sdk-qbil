<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\OrderUpdateParams;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type BackToBackOrderLineShape = array{
 *   destinationGrossWeight: float|null,
 *   destinationPackagingID: string|null,
 *   destinationQuantity: float|null,
 *   purchaseContractLineID: string|null,
 *   salesContractLineID: string|null,
 *   sourceGrossWeight: float|null,
 *   sourceQuantity: float|null,
 *   destinationDryMatterPercentage?: float|null,
 *   destinationPackingCount?: int|null,
 *   destinationPalletCount?: int|null,
 *   destinationQuantityPerPacking?: float|null,
 *   expirationDate?: string|null,
 *   lineID?: string|null,
 *   loadingAddressID?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   manufactureDate?: string|null,
 *   numberOfLots?: int|null,
 *   origin?: string|null,
 *   originForIntrastat?: string|null,
 *   palletType?: string|null,
 *   sourceDryMatterPercentage?: float|null,
 *   sourcePackagingID?: string|null,
 *   specificInstructions?: string|null,
 *   stackingDetails?: string|null,
 *   supplierInstructions?: string|null,
 *   supplierReference?: string|null,
 *   unloadingAddressID?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 * }
 */
final class BackToBackOrderLine implements BaseModel
{
    /** @use SdkModel<BackToBackOrderLineShape> */
    use SdkModel;

    /**
     * The gross weight of the sales product in this line.
     */
    #[Required]
    public ?float $destinationGrossWeight;

    /**
     * Packaging identifier for the sales line.
     */
    #[Required('destinationPackagingId')]
    public ?string $destinationPackagingID;

    /**
     * The quantity delivered to sales destination for this line.
     */
    #[Required]
    public ?float $destinationQuantity;

    /**
     * The contract line id for the purchase.
     */
    #[Required('purchaseContractLineId')]
    public ?string $purchaseContractLineID;

    /**
     * The contract line id for the destination.
     */
    #[Required('salesContractLineId')]
    public ?string $salesContractLineID;

    /**
     * The gross weight of the purchase product in this line.
     */
    #[Required]
    public ?float $sourceGrossWeight;

    /**
     * The quantity sourced/purchased for this line.
     */
    #[Required]
    public ?float $sourceQuantity;

    /**
     * The dry matter percentage at the destination.
     */
    #[Optional(nullable: true)]
    public ?float $destinationDryMatterPercentage;

    /**
     * The number of packings for sales.
     */
    #[Optional(nullable: true)]
    public ?int $destinationPackingCount;

    /**
     * The number of pallets for sales.
     */
    #[Optional(nullable: true)]
    public ?int $destinationPalletCount;

    /**
     * The quantity per packing unit for sales.
     */
    #[Optional(nullable: true)]
    public ?float $destinationQuantityPerPacking;

    /**
     * Expiration date for this line.
     */
    #[Optional(nullable: true)]
    public ?string $expirationDate;

    /**
     * The unique identifier for this order line (nullable for new lines).(separated by comma).
     */
    #[Optional('lineId', nullable: true)]
    public ?string $lineID;

    /**
     * Address identifier where loading occurs for purchase.
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
     * The type of pallet used for this line.
     */
    #[Optional(nullable: true)]
    public ?string $palletType;

    /**
     * The dry matter percentage at the source.
     */
    #[Optional(nullable: true)]
    public ?float $sourceDryMatterPercentage;

    /**
     * Packaging identifier for the purchase line.
     */
    #[Optional('sourcePackagingId', nullable: true)]
    public ?string $sourcePackagingID;

    /**
     * Product specification or specific instructions for this line.
     */
    #[Optional(nullable: true)]
    public ?string $specificInstructions;

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
     * Address identifier where unloading occurs for sales.
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
     * `new BackToBackOrderLine()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * BackToBackOrderLine::with(
     *   destinationGrossWeight: ...,
     *   destinationPackagingID: ...,
     *   destinationQuantity: ...,
     *   purchaseContractLineID: ...,
     *   salesContractLineID: ...,
     *   sourceGrossWeight: ...,
     *   sourceQuantity: ...,
     * )
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new BackToBackOrderLine)
     *   ->withDestinationGrossWeight(...)
     *   ->withDestinationPackagingID(...)
     *   ->withDestinationQuantity(...)
     *   ->withPurchaseContractLineID(...)
     *   ->withSalesContractLineID(...)
     *   ->withSourceGrossWeight(...)
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
        ?float $destinationGrossWeight,
        ?string $destinationPackagingID,
        ?float $destinationQuantity,
        ?string $purchaseContractLineID,
        ?string $salesContractLineID,
        ?float $sourceGrossWeight,
        ?float $sourceQuantity,
        ?float $destinationDryMatterPercentage = null,
        ?int $destinationPackingCount = null,
        ?int $destinationPalletCount = null,
        ?float $destinationQuantityPerPacking = null,
        ?string $expirationDate = null,
        ?string $lineID = null,
        ?string $loadingAddressID = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?string $manufactureDate = null,
        ?int $numberOfLots = null,
        ?string $origin = null,
        ?string $originForIntrastat = null,
        ?string $palletType = null,
        ?float $sourceDryMatterPercentage = null,
        ?string $sourcePackagingID = null,
        ?string $specificInstructions = null,
        ?string $stackingDetails = null,
        ?string $supplierInstructions = null,
        ?string $supplierReference = null,
        ?string $unloadingAddressID = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
    ): self {
        $self = new self;

        $self['destinationGrossWeight'] = $destinationGrossWeight;
        $self['destinationPackagingID'] = $destinationPackagingID;
        $self['destinationQuantity'] = $destinationQuantity;
        $self['purchaseContractLineID'] = $purchaseContractLineID;
        $self['salesContractLineID'] = $salesContractLineID;
        $self['sourceGrossWeight'] = $sourceGrossWeight;
        $self['sourceQuantity'] = $sourceQuantity;

        null !== $destinationDryMatterPercentage && $self['destinationDryMatterPercentage'] = $destinationDryMatterPercentage;
        null !== $destinationPackingCount && $self['destinationPackingCount'] = $destinationPackingCount;
        null !== $destinationPalletCount && $self['destinationPalletCount'] = $destinationPalletCount;
        null !== $destinationQuantityPerPacking && $self['destinationQuantityPerPacking'] = $destinationQuantityPerPacking;
        null !== $expirationDate && $self['expirationDate'] = $expirationDate;
        null !== $lineID && $self['lineID'] = $lineID;
        null !== $loadingAddressID && $self['loadingAddressID'] = $loadingAddressID;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $manufactureDate && $self['manufactureDate'] = $manufactureDate;
        null !== $numberOfLots && $self['numberOfLots'] = $numberOfLots;
        null !== $origin && $self['origin'] = $origin;
        null !== $originForIntrastat && $self['originForIntrastat'] = $originForIntrastat;
        null !== $palletType && $self['palletType'] = $palletType;
        null !== $sourceDryMatterPercentage && $self['sourceDryMatterPercentage'] = $sourceDryMatterPercentage;
        null !== $sourcePackagingID && $self['sourcePackagingID'] = $sourcePackagingID;
        null !== $specificInstructions && $self['specificInstructions'] = $specificInstructions;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;
        null !== $supplierInstructions && $self['supplierInstructions'] = $supplierInstructions;
        null !== $supplierReference && $self['supplierReference'] = $supplierReference;
        null !== $unloadingAddressID && $self['unloadingAddressID'] = $unloadingAddressID;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;

        return $self;
    }

    /**
     * The gross weight of the sales product in this line.
     */
    public function withDestinationGrossWeight(
        ?float $destinationGrossWeight
    ): self {
        $self = clone $this;
        $self['destinationGrossWeight'] = $destinationGrossWeight;

        return $self;
    }

    /**
     * Packaging identifier for the sales line.
     */
    public function withDestinationPackagingID(
        ?string $destinationPackagingID
    ): self {
        $self = clone $this;
        $self['destinationPackagingID'] = $destinationPackagingID;

        return $self;
    }

    /**
     * The quantity delivered to sales destination for this line.
     */
    public function withDestinationQuantity(?float $destinationQuantity): self
    {
        $self = clone $this;
        $self['destinationQuantity'] = $destinationQuantity;

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
     * The contract line id for the destination.
     */
    public function withSalesContractLineID(?string $salesContractLineID): self
    {
        $self = clone $this;
        $self['salesContractLineID'] = $salesContractLineID;

        return $self;
    }

    /**
     * The gross weight of the purchase product in this line.
     */
    public function withSourceGrossWeight(?float $sourceGrossWeight): self
    {
        $self = clone $this;
        $self['sourceGrossWeight'] = $sourceGrossWeight;

        return $self;
    }

    /**
     * The quantity sourced/purchased for this line.
     */
    public function withSourceQuantity(?float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

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
     * The number of packings for sales.
     */
    public function withDestinationPackingCount(
        ?int $destinationPackingCount
    ): self {
        $self = clone $this;
        $self['destinationPackingCount'] = $destinationPackingCount;

        return $self;
    }

    /**
     * The number of pallets for sales.
     */
    public function withDestinationPalletCount(
        ?int $destinationPalletCount
    ): self {
        $self = clone $this;
        $self['destinationPalletCount'] = $destinationPalletCount;

        return $self;
    }

    /**
     * The quantity per packing unit for sales.
     */
    public function withDestinationQuantityPerPacking(
        ?float $destinationQuantityPerPacking
    ): self {
        $self = clone $this;
        $self['destinationQuantityPerPacking'] = $destinationQuantityPerPacking;

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
     * The unique identifier for this order line (nullable for new lines).(separated by comma).
     */
    public function withLineID(?string $lineID): self
    {
        $self = clone $this;
        $self['lineID'] = $lineID;

        return $self;
    }

    /**
     * Address identifier where loading occurs for purchase.
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
     * The type of pallet used for this line.
     */
    public function withPalletType(?string $palletType): self
    {
        $self = clone $this;
        $self['palletType'] = $palletType;

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
     * Packaging identifier for the purchase line.
     */
    public function withSourcePackagingID(?string $sourcePackagingID): self
    {
        $self = clone $this;
        $self['sourcePackagingID'] = $sourcePackagingID;

        return $self;
    }

    /**
     * Product specification or specific instructions for this line.
     */
    public function withSpecificInstructions(
        ?string $specificInstructions
    ): self {
        $self = clone $this;
        $self['specificInstructions'] = $specificInstructions;

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
     * Address identifier where unloading occurs for sales.
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
}
