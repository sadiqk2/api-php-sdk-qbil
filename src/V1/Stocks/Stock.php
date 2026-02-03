<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Stocks;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Stocks\Stock\Mutation;
use QbilPhpSDK\V1\Stocks\Stock\StockReservation;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type MutationShape from \QbilPhpSDK\V1\Stocks\Stock\Mutation
 * @phpstan-import-type ProductAnalysisShape from \QbilPhpSDK\V1\Stocks\ProductAnalysis
 * @phpstan-import-type StockReservationShape from \QbilPhpSDK\V1\Stocks\Stock\StockReservation
 *
 * @phpstan-type StockShape = array{
 *   id?: string|null,
 *   analysis?: string|null,
 *   batchNumber?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   expirationDate?: string|null,
 *   manufacturingDate?: string|null,
 *   mutations?: list<Mutation|MutationShape>|null,
 *   origin?: string|null,
 *   ourReference?: string|null,
 *   packaging?: string|null,
 *   pricePerTon?: float|null,
 *   product?: string|null,
 *   productAnalysis?: list<ProductAnalysis|ProductAnalysisShape>|null,
 *   quantityPerPackaging?: float|null,
 *   remainingQuantity?: float|null,
 *   remarks?: string|null,
 *   specification?: string|null,
 *   stackingDetails?: string|null,
 *   status?: string|null,
 *   stockReservation?: list<StockReservation|StockReservationShape>|null,
 *   subsidiary?: string|null,
 *   unit?: string|null,
 *   warehouse?: string|null,
 *   warehouseReference?: string|null,
 * }
 */
final class Stock implements BaseModel
{
    /** @use SdkModel<StockShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $analysis;

    #[Optional]
    public ?string $batchNumber;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional(nullable: true)]
    public ?string $expirationDate;

    #[Optional(nullable: true)]
    public ?string $manufacturingDate;

    /** @var list<Mutation>|null $mutations */
    #[Optional(list: Mutation::class)]
    public ?array $mutations;

    #[Optional]
    public ?string $origin;

    #[Optional]
    public ?string $ourReference;

    #[Optional(nullable: true)]
    public ?string $packaging;

    #[Optional]
    public ?float $pricePerTon;

    #[Optional]
    public ?string $product;

    /** @var list<ProductAnalysis>|null $productAnalysis */
    #[Optional(list: ProductAnalysis::class)]
    public ?array $productAnalysis;

    #[Optional]
    public ?float $quantityPerPackaging;

    #[Optional]
    public ?float $remainingQuantity;

    #[Optional]
    public ?string $remarks;

    #[Optional]
    public ?string $specification;

    #[Optional]
    public ?string $stackingDetails;

    #[Optional]
    public ?string $status;

    /** @var list<StockReservation>|null $stockReservation */
    #[Optional(list: StockReservation::class)]
    public ?array $stockReservation;

    #[Optional(nullable: true)]
    public ?string $subsidiary;

    #[Optional]
    public ?string $unit;

