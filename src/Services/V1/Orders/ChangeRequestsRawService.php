<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1\Orders;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\Orders\ChangeRequestsRawContract;
use QbilPhpSDK\V1\Orders\ChangeRequests\ChangeRequestCreateParams;
use QbilPhpSDK\V1\Orders\ChangeRequests\ChangeRequestListParams;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeRequest;

/**
 * @phpstan-import-type OrderChangeInputShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ChangeRequestsRawService implements ChangeRequestsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Create a new order change request for a given order
     *
     * @param string $orderID OrderChangeRequest identifier
     * @param array{
     *   proposedChanges: OrderChangeInput|OrderChangeInputShape,
     *   remarks?: string|null,
     *   sourceReference?: string|null,
     * }|ChangeRequestCreateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<OrderChangeRequest>
     *
     * @throws APIException
     */
    public function create(
        string $orderID,
        array|ChangeRequestCreateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ChangeRequestCreateParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'post',
            path: ['api/v1/orders/%1$s/change-requests', $orderID],
            body: (object) $parsed,
            options: $options,
            convert: OrderChangeRequest::class,
        );
    }

    /**
     * @api
     *
     * Get all order change requests for a given order
     *
     * @param string $orderID OrderChangeRequest identifier
     * @param array{itemsPerPage?: int, page?: int}|ChangeRequestListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<OrderChangeRequest>>
     *
     * @throws APIException
     */
    public function list(
        string $orderID,
        array|ChangeRequestListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ChangeRequestListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/orders/%1$s/change-requests', $orderID],
            query: $parsed,
            options: $options,
            convert: new ListOf(OrderChangeRequest::class),
        );
    }
}
