<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Orders\OrderListSalesResponseItem\Status;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 *
 * @phpstan-type OrderListSalesResponseItemShape = array{
 *   id?: string|null,
 *   buyer?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   customsStatus?: string|null,
 *   grossWeight?: float|null,
 *   loadingAddress?: string|null,
 *   loadingAddressText?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   orderDisplayNumber?: string|null,
 *   packaging?: string|null,
 *   packingCount?: int|null,
 *   pallet?: string|null,
 *   palletCount?: int|null,
 *   palletType?: string|null,
 *   product?: string|null,
 *   quantity?: float|null,
 *   quantityPerPacking?: float|null,
 *   salesContract?: string|null,
 *   salesContractNumber?: string|null,
 *   salesInvoice?: string|null,
 *   sourceLot?: string|null,
 *   sourceSilo?: string|null,
 *   stackingDetails?: string|null,
 *   status?: null|Status|value-of<Status>,
 *   unloadingAddress?: string|null,
 *   unloadingAddressText?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class OrderListSalesResponseItem implements BaseModel
{
    /** @use SdkModel<OrderListSalesResponseItemShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional(nullable: true)]
    public ?string $buyer;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional(nullable: true)]
    public ?string $customsStatus;

    #[Optional]
    public ?float $grossWeight;

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

    #[Optional(nullable: true)]
    public ?string $packaging;

    #[Optional]
    public ?int $packingCount;

    #[Optional(nullable: true)]
    public ?string $pallet;

    #[Optional(nullable: true)]
    public ?int $palletCount;

    #[Optional]
    public ?string $palletType;

    #[Optional]
    public ?string $product;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?float $quantityPerPacking;

    #[Optional]
    public ?string $salesContract;

    #[Optional]
    public ?string $salesContractNumber;

    /**
     * This displays a link to the sales invoice that is associated with this sales order line.
     */
    #[Optional]
    public ?string $salesInvoice;

    #[Optional(nullable: true)]
    public ?string $sourceLot;

    #[Optional(nullable: true)]
    public ?string $sourceSilo;

    #[Optional]
    public ?string $stackingDetails;

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

    #[Optional(nullable: true)]
    public ?string $warehouseReference;

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
     * @param Status|value-of<Status>|null $status
     */
    public static function with(
        ?string $id = null,
        ?string $buyer = null,
        ?array $customFields = null,
        ?string $customsStatus = null,
        ?float $grossWeight = null,
        ?string $loadingAddress = null,
        ?string $loadingAddressText = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?string $orderDisplayNumber = null,
        ?string $packaging = null,
        ?int $packingCount = null,
        ?string $pallet = null,
        ?int $palletCount = null,
        ?string $palletType = null,
        ?string $product = null,
        ?float $quantity = null,
        ?float $quantityPerPacking = null,
        ?string $salesContract = null,
        ?string $salesContractNumber = null,
        ?string $salesInvoice = null,
        ?string $sourceLot = null,
        ?string $sourceSilo = null,
        ?string $stackingDetails = null,
        Status|string|null $status = null,
        ?string $unloadingAddress = null,
        ?string $unloadingAddressText = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $buyer && $self['buyer'] = $buyer;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $customsStatus && $self['customsStatus'] = $customsStatus;
        null !== $grossWeight && $self['grossWeight'] = $grossWeight;
        null !== $loadingAddress && $self['loadingAddress'] = $loadingAddress;
        null !== $loadingAddressText && $self['loadingAddressText'] = $loadingAddressText;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $orderDisplayNumber && $self['orderDisplayNumber'] = $orderDisplayNumber;
        null !== $packaging && $self['packaging'] = $packaging;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $pallet && $self['pallet'] = $pallet;
        null !== $palletCount && $self['palletCount'] = $palletCount;
        null !== $palletType && $self['palletType'] = $palletType;
        null !== $product && $self['product'] = $product;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $salesContract && $self['salesContract'] = $salesContract;
        null !== $salesContractNumber && $self['salesContractNumber'] = $salesContractNumber;
        null !== $salesInvoice && $self['salesInvoice'] = $salesInvoice;
        null !== $sourceLot && $self['sourceLot'] = $sourceLot;
        null !== $sourceSilo && $self['sourceSilo'] = $sourceSilo;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;
        null !== $status && $self['status'] = $status;
        null !== $unloadingAddress && $self['unloadingAddress'] = $unloadingAddress;
        null !== $unloadingAddressText && $self['unloadingAddressText'] = $unloadingAddressText;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withBuyer(?string $buyer): self
    {
        $self = clone $this;
        $self['buyer'] = $buyer;

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

    public function withCustomsStatus(?string $customsStatus): self
    {
        $self = clone $this;
        $self['customsStatus'] = $customsStatus;

        return $self;
    }

    public function withGrossWeight(float $grossWeight): self
    {
        $self = clone $this;
        $self['grossWeight'] = $grossWeight;

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

    public function withPackaging(?string $packaging): self
    {
        $self = clone $this;
        $self['packaging'] = $packaging;

        return $self;
    }

    public function withPackingCount(int $packingCount): self
    {
        $self = clone $this;
        $self['packingCount'] = $packingCount;

        return $self;
    }

    public function withPallet(?string $pallet): self
    {
        $self = clone $this;
        $self['pallet'] = $pallet;

        return $self;
    }

    public function withPalletCount(?int $palletCount): self
    {
        $self = clone $this;
        $self['palletCount'] = $palletCount;

        return $self;
    }

    public function withPalletType(string $palletType): self
    {
        $self = clone $this;
        $self['palletType'] = $palletType;

        return $self;
    }

    public function withProduct(string $product): self
    {
        $self = clone $this;
        $self['product'] = $product;

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

    public function withSalesContract(string $salesContract): self
    {
        $self = clone $this;
        $self['salesContract'] = $salesContract;

        return $self;
    }

    public function withSalesContractNumber(string $salesContractNumber): self
    {
        $self = clone $this;
        $self['salesContractNumber'] = $salesContractNumber;

        return $self;
    }

    /**
     * This displays a link to the sales invoice that is associated with this sales order line.
     */
    public function withSalesInvoice(string $salesInvoice): self
    {
        $self = clone $this;
        $self['salesInvoice'] = $salesInvoice;

        return $self;
    }

    public function withSourceLot(?string $sourceLot): self
    {
        $self = clone $this;
        $self['sourceLot'] = $sourceLot;

        return $self;
    }

    public function withSourceSilo(?string $sourceSilo): self
    {
        $self = clone $this;
        $self['sourceSilo'] = $sourceSilo;

        return $self;
    }

    public function withStackingDetails(string $stackingDetails): self
    {
        $self = clone $this;
        $self['stackingDetails'] = $stackingDetails;

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

    public function withWarehouseReference(?string $warehouseReference): self
    {
        $self = clone $this;
        $self['warehouseReference'] = $warehouseReference;

        return $self;
    }
}
