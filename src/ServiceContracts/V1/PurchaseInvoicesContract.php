<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoice;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface PurchaseInvoicesContract
{
    /**
     * @api
     *
     * @param string $id PurchaseInvoice identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): PurchaseInvoice;

    /**
     * @api
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<PurchaseInvoice>
     *
     * @throws APIException
     */
    public function list(
        ?string $createdAtAfter = null,
        ?string $createdAtBefore = null,
        ?string $createdAtStrictlyAfter = null,
        ?string $createdAtStrictlyBefore = null,
        ?string $invoiceDateAfter = null,
        ?string $invoiceDateBefore = null,
        ?string $invoiceDateStrictlyAfter = null,
        ?string $invoiceDateStrictlyBefore = null,
        int $itemsPerPage = 40,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
