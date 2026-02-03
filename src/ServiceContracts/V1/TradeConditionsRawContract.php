<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\TradeConditions\TradeCondition;
use QbilPhpSDK\V1\TradeConditions\TradeConditionListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface TradeConditionsRawContract
{
    /**
     * @api
     *
     * @param string $id TradeCondition identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<TradeCondition>
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
     * @param array<string,mixed>|TradeConditionListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<TradeCondition>>
     *
     * @throws APIException
     */
    public function list(
        array|TradeConditionListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
