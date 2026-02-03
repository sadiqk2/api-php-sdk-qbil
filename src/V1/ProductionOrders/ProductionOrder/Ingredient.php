<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ProductionOrders\ProductionOrder;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type IngredientShape = array{
 *   id?: int|null,
 *   packaging?: string|null,
 *   packingCount?: int|null,
 *   product?: string|null,
 *   productSpecification?: string|null,
 *   quantity?: float|null,
 *   remarks?: string|null,
 *   stock?: string|null,
 * }
 */
final class Ingredient implements BaseModel
{
    /** @use SdkModel<IngredientShape> */
    use SdkModel;

    #[Optional]
    public ?int $id;

    #[Optional(nullable: true)]
    public ?string $packaging;

    #[Optional]
    public ?int $packingCount;

    #[Optional(nullable: true)]
    public ?string $product;

    #[Optional]
    public ?string $productSpecification;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?string $remarks;

    #[Optional]
    public ?string $stock;

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
        ?int $id = null,
        ?string $packaging = null,
        ?int $packingCount = null,
        ?string $product = null,
        ?string $productSpecification = null,
        ?float $quantity = null,
        ?string $remarks = null,
        ?string $stock = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $packaging && $self['packaging'] = $packaging;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $product && $self['product'] = $product;
        null !== $productSpecification && $self['productSpecification'] = $productSpecification;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $stock && $self['stock'] = $stock;

        return $self;
    }

    public function withID(int $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

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

    public function withProduct(?string $product): self
    {
        $self = clone $this;
        $self['product'] = $product;

        return $self;
    }

    public function withProductSpecification(string $productSpecification): self
    {
        $self = clone $this;
        $self['productSpecification'] = $productSpecification;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withStock(string $stock): self
    {
        $self = clone $this;
        $self['stock'] = $stock;

        return $self;
    }
}
