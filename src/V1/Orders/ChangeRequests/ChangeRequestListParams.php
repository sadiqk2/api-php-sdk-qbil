<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Get all order change requests for a given order.
 *
 * @see QbilPhpSDK\Services\V1\Orders\ChangeRequestsService::list()
 *
 * @phpstan-type ChangeRequestListParamsShape = array{
 *   itemsPerPage?: int|null, page?: int|null
 * }
 */
final class ChangeRequestListParams implements BaseModel
{
    /** @use SdkModel<ChangeRequestListParamsShape> */
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
        ?int $page = null
    ): self {
        $self = new self;

        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $page && $self['page'] = $page;

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
