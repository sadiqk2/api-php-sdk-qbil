<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Stocks\Stock;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type MutationShape = array{
 *   date?: string|null,
 *   quantity?: float|null,
 *   type?: string|null,
 *   unit?: string|null,
 * }
 */
final class Mutation implements BaseModel
{
    /** @use SdkModel<MutationShape> */
    use SdkModel;

    #[Optional(nullable: true)]
    public ?string $date;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?string $type;

    #[Optional]
    public ?string $unit;

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
        ?string $date = null,
        ?float $quantity = null,
        ?string $type = null,
        ?string $unit = null,
    ): self {
        $self = new self;

        null !== $date && $self['date'] = $date;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $type && $self['type'] = $type;
        null !== $unit && $self['unit'] = $unit;

        return $self;
    }

    public function withDate(?string $date): self
    {
        $self = clone $this;
        $self['date'] = $date;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }

    public function withUnit(string $unit): self
    {
        $self = clone $this;
        $self['unit'] = $unit;

        return $self;
    }
}
