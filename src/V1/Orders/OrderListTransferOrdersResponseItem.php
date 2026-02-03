<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\OrderListTransferOrdersResponseItem\Status;

/**
 * @phpstan-type OrderListTransferOrdersResponseItemShape = array{
 *   id?: string|null,
 *   destinationGrossWeight?: float|null,
 *   destinationPackaging?: string|null,
 *   destinationPackingCount?: int|null,
 *   destinationPalletCount?: int|null,
 *   destinationProduct?: string|null,
 *   destinationQuantity?: float|null,
 *   destinationSilo?: string|null,
 *   destinationStock?: string|null,
 *   destinationWarehouseReference?: string|null,
 *   loadingAddress?: string|null,
 *   loadingAddressText?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   orderDisplayNumber?: string|null,
 *   originForIntrastat?: string|null,
 *   ourReference?: string|null,
 *   sourceAnalysis?: string|null,
 *   sourceGrossWeight?: float|null,
 *   sourcePackaging?: string|null,
 *   sourceProduct?: string|null,
 *   sourceQuantity?: float|null,
 *   sourceSilo?: string|null,
 *   sourceStock?: string|null,
 *   specification?: string|null,
 *   status?: null|Status|value-of<Status>,
 *   unloadingAddress?: string|null,
 *   unloadingAddressText?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 * }
 */
final class OrderListTransferOrdersResponseItem implements BaseModel
{
    /** @use SdkModel<OrderListTransferOrdersResponseItemShape> */
    use SdkModel;

    /**
     * Combination of source line and destination line separated by underscore.
     */
    #[Optional]
    public ?string $id;

    #[Optional]
    public ?float $destinationGrossWeight;

    #[Optional(nullable: true)]
    public ?string $destinationPackaging;

    #[Optional]
    public ?int $destinationPackingCount;

    #[Optional(nullable: true)]
    public ?int $destinationPalletCount;

    #[Optional]
    public ?string $destinationProduct;

    #[Optional]
    public ?float $destinationQuantity;

    #[Optional(nullable: true)]
    public ?string $destinationSilo;

    #[Optional(nullable: true)]
    public ?string $destinationStock;

    #[Optional]
    public ?string $destinationWarehouseReference;

    #[Optional(nullable: true)]
    public ?string $loadingAddress;

    #[Optional(nullable: true)]
    public ?string $loadingAddressText;

    #[Optional]
    public ?string $loadingReference;

    #[Optional]
    public ?string $loadingRemarks;

    #[Optional]
    public ?string $orderDisplayNumber;

    #[Optional]
    public ?string $originForIntrastat;

    #[Optional]
    public ?string $ourReference;

    #[Optional]
    public ?string $sourceAnalysis;

    #[Optional]
    public ?float $sourceGrossWeight;

    #[Optional(nullable: true)]
    public ?string $sourcePackaging;

    #[Optional]
    public ?string $sourceProduct;

    #[Optional]
    public ?float $sourceQuantity;

    #[Optional(nullable: true)]
    public ?string $sourceSilo;

    #[Optional(nullable: true)]
    public ?string $sourceStock;

    #[Optional]
    public ?string $specification;

    /** @var value-of<Status>|null $status */
    #[Optional(enum: Status::class)]
    public ?string $status;

    #[Optional(nullable: true)]
    public ?string $unloadingAddress;

    #[Optional(nullable: true)]
    public ?string $unloadingAddressText;

    #[Optional]
    public ?string $unloadingReference;

