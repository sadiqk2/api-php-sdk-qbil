<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrder;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrderUpdateParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ContainerOrdersRawContract
{
    /**
     * @api
     *
     * @param string $id ContainerOrder identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ContainerOrder>
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
     * @param string $id_ ContainerOrder identifier
     * @param array<string,mixed>|ContainerOrderUpdateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ContainerOrder>
     *
     * @throws APIException
     */
    public function update(
        string $id_,
        array|ContainerOrderUpdateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
