<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Relations;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves the collection of Relation resources.
 *
 * @see QbilPhpSDK\Services\V1\RelationsService::list()
 *
 * @phpstan-type RelationListParamsShape = array{
 *   itemsPerPage?: int|null, page?: int|null, shortCode?: string|null
 * }
 */
final class RelationListParams implements BaseModel
{
    /** @use SdkModel<RelationListParamsShape> */
    use SdkModel;
    use SdkParams;

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

    #[Optional]
    public ?string $shortCode;

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
        ?int $itemsPerPage = null,
        ?int $page = null,
        ?string $shortCode = null
    ): self {
        $self = new self;

        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $page && $self['page'] = $page;
        null !== $shortCode && $self['shortCode'] = $shortCode;

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

    public function withShortCode(string $shortCode): self
    {
        $self = clone $this;
        $self['shortCode'] = $shortCode;

        return $self;
    }
}
