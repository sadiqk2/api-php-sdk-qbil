<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Stocks\Stock;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type StockReservationShape = array{
 *   remarks?: string|null,
 *   reservedBy?: string|null,
 *   reservedQuantity?: float|null,
 *   validThrough?: string|null,
 * }
 */
final class StockReservation implements BaseModel
{
    /** @use SdkModel<StockReservationShape> */
    use SdkModel;

    #[Optional]
    public ?string $remarks;

    #[Optional]
    public ?string $reservedBy;

    #[Optional]
    public ?float $reservedQuantity;

    #[Optional(nullable: true)]
    public ?string $validThrough;

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
        ?string $remarks = null,
        ?string $reservedBy = null,
        ?float $reservedQuantity = null,
        ?string $validThrough = null,
    ): self {
        $self = new self;

        null !== $remarks && $self['remarks'] = $remarks;
        null !== $reservedBy && $self['reservedBy'] = $reservedBy;
        null !== $reservedQuantity && $self['reservedQuantity'] = $reservedQuantity;
        null !== $validThrough && $self['validThrough'] = $validThrough;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withReservedBy(string $reservedBy): self
    {
        $self = clone $this;
        $self['reservedBy'] = $reservedBy;

        return $self;
    }

    public function withReservedQuantity(float $reservedQuantity): self
    {
        $self = clone $this;
        $self['reservedQuantity'] = $reservedQuantity;

        return $self;
    }

    public function withValidThrough(?string $validThrough): self
    {
        $self = clone $this;
        $self['validThrough'] = $validThrough;

        return $self;
    }
}
