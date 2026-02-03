<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\Contract\ContractLine;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type PlanningShape = array{
 *   period?: string|null, quantity?: string|null
 * }
 */
final class Planning implements BaseModel
{
    /** @use SdkModel<PlanningShape> */
    use SdkModel;

    /**
     * The period for which the particular quantity is planned, can be week or a month.
     */
    #[Optional]
    public ?string $period;

    #[Optional]
    public ?string $quantity;

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
        ?string $period = null,
        ?string $quantity = null
    ): self {
        $self = new self;

        null !== $period && $self['period'] = $period;
        null !== $quantity && $self['quantity'] = $quantity;

        return $self;
    }

    /**
     * The period for which the particular quantity is planned, can be week or a month.
     */
    public function withPeriod(string $period): self
    {
        $self = clone $this;
        $self['period'] = $period;

        return $self;
    }

    public function withQuantity(string $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }
}
