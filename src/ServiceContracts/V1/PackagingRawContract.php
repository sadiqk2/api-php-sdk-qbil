<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Packaging\Packaging;
use QbilPhpSDK\V1\Packaging\PackagingListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface PackagingRawContract
{
    /**
     * @api
     *
     * @param string $id Packaging identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Packaging>
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
     * @param array<string,mixed>|PackagingListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Packaging>>
     *
     * @throws APIException
     */
    public function list(
        array|PackagingListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
