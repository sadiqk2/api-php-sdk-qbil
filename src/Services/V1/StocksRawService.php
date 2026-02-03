<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\StocksRawContract;
use QbilPhpSDK\V1\Stocks\Stock;
use QbilPhpSDK\V1\Stocks\StockListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class StocksRawService implements StocksRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Stock resource.
     *
     * @param string $id Stock identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Stock>
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/stocks/%1$s', $id],
            options: $requestOptions,
            convert: Stock::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Stock resources.
     *
     * @param array{
     *   itemsPerPage?: int,
     *   ourReference?: list<string>,
     *   page?: int,
     *   remainingQuantity?: list<float>,
     *   remainingQuantityBetween?: string,
     *   remainingQuantityGt?: string,
     *   remainingQuantityGte?: string,
     *   remainingQuantityLt?: string,
     *   remainingQuantityLte?: string,
     * }|StockListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Stock>>
     *
     * @throws APIException
     */
    public function list(
        array|StockListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = StockListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/stocks',
            query: Util::array_transform_keys(
                $parsed,
                [
                    'remainingQuantityBetween' => 'remainingQuantity[between]',
                    'remainingQuantityGt' => 'remainingQuantity[gt]',
                    'remainingQuantityGte' => 'remainingQuantity[gte]',
                    'remainingQuantityLt' => 'remainingQuantity[lt]',
                    'remainingQuantityLte' => 'remainingQuantity[lte]',
                ],
            ),
            options: $options,
            convert: new ListOf(Stock::class),
        );
    }
}
