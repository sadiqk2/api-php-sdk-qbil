<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\StocksContract;
use QbilPhpSDK\V1\Stocks\Stock;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class StocksService implements StocksContract
{
    /**
     * @api
     */
    public StocksRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new StocksRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a Stock resource.
     *
     * @param string $id Stock identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Stock {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Stock resources.
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
    ): array {
        $params = Util::removeNulls(
            [
                'itemsPerPage' => $itemsPerPage,
                'ourReference' => $ourReference,
                'page' => $page,
                'remainingQuantity' => $remainingQuantity,
                'remainingQuantityBetween' => $remainingQuantityBetween,
                'remainingQuantityGt' => $remainingQuantityGt,
                'remainingQuantityGte' => $remainingQuantityGte,
                'remainingQuantityLt' => $remainingQuantityLt,
                'remainingQuantityLte' => $remainingQuantityLte,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