    #[Optional]
    public ?string $unloadingRemarks;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Status|value-of<Status>|null $status
     */
    public static function with(
        ?string $id = null,
        ?float $destinationGrossWeight = null,
        ?string $destinationPackaging = null,
        ?int $destinationPackingCount = null,
        ?int $destinationPalletCount = null,
        ?string $destinationProduct = null,
        ?float $destinationQuantity = null,
        ?string $destinationSilo = null,
        ?string $destinationStock = null,
        ?string $destinationWarehouseReference = null,
        ?string $loadingAddress = null,
        ?string $loadingAddressText = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?string $orderDisplayNumber = null,
        ?string $originForIntrastat = null,
        ?string $ourReference = null,
        ?string $sourceAnalysis = null,
        ?float $sourceGrossWeight = null,
        ?string $sourcePackaging = null,
        ?string $sourceProduct = null,
        ?float $sourceQuantity = null,
        ?string $sourceSilo = null,
        ?string $sourceStock = null,
        ?string $specification = null,
        Status|string|null $status = null,
        ?string $unloadingAddress = null,
        ?string $unloadingAddressText = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $destinationGrossWeight && $self['destinationGrossWeight'] = $destinationGrossWeight;
        null !== $destinationPackaging && $self['destinationPackaging'] = $destinationPackaging;
        null !== $destinationPackingCount && $self['destinationPackingCount'] = $destinationPackingCount;
        null !== $destinationPalletCount && $self['destinationPalletCount'] = $destinationPalletCount;
        null !== $destinationProduct && $self['destinationProduct'] = $destinationProduct;
        null !== $destinationQuantity && $self['destinationQuantity'] = $destinationQuantity;
        null !== $destinationSilo && $self['destinationSilo'] = $destinationSilo;
        null !== $destinationStock && $self['destinationStock'] = $destinationStock;
        null !== $destinationWarehouseReference && $self['destinationWarehouseReference'] = $destinationWarehouseReference;
        null !== $loadingAddress && $self['loadingAddress'] = $loadingAddress;
        null !== $loadingAddressText && $self['loadingAddressText'] = $loadingAddressText;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $orderDisplayNumber && $self['orderDisplayNumber'] = $orderDisplayNumber;
        null !== $originForIntrastat && $self['originForIntrastat'] = $originForIntrastat;
        null !== $ourReference && $self['ourReference'] = $ourReference;
        null !== $sourceAnalysis && $self['sourceAnalysis'] = $sourceAnalysis;
        null !== $sourceGrossWeight && $self['sourceGrossWeight'] = $sourceGrossWeight;
        null !== $sourcePackaging && $self['sourcePackaging'] = $sourcePackaging;
        null !== $sourceProduct && $self['sourceProduct'] = $sourceProduct;
        null !== $sourceQuantity && $self['sourceQuantity'] = $sourceQuantity;
        null !== $sourceSilo && $self['sourceSilo'] = $sourceSilo;
        null !== $sourceStock && $self['sourceStock'] = $sourceStock;
        null !== $specification && $self['specification'] = $specification;
        null !== $status && $self['status'] = $status;
        null !== $unloadingAddress && $self['unloadingAddress'] = $unloadingAddress;
        null !== $unloadingAddressText && $self['unloadingAddressText'] = $unloadingAddressText;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;

        return $self;
    }

    /**
     * Combination of source line and destination line separated by underscore.
     */
    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withDestinationGrossWeight(
        float $destinationGrossWeight
    ): self {
        $self = clone $this;
        $self['destinationGrossWeight'] = $destinationGrossWeight;

        return $self;
    }

    public function withDestinationPackaging(
        ?string $destinationPackaging
    ): self {
        $self = clone $this;
        $self['destinationPackaging'] = $destinationPackaging;

        return $self;
    }

