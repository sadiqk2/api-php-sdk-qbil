<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\V1ListCustomFieldsParams;
use QbilPhpSDK\V1\V1ListCustomFieldsResponseItem;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface V1RawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|V1ListCustomFieldsParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<V1ListCustomFieldsResponseItem>>
     *
     * @throws APIException
     */
    public function listCustomFields(
        array|V1ListCustomFieldsParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
