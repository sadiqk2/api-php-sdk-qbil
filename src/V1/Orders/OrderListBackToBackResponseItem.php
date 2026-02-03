<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\OrderListBackToBackResponseItem\Status;
use QbilPhpSDK\V1\Stocks\ProductAnalysis;

/**
 * @phpstan-import-type ProductAnalysisShape from \QbilPhpSDK\V1\Stocks\ProductAnalysis
 *
 * @phpstan-type OrderListBackToBackResponseItemShape = array{
 *   id?: string|null,
 *   buyer?: string|null,
 *   destinationContract?: string|null,
 *   destinationContractNumber?: string|null,
 *   destinationGrossWeight?: float|null,
 *   destinationOrderReference?: string|null,
 *   destinationPackaging?: string|null,
 *   destinationPackingCount?: float|null,
 *   destinationPalletCount?: int|null,
 *   destinationProduct?: string|null,
 *   destinationQuantity?: float|null,
 *   destinationQuantityPerPacking?: float|null,
 *   expiryDate?: \DateTimeInterface|null,
 *   loadingReference?: string|null,
 *   loadingRemarks?: string|null,
 *   manufacturingDate?: \DateTimeInterface|null,
 *   orderDisplayNumber?: string|null,
 *   origin?: string|null,
 *   productAnalysis?: list<ProductAnalysis|ProductAnalysisShape>|null,
 *   purchaseInvoices?: list<string>|null,
 *   salesInvoice?: string|null,
 *   seller?: string|null,
 *   sourceContract?: string|null,
 *   sourceContractNumber?: string|null,
 *   sourceGrossWeight?: float|null,
 *   sourcePackaging?: string|null,
 *   sourceProduct?: string|null,
 *   sourceQuantity?: float|null,
 *   specificInstructions?: string|null,
 *   status?: null|Status|value-of<Status>,
 *   supplierInstructions?: string|null,
 *   supplierReference?: string|null,
 *   unloadingReference?: string|null,
 *   unloadingRemarks?: string|null,
 * }
 */
final class OrderListBackToBackResponseItem implements BaseModel
{
    /** @use SdkModel<OrderListBackToBackResponseItemShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $buyer;

    #[Optional]
    public ?string $destinationContract;

    #[Optional]
    public ?string $destinationContractNumber;

    #[Optional]
    public ?float $destinationGrossWeight;

    #[Optional]
    public ?string $destinationOrderReference;

    #[Optional(nullable: true)]
    public ?string $destinationPackaging;

    #[Optional]
    public ?float $destinationPackingCount;

    #[Optional(nullable: true)]
    public ?int $destinationPalletCount;

    #[Optional]
    public ?string $destinationProduct;

    #[Optional]
    public ?float $destinationQuantity;

    #[Optional]
    public ?float $destinationQuantityPerPacking;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $expiryDate;

    #[Optional]
    public ?string $loadingReference;

    #[Optional]
    public ?string $loadingRemarks;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $manufacturingDate;

    #[Optional]
    public ?string $orderDisplayNumber;

    #[Optional]
    public ?string $origin;

    /** @var list<ProductAnalysis>|null $productAnalysis */
    #[Optional(list: ProductAnalysis::class)]
    public ?array $productAnalysis;

    /**
     * This displays links to the purchase invoices that are associated with this back-to-back order line.
     *
     * @var list<string>|null $purchaseInvoices
     */
    #[Optional(list: 'string')]
    public ?array $purchaseInvoices;

    /**
     * This displays a link to the sales invoice that is associated with this back-to-back order line.
     */
    #[Optional(nullable: true)]
    public ?string $salesInvoice;

    #[Optional]
    public ?string $seller;

    #[Optional]
    public ?string $sourceContract;

    #[Optional]
    public ?string $sourceContractNumber;

    #[Optional]
    public ?float $sourceGrossWeight;

    #[Optional(nullable: true)]
    public ?string $sourcePackaging;

