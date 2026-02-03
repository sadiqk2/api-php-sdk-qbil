<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Pallets\Pallet;
use QbilPhpSDK\V1\Pallets\PalletListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface PalletsRawContract
{
    /**
     * @api
     *
     * @param string $id Pallet identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Pallet>
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
     * @param array<string,mixed>|PalletListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Pallet>>
     *
     * @throws APIException
     */
    public function list(
        array|PalletListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
