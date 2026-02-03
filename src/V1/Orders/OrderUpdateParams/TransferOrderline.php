<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\OrderUpdateParams;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type TransferOrderlineShape = array{
 *   destinationQuantity: float|null,
 *   lineID: string|null,
 *   sourceLotID: string|null,
 *   sourceQuantity: float|null,
 *   destinationGrossWeight?: float|null,
 *   destinationLotID?: string|null,
 *   destinationPackagingID?: string|null,
 *   destinationPackingCount?: int|null,
 *   destinationPalletCount?: int|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   originForIntrastat?: string|null,
 *   sourceGrossWeight?: float|null,
 *   specification?: string|null,
 *   unloadingAddressID?: string|null,
 *   unloadingAddressText?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class TransferOrderline implements BaseModel
{
    /** @use SdkModel<TransferOrderlineShape> */
    use SdkModel;

    #[Required]
    public ?float $destinationQuantity;

    /**
     * The unique identifier for this order line (nullable for new lines).
     */
    #[Required('lineId')]
    public ?string $lineID;

    #[Required('sourceLotId')]
    public ?string $sourceLotID;

    #[Required]
    public ?float $sourceQuantity;

    #[Optional(nullable: true)]
    public ?float $destinationGrossWeight;

    /**
     * <span style="color:red;">Required when the destination is existing lot</span>.
     */
    #[Optional('destinationLotId', nullable: true)]
    public ?string $destinationLotID;

    #[Optional('destinationPackagingId', nullable: true)]
    public ?string $destinationPackagingID;

    #[Optional(nullable: true)]
    public ?int $destinationPackingCount;

    #[Optional(nullable: true)]
    public ?int $destinationPalletCount;

    #[Optional(nullable: true)]
    public ?string $loadingReference;

    #[Optional(nullable: true)]
    public ?string $loadingRemarks;

    #[Optional(nullable: true)]
    public ?string $originForIntrastat;

    /**
     * <span style="color:red;">Required when the destination is new lot</span>.
     */
    #[Optional(nullable: true)]
    public ?float $sourceGrossWeight;

    #[Optional(nullable: true)]
    public ?string $specification;

    #[Optional('unloadingAddressId', nullable: true)]
    public ?string $unloadingAddressID;

    #[Optional(nullable: true)]
    public ?string $unloadingAddressText;

    #[Optional(nullable: true)]
    public ?string $unloadingReference;

    #[Optional(nullable: true)]
    public ?string $unloadingRemarks;

    #[Optional(nullable: true)]
    public ?string $warehouseReference;

    /**
     * `new TransferOrderline()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * TransferOrderline::with(
     *   destinationQuantity: ..., lineID: ..., sourceLotID: ..., sourceQuantity: ...
     * )
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new TransferOrderline)
     *   ->withDestinationQuantity(...)
     *   ->withLineID(...)
     *   ->withSourceLotID(...)
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
        ?string $lineID,
        ?string $sourceLotID,
        ?float $sourceQuantity,
        ?float $destinationGrossWeight = null,
        ?string $destinationLotID = null,
        ?string $destinationPackagingID = null,
        ?int $destinationPackingCount = null,
        ?int $destinationPalletCount = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?string $originForIntrastat = null,
        ?float $sourceGrossWeight = null,
        ?string $specification = null,
        ?string $unloadingAddressID = null,
        ?string $unloadingAddressText = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        $self['destinationQuantity'] = $destinationQuantity;
        $self['lineID'] = $lineID;
        $self['sourceLotID'] = $sourceLotID;
        $self['sourceQuantity'] = $sourceQuantity;

        null !== $destinationGrossWeight && $self['destinationGrossWeight'] = $destinationGrossWeight;
        null !== $destinationLotID && $self['destinationLotID'] = $destinationLotID;
        null !== $destinationPackagingID && $self['destinationPackagingID'] = $destinationPackagingID;
        null !== $destinationPackingCount && $self['destinationPackingCount'] = $destinationPackingCount;
        null !== $destinationPalletCount && $self['destinationPalletCount'] = $destinationPalletCount;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $originForIntrastat && $self['originForIntrastat'] = $originForIntrastat;
        null !== $sourceGrossWeight && $self['sourceGrossWeight'] = $sourceGrossWeight;
        null !== $specification && $self['specification'] = $specification;
        null !== $unloadingAddressID && $self['unloadingAddressID'] = $unloadingAddressID;
        null !== $unloadingAddressText && $self['unloadingAddressText'] = $unloadingAddressText;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;

        return $self;
    }

    public function withDestinationQuantity(?float $destinationQuantity): self
    {
        $self = clone $this;
        $self['destinationQuantity'] = $destinationQuantity;

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

    public function withSourceLotID(?string $sourceLotID): self
    {
        $self = clone $this;
        $self['sourceLotID'] = $sourceLotID;

        return $self;
    }

    public function withSourceQuantity(?float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

        return $self;
    }

    public function withDestinationGrossWeight(
        ?float $destinationGrossWeight
    ): self {
        $self = clone $this;
        $self['destinationGrossWeight'] = $destinationGrossWeight;

        return $self;
    }

    /**
     * <span style="color:red;">Required when the destination is existing lot</span>.
     */
    public function withDestinationLotID(?string $destinationLotID): self
    {
        $self = clone $this;
        $self['destinationLotID'] = $destinationLotID;

        return $self;
    }

    public function withDestinationPackagingID(
        ?string $destinationPackagingID
    ): self {
        $self = clone $this;
        $self['destinationPackagingID'] = $destinationPackagingID;

        return $self;
    }

    public function withDestinationPackingCount(
        ?int $destinationPackingCount
    ): self {
        $self = clone $this;
        $self['destinationPackingCount'] = $destinationPackingCount;

        return $self;
    }

    public function withDestinationPalletCount(
        ?int $destinationPalletCount
    ): self {
        $self = clone $this;
        $self['destinationPalletCount'] = $destinationPalletCount;

        return $self;
    }

    public function withLoadingReference(?string $loadingReference): self
    {
        $self = clone $this;
        $self['loadingReference'] = $loadingReference;

        return $self;
    }

    public function withLoadingRemarks(?string $loadingRemarks): self
    {
        $self = clone $this;
        $self['loadingRemarks'] = $loadingRemarks;

        return $self;
    }

    public function withOriginForIntrastat(?string $originForIntrastat): self
    {
        $self = clone $this;
        $self['originForIntrastat'] = $originForIntrastat;

        return $self;
    }

    /**
     * <span style="color:red;">Required when the destination is new lot</span>.
     */
    public function withSourceGrossWeight(?float $sourceGrossWeight): self
    {
        $self = clone $this;
        $self['sourceGrossWeight'] = $sourceGrossWeight;

        return $self;
    }

    public function withSpecification(?string $specification): self
    {
        $self = clone $this;
        $self['specification'] = $specification;

        return $self;
    }

    public function withUnloadingAddressID(?string $unloadingAddressID): self
    {
        $self = clone $this;
        $self['unloadingAddressID'] = $unloadingAddressID;

        return $self;
    }

    public function withUnloadingAddressText(
        ?string $unloadingAddressText
    ): self {
        $self = clone $this;
        $self['unloadingAddressText'] = $unloadingAddressText;

        return $self;
    }

    public function withUnloadingReference(?string $unloadingReference): self
    {
        $self = clone $this;
        $self['unloadingReference'] = $unloadingReference;

        return $self;
    }

    public function withUnloadingRemarks(?string $unloadingRemarks): self
    {
        $self = clone $this;
        $self['unloadingRemarks'] = $unloadingRemarks;

        return $self;
    }

    public function withWarehouseReference(?string $warehouseReference): self
    {
        $self = clone $this;
        $self['warehouseReference'] = $warehouseReference;

        return $self;
    }
}