    #[Optional]
    public ?string $sourceProduct;

    #[Optional]
    public ?float $sourceQuantity;

    #[Optional]
    public ?string $specificInstructions;

    /** @var value-of<Status>|null $status */
    #[Optional(enum: Status::class)]
    public ?string $status;

    #[Optional]
    public ?string $supplierInstructions;

    #[Optional]
    public ?string $supplierReference;

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
     * @param list<ProductAnalysis|ProductAnalysisShape>|null $productAnalysis
     * @param list<string>|null $purchaseInvoices
     * @param Status|value-of<Status>|null $status
     */
    public static function with(
        ?string $id = null,
        ?string $buyer = null,
        ?string $destinationContract = null,
        ?string $destinationContractNumber = null,
        ?float $destinationGrossWeight = null,
        ?string $destinationOrderReference = null,
        ?string $destinationPackaging = null,
        ?float $destinationPackingCount = null,
        ?int $destinationPalletCount = null,
        ?string $destinationProduct = null,
        ?float $destinationQuantity = null,
        ?float $destinationQuantityPerPacking = null,
        ?\DateTimeInterface $expiryDate = null,
        ?string $loadingReference = null,
        ?string $loadingRemarks = null,
        ?\DateTimeInterface $manufacturingDate = null,
        ?string $orderDisplayNumber = null,
        ?string $origin = null,
        ?array $productAnalysis = null,
        ?array $purchaseInvoices = null,
        ?string $salesInvoice = null,
        ?string $seller = null,
        ?string $sourceContract = null,
        ?string $sourceContractNumber = null,
        ?float $sourceGrossWeight = null,
        ?string $sourcePackaging = null,
        ?string $sourceProduct = null,
        ?float $sourceQuantity = null,
        ?string $specificInstructions = null,
        Status|string|null $status = null,
        ?string $supplierInstructions = null,
        ?string $supplierReference = null,
        ?string $unloadingReference = null,
        ?string $unloadingRemarks = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $buyer && $self['buyer'] = $buyer;
        null !== $destinationContract && $self['destinationContract'] = $destinationContract;
        null !== $destinationContractNumber && $self['destinationContractNumber'] = $destinationContractNumber;
        null !== $destinationGrossWeight && $self['destinationGrossWeight'] = $destinationGrossWeight;
        null !== $destinationOrderReference && $self['destinationOrderReference'] = $destinationOrderReference;
        null !== $destinationPackaging && $self['destinationPackaging'] = $destinationPackaging;
        null !== $destinationPackingCount && $self['destinationPackingCount'] = $destinationPackingCount;
        null !== $destinationPalletCount && $self['destinationPalletCount'] = $destinationPalletCount;
        null !== $destinationProduct && $self['destinationProduct'] = $destinationProduct;
        null !== $destinationQuantity && $self['destinationQuantity'] = $destinationQuantity;
        null !== $destinationQuantityPerPacking && $self['destinationQuantityPerPacking'] = $destinationQuantityPerPacking;
        null !== $expiryDate && $self['expiryDate'] = $expiryDate;
        null !== $loadingReference && $self['loadingReference'] = $loadingReference;
        null !== $loadingRemarks && $self['loadingRemarks'] = $loadingRemarks;
        null !== $manufacturingDate && $self['manufacturingDate'] = $manufacturingDate;
        null !== $orderDisplayNumber && $self['orderDisplayNumber'] = $orderDisplayNumber;
        null !== $origin && $self['origin'] = $origin;
        null !== $productAnalysis && $self['productAnalysis'] = $productAnalysis;
        null !== $purchaseInvoices && $self['purchaseInvoices'] = $purchaseInvoices;
        null !== $salesInvoice && $self['salesInvoice'] = $salesInvoice;
        null !== $seller && $self['seller'] = $seller;
        null !== $sourceContract && $self['sourceContract'] = $sourceContract;
        null !== $sourceContractNumber && $self['sourceContractNumber'] = $sourceContractNumber;
        null !== $sourceGrossWeight && $self['sourceGrossWeight'] = $sourceGrossWeight;
        null !== $sourcePackaging && $self['sourcePackaging'] = $sourcePackaging;
        null !== $sourceProduct && $self['sourceProduct'] = $sourceProduct;
        null !== $sourceQuantity && $self['sourceQuantity'] = $sourceQuantity;
        null !== $specificInstructions && $self['specificInstructions'] = $specificInstructions;
        null !== $status && $self['status'] = $status;
        null !== $supplierInstructions && $self['supplierInstructions'] = $supplierInstructions;
        null !== $supplierReference && $self['supplierReference'] = $supplierReference;
        null !== $unloadingReference && $self['unloadingReference'] = $unloadingReference;
        null !== $unloadingRemarks && $self['unloadingRemarks'] = $unloadingRemarks;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withBuyer(string $buyer): self
    {
        $self = clone $this;
        $self['buyer'] = $buyer;

        return $self;
    }

    public function withDestinationContract(string $destinationContract): self
    {
        $self = clone $this;
        $self['destinationContract'] = $destinationContract;

        return $self;
    }

    public function withDestinationContractNumber(
        string $destinationContractNumber
    ): self {
        $self = clone $this;
        $self['destinationContractNumber'] = $destinationContractNumber;

        return $self;
    }

    public function withDestinationGrossWeight(
        float $destinationGrossWeight
    ): self {
        $self = clone $this;
        $self['destinationGrossWeight'] = $destinationGrossWeight;

        return $self;
    }

    public function withDestinationOrderReference(
        string $destinationOrderReference
    ): self {
        $self = clone $this;
        $self['destinationOrderReference'] = $destinationOrderReference;

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
        float $destinationPackingCount
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

    public function withDestinationQuantityPerPacking(
        float $destinationQuantityPerPacking
    ): self {
        $self = clone $this;
        $self['destinationQuantityPerPacking'] = $destinationQuantityPerPacking;

        return $self;
    }

    public function withExpiryDate(?\DateTimeInterface $expiryDate): self
    {
        $self = clone $this;
        $self['expiryDate'] = $expiryDate;

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

    public function withManufacturingDate(
        ?\DateTimeInterface $manufacturingDate
    ): self {
        $self = clone $this;
        $self['manufacturingDate'] = $manufacturingDate;

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

    /**
     * @param list<ProductAnalysis|ProductAnalysisShape> $productAnalysis
     */
    public function withProductAnalysis(array $productAnalysis): self
    {
        $self = clone $this;
        $self['productAnalysis'] = $productAnalysis;

        return $self;
    }

    /**
     * This displays links to the purchase invoices that are associated with this back-to-back order line.
     *
     * @param list<string> $purchaseInvoices
     */
    public function withPurchaseInvoices(array $purchaseInvoices): self
    {
        $self = clone $this;
        $self['purchaseInvoices'] = $purchaseInvoices;

        return $self;
    }

    /**
     * This displays a link to the sales invoice that is associated with this back-to-back order line.
     */
    public function withSalesInvoice(?string $salesInvoice): self
    {
        $self = clone $this;
        $self['salesInvoice'] = $salesInvoice;

        return $self;
    }

    public function withSeller(string $seller): self
    {
        $self = clone $this;
        $self['seller'] = $seller;

        return $self;
    }

    public function withSourceContract(string $sourceContract): self
    {
        $self = clone $this;
        $self['sourceContract'] = $sourceContract;

        return $self;
    }

    public function withSourceContractNumber(string $sourceContractNumber): self
    {
        $self = clone $this;
        $self['sourceContractNumber'] = $sourceContractNumber;

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

    public function withSpecificInstructions(string $specificInstructions): self
    {
        $self = clone $this;
        $self['specificInstructions'] = $specificInstructions;

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
