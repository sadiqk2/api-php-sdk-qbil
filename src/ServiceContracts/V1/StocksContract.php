<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Stocks\Stock;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface StocksContract
{
    /**
     * @api
     *
     * @param string $id Stock identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Stock;

    /**
     * @api
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Stock>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        ?string $ourReference = null,
        int $page = 1,
        ?float $remainingQuantity = null,
        ?string $remainingQuantityBetween = null,
        ?string $remainingQuantityGt = null,
        ?string $remainingQuantityGte = null,
        ?string $remainingQuantityLt = null,
        ?string $remainingQuantityLte = null,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
