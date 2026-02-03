<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\DeliveryConditions\DeliveryCondition;
use QbilPhpSDK\V1\DeliveryConditions\DeliveryConditionListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface DeliveryConditionsRawContract
{
    /**
     * @api
     *
     * @param string $code DeliveryCondition identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<DeliveryCondition>
     *
     * @throws APIException
     */
    public function retrieve(
        string $code,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|DeliveryConditionListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<DeliveryCondition>>
     *
     * @throws APIException
     */
    public function list(
        array|DeliveryConditionListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
