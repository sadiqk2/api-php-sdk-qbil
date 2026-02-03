<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Products\Product;
use QbilPhpSDK\V1\Products\ProductListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ProductsRawContract
{
    /**
     * @api
     *
     * @param string $id Product identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Product>
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
     * @param array<string,mixed>|ProductListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Product>>
     *
     * @throws APIException
     */
    public function list(
        array|ProductListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
