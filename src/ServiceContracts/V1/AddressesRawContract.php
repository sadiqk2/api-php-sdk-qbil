<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Addresses\AddressListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface AddressesRawContract
{
    /**
     * @api
     *
     * @param string $id Address identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Address>
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
     * @param array<string,mixed>|AddressListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Address>>
     *
     * @throws APIException
     */
    public function list(
        array|AddressListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
