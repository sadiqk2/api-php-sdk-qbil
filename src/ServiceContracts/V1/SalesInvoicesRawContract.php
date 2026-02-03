<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoice;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoiceListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface SalesInvoicesRawContract
{
    /**
     * @api
     *
     * @param string $id SalesInvoice identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SalesInvoice>
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
     * @param array<string,mixed>|SalesInvoiceListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<SalesInvoice>>
     *
     * @throws APIException
     */
    public function list(
        array|SalesInvoiceListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