    public function withDestinationPackingCount(
        int $destinationPackingCount
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

    public function withDestinationProduct(string $destinationProduct): self
    {
        $self = clone $this;
        $self['destinationProduct'] = $destinationProduct;

        return $self;
    }

    public function withDestinationQuantity(float $destinationQuantity): self
    {
        $self = clone $this;
        $self['destinationQuantity'] = $destinationQuantity;

        return $self;
    }

    public function withDestinationSilo(?string $destinationSilo): self
    {
        $self = clone $this;
        $self['destinationSilo'] = $destinationSilo;

        return $self;
    }

    public function withDestinationStock(?string $destinationStock): self
    {
        $self = clone $this;
        $self['destinationStock'] = $destinationStock;

        return $self;
    }

    public function withDestinationWarehouseReference(
        string $destinationWarehouseReference
    ): self {
        $self = clone $this;
        $self['destinationWarehouseReference'] = $destinationWarehouseReference;

        return $self;
    }

    public function withLoadingAddress(?string $loadingAddress): self
    {
        $self = clone $this;
        $self['loadingAddress'] = $loadingAddress;

        return $self;
    }

    public function withLoadingAddressText(?string $loadingAddressText): self
    {
        $self = clone $this;
        $self['loadingAddressText'] = $loadingAddressText;

        return $self;
    }

    public function withLoadingReference(string $loadingReference): self
    {
        $self = clone $this;
        $self['loadingReference'] = $loadingReference;

        return $self;
    }

    public function withLoadingRemarks(string $loadingRemarks): self
    {
        $self = clone $this;
        $self['loadingRemarks'] = $loadingRemarks;

        return $self;
    }

    public function withOrderDisplayNumber(string $orderDisplayNumber): self
    {
        $self = clone $this;
        $self['orderDisplayNumber'] = $orderDisplayNumber;

        return $self;
    }

    public function withOriginForIntrastat(string $originForIntrastat): self
    {
        $self = clone $this;
        $self['originForIntrastat'] = $originForIntrastat;

        return $self;
    }

    public function withOurReference(string $ourReference): self
    {
        $self = clone $this;
        $self['ourReference'] = $ourReference;

        return $self;
    }

    public function withSourceAnalysis(string $sourceAnalysis): self
    {
        $self = clone $this;
        $self['sourceAnalysis'] = $sourceAnalysis;

        return $self;
    }

    public function withSourceGrossWeight(float $sourceGrossWeight): self
    {
        $self = clone $this;
        $self['sourceGrossWeight'] = $sourceGrossWeight;

        return $self;
    }

    public function withSourcePackaging(?string $sourcePackaging): self
    {
        $self = clone $this;
        $self['sourcePackaging'] = $sourcePackaging;

        return $self;
    }

    public function withSourceProduct(string $sourceProduct): self
    {
        $self = clone $this;
        $self['sourceProduct'] = $sourceProduct;

        return $self;
    }

    public function withSourceQuantity(float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

        return $self;
    }

    public function withSourceSilo(?string $sourceSilo): self
    {
        $self = clone $this;
        $self['sourceSilo'] = $sourceSilo;

        return $self;
    }

    public function withSourceStock(?string $sourceStock): self
    {
        $self = clone $this;
        $self['sourceStock'] = $sourceStock;

        return $self;
    }

    public function withSpecification(string $specification): self
    {
        $self = clone $this;
        $self['specification'] = $specification;

        return $self;
    }

    /**
     * @param Status|value-of<Status> $status
     */
    public function withStatus(Status|string $status): self
    {
        $self = clone $this;
        $self['status'] = $status;

        return $self;
    }

    public function withUnloadingAddress(?string $unloadingAddress): self
    {
        $self = clone $this;
        $self['unloadingAddress'] = $unloadingAddress;

        return $self;
    }

    public function withUnloadingAddressText(
        ?string $unloadingAddressText
    ): self {
        $self = clone $this;
        $self['unloadingAddressText'] = $unloadingAddressText;

        return $self;
    }

    public function withUnloadingReference(string $unloadingReference): self
    {
        $self = clone $this;
        $self['unloadingReference'] = $unloadingReference;

        return $self;
    }

    public function withUnloadingRemarks(string $unloadingRemarks): self
    {
        $self = clone $this;
        $self['unloadingRemarks'] = $unloadingRemarks;

        return $self;
    }
}
