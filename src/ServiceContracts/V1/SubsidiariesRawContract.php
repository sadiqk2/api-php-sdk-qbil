<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Subsidiaries\Subsidiary;
use QbilPhpSDK\V1\Subsidiaries\SubsidiaryListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface SubsidiariesRawContract
{
    /**
     * @api
     *
     * @param string $id Subsidiary identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Subsidiary>
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
     * @param array<string,mixed>|SubsidiaryListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Subsidiary>>
     *
     * @throws APIException
     */
    public function list(
        array|SubsidiaryListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
