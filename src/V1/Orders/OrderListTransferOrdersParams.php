<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves the collection of TransferOrderLine resources.
 *
 * @see QbilPhpSDK\Services\V1\OrdersService::listTransferOrders()
 *
 * @phpstan-type OrderListTransferOrdersParamsShape = array{
 *   itemsPerPage?: int|null, page?: int|null
 * }
 */
final class OrderListTransferOrdersParams implements BaseModel
{
    /** @use SdkModel<OrderListTransferOrdersParamsShape> */
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
