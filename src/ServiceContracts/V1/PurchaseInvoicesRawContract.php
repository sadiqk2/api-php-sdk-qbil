<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoice;
use QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoiceListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface PurchaseInvoicesRawContract
{
    /**
     * @api
     *
     * @param string $id PurchaseInvoice identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<PurchaseInvoice>
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
     * @param array<string,mixed>|PurchaseInvoiceListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<PurchaseInvoice>>
     *
     * @throws APIException
     */
    public function list(
        array|PurchaseInvoiceListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
