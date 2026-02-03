<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1\Orders;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\Orders\ChangeRequestsContract;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeRequest;

/**
 * @phpstan-import-type OrderChangeInputShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ChangeRequestsService implements ChangeRequestsContract
{
    /**
     * @api
     */
    public ChangeRequestsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new ChangeRequestsRawService($client);
    }

    /**
     * @api
     *
     * Create a new order change request for a given order
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
    ): OrderChangeRequest {
        $params = Util::removeNulls(
            [
                'proposedChanges' => $proposedChanges,
                'remarks' => $remarks,
                'sourceReference' => $sourceReference,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->create($orderID, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Get all order change requests for a given order
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
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list($orderID, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
