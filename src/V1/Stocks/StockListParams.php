<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Stocks;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves the collection of Stock resources.
 *
 * @see QbilPhpSDK\Services\V1\StocksService::list()
 *
 * @phpstan-type StockListParamsShape = array{
 *   itemsPerPage?: int|null,
 *   ourReference?: list<string>|null,
 *   page?: int|null,
 *   remainingQuantity?: list<float>|null,
 *   remainingQuantityBetween?: string|null,
 *   remainingQuantityGt?: string|null,
 *   remainingQuantityGte?: string|null,
 *   remainingQuantityLt?: string|null,
 *   remainingQuantityLte?: string|null,
 * }
 */
final class StockListParams implements BaseModel
{
    /** @use SdkModel<StockListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * The number of items per page.
     */
    #[Optional]
    public ?int $itemsPerPage;

    /** @var list<string>|null $ourReference */
    #[Optional(list: 'string')]
    public ?array $ourReference;

    /**
     * The collection page number.
     */
    #[Optional]
    public ?int $page;

    /** @var list<float>|null $remainingQuantity */
    #[Optional(list: 'float')]
    public ?array $remainingQuantity;

    #[Optional]
    public ?string $remainingQuantityBetween;

    #[Optional]
    public ?string $remainingQuantityGt;

    #[Optional]
    public ?string $remainingQuantityGte;

    #[Optional]
    public ?string $remainingQuantityLt;

    #[Optional]
    public ?string $remainingQuantityLte;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $ourReference
     * @param list<float>|null $remainingQuantity
     */
    public static function with(
        ?int $itemsPerPage = null,
        ?array $ourReference = null,
        ?int $page = null,
        ?array $remainingQuantity = null,
        ?string $remainingQuantityBetween = null,
        ?string $remainingQuantityGt = null,
        ?string $remainingQuantityGte = null,
        ?string $remainingQuantityLt = null,
        ?string $remainingQuantityLte = null,
    ): self {
        $self = new self;

        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $ourReference && $self['ourReference'] = $ourReference;
        null !== $page && $self['page'] = $page;
        null !== $remainingQuantity && $self['remainingQuantity'] = $remainingQuantity;
        null !== $remainingQuantityBetween && $self['remainingQuantityBetween'] = $remainingQuantityBetween;
        null !== $remainingQuantityGt && $self['remainingQuantityGt'] = $remainingQuantityGt;
        null !== $remainingQuantityGte && $self['remainingQuantityGte'] = $remainingQuantityGte;
        null !== $remainingQuantityLt && $self['remainingQuantityLt'] = $remainingQuantityLt;
        null !== $remainingQuantityLte && $self['remainingQuantityLte'] = $remainingQuantityLte;

        return $self;
    }

    /**
     * The number of items per page.
     */
    public function withItemsPerPage(int $itemsPerPage): self
    {
        $self = clone $this;
        $self['itemsPerPage'] = $itemsPerPage;

        return $self;
    }

    /**
     * @param list<string> $ourReference
     */
    public function withOurReference(array $ourReference): self
    {
        $self = clone $this;
        $self['ourReference'] = $ourReference;

        return $self;
    }

    /**
     * The collection page number.
     */
    public function withPage(int $page): self
    {
        $self = clone $this;
        $self['page'] = $page;

        return $self;
    }

    /**
     * @param list<float> $remainingQuantity
     */
    public function withRemainingQuantity(array $remainingQuantity): self
    {
        $self = clone $this;
        $self['remainingQuantity'] = $remainingQuantity;

        return $self;
    }

    public function withRemainingQuantityBetween(
        string $remainingQuantityBetween
    ): self {
        $self = clone $this;
        $self['remainingQuantityBetween'] = $remainingQuantityBetween;

        return $self;
    }

    public function withRemainingQuantityGt(string $remainingQuantityGt): self
    {
        $self = clone $this;
        $self['remainingQuantityGt'] = $remainingQuantityGt;

        return $self;
    }

    public function withRemainingQuantityGte(string $remainingQuantityGte): self
    {
        $self = clone $this;
        $self['remainingQuantityGte'] = $remainingQuantityGte;

        return $self;
    }

    public function withRemainingQuantityLt(string $remainingQuantityLt): self
    {
        $self = clone $this;
        $self['remainingQuantityLt'] = $remainingQuantityLt;

        return $self;
    }

    public function withRemainingQuantityLte(string $remainingQuantityLte): self
    {
        $self = clone $this;
        $self['remainingQuantityLte'] = $remainingQuantityLte;

        return $self;
    }
}
