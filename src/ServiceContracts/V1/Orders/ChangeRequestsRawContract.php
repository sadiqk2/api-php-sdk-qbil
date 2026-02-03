<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1\Orders;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Orders\ChangeRequests\ChangeRequestCreateParams;
use QbilPhpSDK\V1\Orders\ChangeRequests\ChangeRequestListParams;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeRequest;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ChangeRequestsRawContract
{
    /**
     * @api
     *
     * @param string $orderID OrderChangeRequest identifier
     * @param array<string,mixed>|ChangeRequestCreateParams $params
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $orderID OrderChangeRequest identifier
     * @param array<string,mixed>|ChangeRequestListParams $params
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
    ): BaseResponse;
}
