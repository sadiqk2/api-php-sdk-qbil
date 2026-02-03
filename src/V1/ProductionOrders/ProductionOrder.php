<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ProductionOrders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrder\Ingredient;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrder\ProductionResult;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type IngredientShape from \QbilPhpSDK\V1\ProductionOrders\ProductionOrder\Ingredient
 * @phpstan-import-type ProductionResultShape from \QbilPhpSDK\V1\ProductionOrders\ProductionOrder\ProductionResult
 *
 * @phpstan-type ProductionOrderShape = array{
 *   id?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   displayNumber?: string|null,
 *   finalized?: bool|null,
 *   ingredients?: list<Ingredient|IngredientShape>|null,
 *   intendedCustomer?: string|null,
 *   productionDate?: string|null,
 *   productionResults?: list<\QbilPhpSDK\V1\ProductionOrders\ProductionOrder\ProductionResult|ProductionResultShape>|null,
 *   remarks?: string|null,
 *   subsidiary?: string|null,
 *   treatment?: string|null,
 *   unitCode?: string|null,
 *   warehouse?: string|null,
 * }
 */
final class ProductionOrder implements BaseModel
{
    /** @use SdkModel<ProductionOrderShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?string $displayNumber;

    #[Optional]
    public ?bool $finalized;

    /** @var list<Ingredient>|null $ingredients */
    #[Optional(list: Ingredient::class)]
    public ?array $ingredients;

    #[Optional(nullable: true)]
    public ?string $intendedCustomer;

    #[Optional]
    public ?string $productionDate;

    /**
     * @var list<ProductionResult>|null $productionResults
     */
    #[Optional(
        list: ProductionResult::class,
    )]
    public ?array $productionResults;

    #[Optional]
    public ?string $remarks;

    #[Optional]
    public ?string $subsidiary;

    #[Optional]
    public ?string $treatment;

    #[Optional]
    public ?string $unitCode;

    #[Optional(nullable: true)]
    public ?string $warehouse;

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
     * @param list<Ingredient|IngredientShape>|null $ingredients
     * @param list<ProductionResult|ProductionResultShape>|null $productionResults
     */
    public static function with(
        ?string $id = null,
        ?array $customFields = null,
        ?string $displayNumber = null,
        ?bool $finalized = null,
        ?array $ingredients = null,
        ?string $intendedCustomer = null,
        ?string $productionDate = null,
        ?array $productionResults = null,
        ?string $remarks = null,
        ?string $subsidiary = null,
        ?string $treatment = null,
        ?string $unitCode = null,
        ?string $warehouse = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $displayNumber && $self['displayNumber'] = $displayNumber;
        null !== $finalized && $self['finalized'] = $finalized;
        null !== $ingredients && $self['ingredients'] = $ingredients;
        null !== $intendedCustomer && $self['intendedCustomer'] = $intendedCustomer;
        null !== $productionDate && $self['productionDate'] = $productionDate;
        null !== $productionResults && $self['productionResults'] = $productionResults;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;
        null !== $treatment && $self['treatment'] = $treatment;
        null !== $unitCode && $self['unitCode'] = $unitCode;
        null !== $warehouse && $self['warehouse'] = $warehouse;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

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

    public function withDisplayNumber(string $displayNumber): self
    {
        $self = clone $this;
        $self['displayNumber'] = $displayNumber;

        return $self;
    }

    public function withFinalized(bool $finalized): self
    {
        $self = clone $this;
        $self['finalized'] = $finalized;

        return $self;
    }

    /**
     * @param list<Ingredient|IngredientShape> $ingredients
     */
    public function withIngredients(array $ingredients): self
    {
        $self = clone $this;
        $self['ingredients'] = $ingredients;

        return $self;
    }

    public function withIntendedCustomer(?string $intendedCustomer): self
    {
        $self = clone $this;
        $self['intendedCustomer'] = $intendedCustomer;

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

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withSubsidiary(string $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }

    public function withTreatment(string $treatment): self
    {
        $self = clone $this;
        $self['treatment'] = $treatment;

        return $self;
    }

    public function withUnitCode(string $unitCode): self
    {
        $self = clone $this;
        $self['unitCode'] = $unitCode;

        return $self;
    }

    public function withWarehouse(?string $warehouse): self
    {
        $self = clone $this;
        $self['warehouse'] = $warehouse;

        return $self;
    }
}
