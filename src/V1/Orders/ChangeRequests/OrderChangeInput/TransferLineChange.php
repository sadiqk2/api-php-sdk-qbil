<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\TransferLineChange\Mode;

/**
 * @phpstan-type TransferLineChangeShape = array{
 *   lineID: string,
 *   destinationGrossWeight?: float|null,
 *   destinationLotID?: string|null,
 *   destinationPackagingID?: string|null,
 *   destinationPackingCount?: int|null,
 *   destinationPalletCount?: int|null,
 *   destinationQuantity?: float|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   mode?: null|Mode|value-of<Mode>,
 *   originForIntrastat?: string|null,
 *   sourceGrossWeight?: float|null,
 *   sourceQuantity?: float|null,
 *   specification?: string|null,
 *   unloadingAddressID?: string|null,
 *   unloadingAddressText?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class TransferLineChange implements BaseModel
{
    /** @use SdkModel<TransferLineChangeShape> */
    use SdkModel;

    /**
     * Reference to existing transfer order line (composite: sourceId_destinationId).
     */
    #[Required('lineId')]
    public string $lineID;

    /**
     * The gross weight at destination.
     */
    #[Optional(nullable: true)]
    public ?float $destinationGrossWeight;

    /**
     * Identifier of the destination lot.
     */
    #[Optional('destinationLotId', nullable: true)]
    public ?string $destinationLotID;

    /**
     * Packaging identifier for destination.
     */
    #[Optional('destinationPackagingId', nullable: true)]
    public ?string $destinationPackagingID;

    /**
     * Number of packings at destination.
     */
    #[Optional(nullable: true)]
    public ?int $destinationPackingCount;

    /**
     * Number of pallets at destination.
     */
    #[Optional(nullable: true)]
    public ?int $destinationPalletCount;

    /**
     * The quantity at destination.
     */
    #[Optional(nullable: true)]
    public ?float $destinationQuantity;

    /**
     * Reference for loading operations.
     */
    #[Optional(nullable: true)]
    public ?string $loadingReference;

    /**
     * Remarks about loading.
     */
    #[Optional(nullable: true)]
    public ?string $loadingRemarks;

    /**
     * Mode: "update" modifies existing line, "add" creates new line using the referenced line's source lot.
     *
     * @var value-of<Mode>|null $mode
     */
    #[Optional(enum: Mode::class)]
    public ?string $mode;

    /**
     * Intrastat origin code.
     */
    #[Optional(nullable: true)]
    public ?string $originForIntrastat;

    /**
     * The gross weight at source.
     */
    #[Optional(nullable: true)]
    public ?float $sourceGrossWeight;

    /**
     * The quantity at source.
     */
    #[Optional(nullable: true)]
    public ?float $sourceQuantity;

    /**
     * Specification about product.
     */
    #[Optional(nullable: true)]
    public ?string $specification;

    /**
     * Address identifier where unloading occurs.
     */
    #[Optional('unloadingAddressId', nullable: true)]
    public ?string $unloadingAddressID;

    /**
     * Text for unloading address.
     */
    #[Optional(nullable: true)]
    public ?string $unloadingAddressText;

    /**
     * Reference for unloading operations.
     */
    #[Optional(nullable: true)]
    public ?string $unloadingReference;

    /**
     * Remarks about unloading.
     */
    #[Optional(nullable: true)]
    public ?string $unloadingRemarks;

    /**
     * Reference to the warehouse for this line.
     */
    #[Optional(nullable: true)]
    public ?string $warehouseReference;

    /**
     * `new TransferLineChange()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * TransferLineChange::with(lineID: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new TransferLineChange)->withLineID(...)
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
        ?float $destinationGrossWeight = null,
        ?string $destinationLotID = null,
        ?string $destinationPackagingID = null,
        ?int $destinationPackingCount = null,
        ?int $destinationPalletCount = null,
        ?float $destinationQuantity = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        Mode|string|null $mode = null,
        ?string $originForIntrastat = null,
        ?float $sourceGrossWeight = null,
        ?float $sourceQuantity = null,
        ?string $specification = null,
        ?string $unloadingAddressID = null,
        ?string $unloadingAddressText = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        $self['lineID'] = $lineID;

        null !== $destinationGrossWeight && $self['destinationGrossWeight'] = $destinationGrossWeight;
        null !== $destinationLotID && $self['destinationLotID'] = $destinationLotID;
        null !== $destinationPackagingID && $self['destinationPackagingID'] = $destinationPackagingID;
        null !== $destinationPackingCount && $self['destinationPackingCount'] = $destinationPackingCount;
        null !== $destinationPalletCount && $self['destinationPalletCount'] = $destinationPalletCount;
        null !== $destinationQuantity && $self['destinationQuantity'] = $destinationQuantity;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $mode && $self['mode'] = $mode;
        null !== $originForIntrastat && $self['originForIntrastat'] = $originForIntrastat;
        null !== $sourceGrossWeight && $self['sourceGrossWeight'] = $sourceGrossWeight;
        null !== $sourceQuantity && $self['sourceQuantity'] = $sourceQuantity;
        null !== $specification && $self['specification'] = $specification;
        null !== $unloadingAddressID && $self['unloadingAddressID'] = $unloadingAddressID;
        null !== $unloadingAddressText && $self['unloadingAddressText'] = $unloadingAddressText;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;

        return $self;
    }

    /**
     * Reference to existing transfer order line (composite: sourceId_destinationId).
     */
    public function withLineID(string $lineID): self
    {
        $self = clone $this;
        $self['lineID'] = $lineID;

        return $self;
    }

    /**
     * The gross weight at destination.
     */
    public function withDestinationGrossWeight(
        ?float $destinationGrossWeight
    ): self {
        $self = clone $this;
        $self['destinationGrossWeight'] = $destinationGrossWeight;

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
     * Packaging identifier for destination.
     */
    public function withDestinationPackagingID(
        ?string $destinationPackagingID
    ): self {
        $self = clone $this;
        $self['destinationPackagingID'] = $destinationPackagingID;

        return $self;
    }

    /**
     * Number of packings at destination.
     */
    public function withDestinationPackingCount(
        ?int $destinationPackingCount
    ): self {
        $self = clone $this;
        $self['destinationPackingCount'] = $destinationPackingCount;

        return $self;
    }

    /**
     * Number of pallets at destination.
     */
    public function withDestinationPalletCount(
        ?int $destinationPalletCount
    ): self {
        $self = clone $this;
        $self['destinationPalletCount'] = $destinationPalletCount;

        return $self;
    }

    /**
     * The quantity at destination.
     */
    public function withDestinationQuantity(?float $destinationQuantity): self
    {
        $self = clone $this;
        $self['destinationQuantity'] = $destinationQuantity;

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
     * Remarks about loading.
     */
    public function withLoadingRemarks(?string $loadingRemarks): self
    {
        $self = clone $this;
        $self['loadingRemarks'] = $loadingRemarks;

        return $self;
    }

    /**
     * Mode: "update" modifies existing line, "add" creates new line using the referenced line's source lot.
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
     * Intrastat origin code.
     */
    public function withOriginForIntrastat(?string $originForIntrastat): self
    {
        $self = clone $this;
        $self['originForIntrastat'] = $originForIntrastat;

        return $self;
    }

    /**
     * The gross weight at source.
     */
    public function withSourceGrossWeight(?float $sourceGrossWeight): self
    {
        $self = clone $this;
        $self['sourceGrossWeight'] = $sourceGrossWeight;

        return $self;
    }

    /**
     * The quantity at source.
     */
    public function withSourceQuantity(?float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

        return $self;
    }

    /**
     * Specification about product.
     */
    public function withSpecification(?string $specification): self
    {
        $self = clone $this;
        $self['specification'] = $specification;

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
     * Text for unloading address.
     */
    public function withUnloadingAddressText(
        ?string $unloadingAddressText
    ): self {
        $self = clone $this;
        $self['unloadingAddressText'] = $unloadingAddressText;

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
     * Remarks about unloading.
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
