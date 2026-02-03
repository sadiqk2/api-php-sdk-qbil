<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Orders\OrderListPurchaseResponseItem\Status;
use QbilPhpSDK\V1\Stocks\ProductAnalysis;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type ProductAnalysisShape from \QbilPhpSDK\V1\Stocks\ProductAnalysis
 *
 * @phpstan-type OrderListPurchaseResponseItemShape = array{
 *   id?: string|null,
 *   batchNumber?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   customsStatus?: string|null,
 *   destinationLot?: string|null,
 *   destinationSilo?: string|null,
 *   expirationDate?: string|null,
 *   grossWeight?: float|null,
 *   loadingAddress?: string|null,
 *   loadingAddressText?: string|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   manufactureDate?: string|null,
 *   numberOfPackages?: int|null,
 *   orderDisplayNumber?: string|null,
 *   origin?: string|null,
 *   originForIntrastat?: string|null,
 *   ourReference?: string|null,
 *   packaging?: string|null,
 *   packingCount?: int|null,
 *   pallet?: string|null,
 *   palletCount?: int|null,
 *   palletType?: string|null,
 *   product?: string|null,
 *   productAnalysis?: list<ProductAnalysis|ProductAnalysisShape>|null,
 *   purchaseContract?: string|null,
 *   purchaseContractNumber?: string|null,
 *   purchaseInvoices?: list<string>|null,
 *   quantity?: float|null,
 *   quantityPerPacking?: float|null,
 *   seller?: string|null,
 *   stackingDetails?: string|null,
 *   status?: null|Status|value-of<Status>,
 *   supplierInstructions?: string|null,
 *   supplierReference?: string|null,
 *   unloadingAddress?: string|null,
 *   unloadingAddressText?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class OrderListPurchaseResponseItem implements BaseModel
{
    /** @use SdkModel<OrderListPurchaseResponseItemShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $batchNumber;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional(nullable: true)]
    public ?string $customsStatus;

    #[Optional(nullable: true)]
    public ?string $destinationLot;

    #[Optional(nullable: true)]
    public ?string $destinationSilo;

    #[Optional(nullable: true)]
    public ?string $expirationDate;

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

    #[Optional(nullable: true)]
    public ?string $manufactureDate;

    #[Optional]
    public ?int $numberOfPackages;

    #[Optional]
    public ?string $orderDisplayNumber;

    #[Optional]
    public ?string $origin;

    #[Optional]
    public ?string $originForIntrastat;

    #[Optional]
    public ?string $ourReference;

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

    /** @var list<ProductAnalysis>|null $productAnalysis */
    #[Optional(list: ProductAnalysis::class)]
    public ?array $productAnalysis;

    #[Optional]
    public ?string $purchaseContract;

    #[Optional]
    public ?string $purchaseContractNumber;

    /**
     * This displays links to the purchase invoices that are associated with this purchase order line.
     *
     * @var list<string>|null $purchaseInvoices
     */
    #[Optional(list: 'string')]
    public ?array $purchaseInvoices;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?float $quantityPerPacking;

    #[Optional(nullable: true)]
    public ?string $seller;

    #[Optional]
    public ?string $stackingDetails;

    /** @var value-of<Status>|null $status */
    #[Optional(enum: Status::class)]
    public ?string $status;

    #[Optional]
    public ?string $supplierInstructions;

    #[Optional]
    public ?string $supplierReference;

    #[Optional(nullable: true)]
    public ?string $unloadingAddress;

    #[Optional(nullable: true)]
    public ?string $unloadingAddressText;

    #[Optional]
    public ?string $unloadingReference;

    #[Optional]
    public ?string $unloadingRemarks;

    #[Optional]
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
     * @param list<ProductAnalysis|ProductAnalysisShape>|null $productAnalysis
     * @param list<string>|null $purchaseInvoices
     * @param Status|value-of<Status>|null $status
     */
    public static function with(
        ?string $id = null,
        ?string $batchNumber = null,
        ?array $customFields = null,
        ?string $customsStatus = null,
        ?string $destinationLot = null,
        ?string $destinationSilo = null,
        ?string $expirationDate = null,
        ?float $grossWeight = null,
        ?string $loadingAddress = null,
        ?string $loadingAddressText = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?string $manufactureDate = null,
        ?int $numberOfPackages = null,
        ?string $orderDisplayNumber = null,
        ?string $origin = null,
        ?string $originForIntrastat = null,
        ?string $ourReference = null,
        ?string $packaging = null,
        ?int $packingCount = null,
        ?string $pallet = null,
        ?int $palletCount = null,
        ?string $palletType = null,
        ?string $product = null,
        ?array $productAnalysis = null,
        ?string $purchaseContract = null,
        ?string $purchaseContractNumber = null,
        ?array $purchaseInvoices = null,
        ?float $quantity = null,
        ?float $quantityPerPacking = null,
        ?string $seller = null,
        ?string $stackingDetails = null,
        Status|string|null $status = null,
        ?string $supplierInstructions = null,
        ?string $supplierReference = null,
        ?string $unloadingAddress = null,
        ?string $unloadingAddressText = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $batchNumber && $self['batchNumber'] = $batchNumber;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $customsStatus && $self['customsStatus'] = $customsStatus;
        null !== $destinationLot && $self['destinationLot'] = $destinationLot;
        null !== $destinationSilo && $self['destinationSilo'] = $destinationSilo;
        null !== $expirationDate && $self['expirationDate'] = $expirationDate;
        null !== $grossWeight && $self['grossWeight'] = $grossWeight;
        null !== $loadingAddress && $self['loadingAddress'] = $loadingAddress;
        null !== $loadingAddressText && $self['loadingAddressText'] = $loadingAddressText;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $manufactureDate && $self['manufactureDate'] = $manufactureDate;
        null !== $numberOfPackages && $self['numberOfPackages'] = $numberOfPackages;
        null !== $orderDisplayNumber && $self['orderDisplayNumber'] = $orderDisplayNumber;
        null !== $origin && $self['origin'] = $origin;
        null !== $originForIntrastat && $self['originForIntrastat'] = $originForIntrastat;
        null !== $ourReference && $self['ourReference'] = $ourReference;
        null !== $packaging && $self['packaging'] = $packaging;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $pallet && $self['pallet'] = $pallet;
        null !== $palletCount && $self['palletCount'] = $palletCount;
        null !== $palletType && $self['palletType'] = $palletType;
        null !== $product && $self['product'] = $product;
        null !== $productAnalysis && $self['productAnalysis'] = $productAnalysis;
        null !== $purchaseContract && $self['purchaseContract'] = $purchaseContract;
        null !== $purchaseContractNumber && $self['purchaseContractNumber'] = $purchaseContractNumber;
        null !== $purchaseInvoices && $self['purchaseInvoices'] = $purchaseInvoices;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $seller && $self['seller'] = $seller;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;
        null !== $status && $self['status'] = $status;
        null !== $supplierInstructions && $self['supplierInstructions'] = $supplierInstructions;
        null !== $supplierReference && $self['supplierReference'] = $supplierReference;
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

    public function withBatchNumber(string $batchNumber): self
    {
        $self = clone $this;
        $self['batchNumber'] = $batchNumber;

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

    public function withDestinationLot(?string $destinationLot): self
    {
        $self = clone $this;
        $self['destinationLot'] = $destinationLot;

        return $self;
    }

    public function withDestinationSilo(?string $destinationSilo): self
    {
        $self = clone $this;
        $self['destinationSilo'] = $destinationSilo;

        return $self;
    }

    public function withExpirationDate(?string $expirationDate): self
    {
        $self = clone $this;
        $self['expirationDate'] = $expirationDate;

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

    public function withManufactureDate(?string $manufactureDate): self
    {
        $self = clone $this;
        $self['manufactureDate'] = $manufactureDate;

        return $self;
    }

    public function withNumberOfPackages(int $numberOfPackages): self
    {
        $self = clone $this;
        $self['numberOfPackages'] = $numberOfPackages;

        return $self;
    }

    public function withOrderDisplayNumber(string $orderDisplayNumber): self
    {
        $self = clone $this;
        $self['orderDisplayNumber'] = $orderDisplayNumber;

        return $self;
    }

    public function withOrigin(string $origin): self
    {
        $self = clone $this;
        $self['origin'] = $origin;

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

    /**
     * @param list<ProductAnalysis|ProductAnalysisShape> $productAnalysis
     */
    public function withProductAnalysis(array $productAnalysis): self
    {
        $self = clone $this;
        $self['productAnalysis'] = $productAnalysis;

        return $self;
    }

    public function withPurchaseContract(string $purchaseContract): self
    {
        $self = clone $this;
        $self['purchaseContract'] = $purchaseContract;

        return $self;
    }

    public function withPurchaseContractNumber(
        string $purchaseContractNumber
    ): self {
        $self = clone $this;
        $self['purchaseContractNumber'] = $purchaseContractNumber;

        return $self;
    }

    /**
     * This displays links to the purchase invoices that are associated with this purchase order line.
     *
     * @param list<string> $purchaseInvoices
     */
    public function withPurchaseInvoices(array $purchaseInvoices): self
    {
        $self = clone $this;
        $self['purchaseInvoices'] = $purchaseInvoices;

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

    public function withSeller(?string $seller): self
    {
        $self = clone $this;
        $self['seller'] = $seller;

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

    public function withSupplierInstructions(string $supplierInstructions): self
    {
        $self = clone $this;
        $self['supplierInstructions'] = $supplierInstructions;

        return $self;
    }

    public function withSupplierReference(string $supplierReference): self
    {
        $self = clone $this;
        $self['supplierReference'] = $supplierReference;

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

    public function withWarehouseReference(string $warehouseReference): self
    {
        $self = clone $this;
        $self['warehouseReference'] = $warehouseReference;

        return $self;
    }
}