    #[Optional(nullable: true)]
    public ?string $warehouse;

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
     * @param list<Mutation|MutationShape>|null $mutations
     * @param list<ProductAnalysis|ProductAnalysisShape>|null $productAnalysis
     * @param list<StockReservation|StockReservationShape>|null $stockReservation
     */
    public static function with(
        ?string $id = null,
        ?string $analysis = null,
        ?string $batchNumber = null,
        ?array $customFields = null,
        ?string $expirationDate = null,
        ?string $manufacturingDate = null,
        ?array $mutations = null,
        ?string $origin = null,
        ?string $ourReference = null,
        ?string $packaging = null,
        ?float $pricePerTon = null,
        ?string $product = null,
        ?array $productAnalysis = null,
        ?float $quantityPerPackaging = null,
        ?float $remainingQuantity = null,
        ?string $remarks = null,
        ?string $specification = null,
        ?string $stackingDetails = null,
        ?string $status = null,
        ?array $stockReservation = null,
        ?string $subsidiary = null,
        ?string $unit = null,
        ?string $warehouse = null,
        ?string $warehouseReference = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $analysis && $self['analysis'] = $analysis;
        null !== $batchNumber && $self['batchNumber'] = $batchNumber;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $expirationDate && $self['expirationDate'] = $expirationDate;
        null !== $manufacturingDate && $self['manufacturingDate'] = $manufacturingDate;
        null !== $mutations && $self['mutations'] = $mutations;
        null !== $origin && $self['origin'] = $origin;
        null !== $ourReference && $self['ourReference'] = $ourReference;
        null !== $packaging && $self['packaging'] = $packaging;
        null !== $pricePerTon && $self['pricePerTon'] = $pricePerTon;
        null !== $product && $self['product'] = $product;
        null !== $productAnalysis && $self['productAnalysis'] = $productAnalysis;
        null !== $quantityPerPackaging && $self['quantityPerPackaging'] = $quantityPerPackaging;
        null !== $remainingQuantity && $self['remainingQuantity'] = $remainingQuantity;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $specification && $self['specification'] = $specification;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;
        null !== $status && $self['status'] = $status;
        null !== $stockReservation && $self['stockReservation'] = $stockReservation;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;
        null !== $unit && $self['unit'] = $unit;
        null !== $warehouse && $self['warehouse'] = $warehouse;
        null !== $warehouseReference && $self['warehouseReference'] = $warehouseReference;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAnalysis(string $analysis): self
    {
        $self = clone $this;
        $self['analysis'] = $analysis;

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

    public function withExpirationDate(?string $expirationDate): self
    {
        $self = clone $this;
        $self['expirationDate'] = $expirationDate;

        return $self;
    }

    public function withManufacturingDate(?string $manufacturingDate): self
    {
        $self = clone $this;
        $self['manufacturingDate'] = $manufacturingDate;

        return $self;
    }

    /**
     * @param list<Mutation|MutationShape> $mutations
     */
    public function withMutations(array $mutations): self
    {
        $self = clone $this;
        $self['mutations'] = $mutations;

        return $self;
    }

    public function withOrigin(string $origin): self
    {
        $self = clone $this;
        $self['origin'] = $origin;

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

    public function withPricePerTon(float $pricePerTon): self
    {
        $self = clone $this;
        $self['pricePerTon'] = $pricePerTon;

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

    public function withQuantityPerPackaging(float $quantityPerPackaging): self
    {
        $self = clone $this;
        $self['quantityPerPackaging'] = $quantityPerPackaging;

        return $self;
    }

    public function withRemainingQuantity(float $remainingQuantity): self
    {
        $self = clone $this;
        $self['remainingQuantity'] = $remainingQuantity;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withSpecification(string $specification): self
    {
        $self = clone $this;
        $self['specification'] = $specification;

        return $self;
    }

    public function withStackingDetails(string $stackingDetails): self
    {
        $self = clone $this;
        $self['stackingDetails'] = $stackingDetails;

        return $self;
    }

    public function withStatus(string $status): self
    {
        $self = clone $this;
        $self['status'] = $status;

        return $self;
    }

    /**
     * @param list<StockReservation|StockReservationShape> $stockReservation
     */
    public function withStockReservation(array $stockReservation): self
    {
        $self = clone $this;
        $self['stockReservation'] = $stockReservation;

        return $self;
    }

    public function withSubsidiary(?string $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }

    public function withUnit(string $unit): self
    {
        $self = clone $this;
        $self['unit'] = $unit;

        return $self;
    }

    public function withWarehouse(?string $warehouse): self
    {
        $self = clone $this;
        $self['warehouse'] = $warehouse;

        return $self;
    }

    public function withWarehouseReference(string $warehouseReference): self
    {
        $self = clone $this;
        $self['warehouseReference'] = $warehouseReference;

        return $self;
    }
}
