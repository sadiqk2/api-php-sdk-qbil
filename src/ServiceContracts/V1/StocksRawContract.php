<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Stocks\Stock;
use QbilPhpSDK\V1\Stocks\StockListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface StocksRawContract
{
    /**
     * @api
     *
     * @param string $id Stock identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Stock>
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
     * @param array<string,mixed>|StockListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Stock>>
     *
     * @throws APIException
     */
    public function list(
        array|StockListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
