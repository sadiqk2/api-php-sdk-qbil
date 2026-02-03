<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\PaymentConditions\PaymentCondition;
use QbilPhpSDK\V1\PaymentConditions\PaymentConditionListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface PaymentConditionsRawContract
{
    /**
     * @api
     *
     * @param string $id PaymentCondition identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<PaymentCondition>
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
     * @param array<string,mixed>|PaymentConditionListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<PaymentCondition>>
     *
     * @throws APIException
     */
    public function list(
        array|PaymentConditionListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
