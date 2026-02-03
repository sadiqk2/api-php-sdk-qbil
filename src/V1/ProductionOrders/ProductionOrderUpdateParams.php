<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ProductionOrders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Partially update a Production Order. Only provided fields will be updated.
 *
 * @see QbilPhpSDK\Services\V1\ProductionOrdersService::update()
 *
 * @phpstan-import-type ProductionIngredientShape from \QbilPhpSDK\V1\ProductionOrders\ProductionIngredient
 * @phpstan-import-type ProductionResultShape from \QbilPhpSDK\V1\ProductionOrders\ProductionResult
 *
 * @phpstan-type ProductionOrderUpdateParamsShape = array{
 *   ingredients?: list<ProductionIngredient|ProductionIngredientShape>|null,
 *   intendedCustomerID?: float|null,
 *   productionDate?: string|null,
 *   productionResults?: list<ProductionResult|ProductionResultShape>|null,
 *   remarks?: string|null,
 *   subsidiaryID?: string|null,
 *   treatment?: string|null,
 *   unitCode?: string|null,
 *   warehouseID?: float|null,
 * }
 */
final class ProductionOrderUpdateParams implements BaseModel
{
    /** @use SdkModel<ProductionOrderUpdateParamsShape> */
    use SdkModel;
    use SdkParams;

    /** @var list<ProductionIngredient>|null $ingredients */
    #[Optional(list: ProductionIngredient::class)]
    public ?array $ingredients;

    /**
     * Intended Customer Relation resource id.
     */
    #[Optional('intendedCustomerId')]
    public ?float $intendedCustomerID;

    #[Optional]
    public ?string $productionDate;

    /** @var list<ProductionResult>|null $productionResults */
    #[Optional(list: ProductionResult::class)]
    public ?array $productionResults;

    #[Optional(nullable: true)]
    public ?string $remarks;

    /**
     * Subsidiary resource's id.
     */
    #[Optional('subsidiaryId')]
    public ?string $subsidiaryID;

    #[Optional(nullable: true)]
    public ?string $treatment;

    /**
     * Quantity unit.
     */
    #[Optional]
    public ?string $unitCode;

    /**
     * Address resource's id.
     */
    #[Optional('warehouseId')]
    public ?float $warehouseID;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<ProductionIngredient|ProductionIngredientShape>|null $ingredients
     * @param list<ProductionResult|ProductionResultShape>|null $productionResults
     */
    public static function with(
        ?array $ingredients = null,
        ?float $intendedCustomerID = null,
        ?string $productionDate = null,
        ?array $productionResults = null,
        ?string $remarks = null,
        ?string $subsidiaryID = null,
        ?string $treatment = null,
        ?string $unitCode = null,
        ?float $warehouseID = null,
    ): self {
        $self = new self;

        null !== $ingredients && $self['ingredients'] = $ingredients;
        null !== $intendedCustomerID && $self['intendedCustomerID'] = $intendedCustomerID;
        null !== $productionDate && $self['productionDate'] = $productionDate;
        null !== $productionResults && $self['productionResults'] = $productionResults;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $subsidiaryID && $self['subsidiaryID'] = $subsidiaryID;
        null !== $treatment && $self['treatment'] = $treatment;
        null !== $unitCode && $self['unitCode'] = $unitCode;
        null !== $warehouseID && $self['warehouseID'] = $warehouseID;

        return $self;
    }

    /**
     * @param list<ProductionIngredient|ProductionIngredientShape> $ingredients
     */
    public function withIngredients(array $ingredients): self
    {
        $self = clone $this;
        $self['ingredients'] = $ingredients;

        return $self;
    }

    /**
     * Intended Customer Relation resource id.
     */
    public function withIntendedCustomerID(float $intendedCustomerID): self
    {
        $self = clone $this;
        $self['intendedCustomerID'] = $intendedCustomerID;

        return $self;
    }

    public function withProductionDate(string $productionDate): self
    {
        $self = clone $this;
        $self['productionDate'] = $productionDate;

        return $self;
    }

    /**
     * @param list<ProductionResult|ProductionResultShape> $productionResults
     */
    public function withProductionResults(array $productionResults): self
    {
        $self = clone $this;
        $self['productionResults'] = $productionResults;

        return $self;
    }

    public function withRemarks(?string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    /**
     * Subsidiary resource's id.
     */
    public function withSubsidiaryID(string $subsidiaryID): self
    {
        $self = clone $this;
        $self['subsidiaryID'] = $subsidiaryID;

        return $self;
    }

    public function withTreatment(?string $treatment): self
    {
        $self = clone $this;
        $self['treatment'] = $treatment;

        return $self;
    }

    /**
     * Quantity unit.
     */
    public function withUnitCode(string $unitCode): self
    {
        $self = clone $this;
        $self['unitCode'] = $unitCode;

        return $self;
    }

    /**
     * Address resource's id.
     */
    public function withWarehouseID(float $warehouseID): self
    {
        $self = clone $this;
        $self['warehouseID'] = $warehouseID;

        return $self;
    }
}
