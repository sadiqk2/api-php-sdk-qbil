<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ProductionOrders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type ProductionIngredientShape = array{
 *   quantity: float,
 *   stockID: float,
 *   id?: float|null,
 *   packingCount?: float|null,
 *   remarks?: string|null,
 * }
 */
final class ProductionIngredient implements BaseModel
{
    /** @use SdkModel<ProductionIngredientShape> */
    use SdkModel;

    #[Required]
    public float $quantity;

    /**
     * Stock resource's id.
     */
    #[Required('stockId')]
    public float $stockID;

    /**
     * Production source id (for updates only).
     */
    #[Optional]
    public ?float $id;

    #[Optional]
    public ?float $packingCount;

    #[Optional]
    public ?string $remarks;

    /**
     * `new ProductionIngredient()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * ProductionIngredient::with(quantity: ..., stockID: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new ProductionIngredient)->withQuantity(...)->withStockID(...)
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
        float $quantity,
        float $stockID,
        ?float $id = null,
        ?float $packingCount = null,
        ?string $remarks = null,
    ): self {
        $self = new self;

        $self['quantity'] = $quantity;
        $self['stockID'] = $stockID;

        null !== $id && $self['id'] = $id;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $remarks && $self['remarks'] = $remarks;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    /**
     * Stock resource's id.
     */
    public function withStockID(float $stockID): self
    {
        $self = clone $this;
        $self['stockID'] = $stockID;

        return $self;
    }

    /**
     * Production source id (for updates only).
     */
    public function withID(float $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withPackingCount(float $packingCount): self
    {
        $self = clone $this;
        $self['packingCount'] = $packingCount;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }
}
