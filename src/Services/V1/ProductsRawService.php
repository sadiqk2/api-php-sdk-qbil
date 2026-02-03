<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\ProductsRawContract;
use QbilPhpSDK\V1\Products\Product;
use QbilPhpSDK\V1\Products\ProductListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ProductsRawService implements ProductsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Get product by Id
     *
     * @param string $id Product identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Product>
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
            path: ['api/v1/products/%1$s', $id],
            options: $requestOptions,
            convert: Product::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Product resources.
     *
     * @param array{
     *   code?: string, itemsPerPage?: int, page?: int
     * }|ProductListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Product>>
     *
     * @throws APIException
     */
    public function list(
        array|ProductListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ProductListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/products',
            query: $parsed,
            options: $options,
            convert: new ListOf(Product::class),
        );
    }
}
