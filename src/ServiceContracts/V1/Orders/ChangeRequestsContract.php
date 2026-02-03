<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1\Orders;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeRequest;

/**
 * @phpstan-import-type OrderChangeInputShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ChangeRequestsContract
{
    /**
     * @api
     *
     * @param string $orderID OrderChangeRequest identifier
     * @param OrderChangeInput|OrderChangeInputShape $proposedChanges
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function create(
        string $orderID,
        OrderChangeInput|array $proposedChanges,
        ?string $remarks = null,
        ?string $sourceReference = null,
        RequestOptions|array|null $requestOptions = null,
    ): OrderChangeRequest;

    /**
     * @api
     *
     * @param string $orderID OrderChangeRequest identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<OrderChangeRequest>
     *
     * @throws APIException
     */
    public function list(
        string $orderID,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
