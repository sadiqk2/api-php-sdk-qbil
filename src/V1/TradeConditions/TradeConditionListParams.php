<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\TradeConditions;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves the collection of TradeCondition resources.
 *
 * @see QbilPhpSDK\Services\V1\TradeConditionsService::list()
 *
 * @phpstan-type TradeConditionListParamsShape = array{
 *   id?: list<string>|null, itemsPerPage?: int|null, page?: int|null
 * }
 */
final class TradeConditionListParams implements BaseModel
{
    /** @use SdkModel<TradeConditionListParamsShape> */
    use SdkModel;
    use SdkParams;

    /** @var list<string>|null $id */
    #[Optional(list: 'string')]
    public ?array $id;

    /**
     * The number of items per page.
     */
    #[Optional]
    public ?int $itemsPerPage;

    /**
     * The collection page number.
     */
    #[Optional]
    public ?int $page;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $id
     */
    public static function with(
        ?array $id = null,
        ?int $itemsPerPage = null,
        ?int $page = null
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $page && $self['page'] = $page;

        return $self;
    }

    /**
     * @param list<string> $id
     */
    public function withID(array $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

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
     * The collection page number.
     */
    public function withPage(int $page): self
    {
        $self = clone $this;
        $self['page'] = $page;

        return $self;
    }
}
