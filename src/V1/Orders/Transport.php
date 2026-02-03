<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type TransportShape = array{
 *   currency: string,
 *   relationID: string,
 *   totalEstimatedAmount: float,
 *   costPerTon?: float|null,
 * }
 */
final class Transport implements BaseModel
{
    /** @use SdkModel<TransportShape> */
    use SdkModel;

    #[Required]
    public string $currency;

    #[Required('relationId')]
    public string $relationID;

    /**
     * Total estimated amount for the transport order.
     */
    #[Required]
    public float $totalEstimatedAmount;

    /**
     * Cost per metric ton.
     */
    #[Optional(nullable: true)]
    public ?float $costPerTon;

    /**
     * `new Transport()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * Transport::with(currency: ..., relationID: ..., totalEstimatedAmount: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new Transport)
     *   ->withCurrency(...)
     *   ->withRelationID(...)
     *   ->withTotalEstimatedAmount(...)
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
        string $currency,
        string $relationID,
        float $totalEstimatedAmount = 0,
        ?float $costPerTon = null,
    ): self {
        $self = new self;

        $self['currency'] = $currency;
        $self['relationID'] = $relationID;
        $self['totalEstimatedAmount'] = $totalEstimatedAmount;

        null !== $costPerTon && $self['costPerTon'] = $costPerTon;

        return $self;
    }

    public function withCurrency(string $currency): self
    {
        $self = clone $this;
        $self['currency'] = $currency;

        return $self;
    }

    public function withRelationID(string $relationID): self
    {
        $self = clone $this;
        $self['relationID'] = $relationID;

        return $self;
    }

    /**
     * Total estimated amount for the transport order.
     */
    public function withTotalEstimatedAmount(float $totalEstimatedAmount): self
    {
        $self = clone $this;
        $self['totalEstimatedAmount'] = $totalEstimatedAmount;

        return $self;
    }

    /**
     * Cost per metric ton.
     */
    public function withCostPerTon(?float $costPerTon): self
    {
        $self = clone $this;
        $self['costPerTon'] = $costPerTon;

        return $self;
    }
}
