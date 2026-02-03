<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Me\Me;
use QbilPhpSDK\V1\Me\MeUpdateParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface MeRawContract
{
    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Me>
     *
     * @throws APIException
     */
    public function retrieve(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|MeUpdateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Me>
     *
     * @throws APIException
     */
    public function update(
        array|MeUpdateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
