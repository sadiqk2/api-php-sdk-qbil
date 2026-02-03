<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Contracts\Contract;
use QbilPhpSDK\V1\Contracts\ContractListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ContractsRawContract
{
    /**
     * @api
     *
     * @param string $id Contract identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Contract>
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
     * @param array<string,mixed>|ContractListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Contract>>
     *
     * @throws APIException
     */
    public function list(
        array|ContractListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
