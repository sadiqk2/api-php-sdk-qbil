<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrder;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrderCreateParams;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrderListParams;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrderUpdateParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ProductionOrdersRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|ProductionOrderCreateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ProductionOrder>
     *
     * @throws APIException
     */
    public function create(
        array|ProductionOrderCreateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id Production order identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ProductionOrder>
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id Production order identifier
     * @param array<string,mixed>|ProductionOrderUpdateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ProductionOrder>
     *
     * @throws APIException
     */
    public function update(
        string $id,
        array|ProductionOrderUpdateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|ProductionOrderListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<ProductionOrder>>
     *
     * @throws APIException
     */
    public function list(
        array|ProductionOrderListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
