<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\ProductionOrdersRawContract;
use QbilPhpSDK\V1\ProductionOrders\ProductionIngredient;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrder;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrderCreateParams;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrderListParams;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrderUpdateParams;
use QbilPhpSDK\V1\ProductionOrders\ProductionResult;

/**
 * @phpstan-import-type ProductionIngredientShape from \QbilPhpSDK\V1\ProductionOrders\ProductionIngredient
 * @phpstan-import-type ProductionResultShape from \QbilPhpSDK\V1\ProductionOrders\ProductionResult
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ProductionOrdersRawService implements ProductionOrdersRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Creates a Production order resource.
     *
     * @param array{
     *   ingredients?: list<ProductionIngredient|ProductionIngredientShape>,
     *   intendedCustomerID?: float,
     *   productionDate?: string,
     *   productionResults?: list<ProductionResult|ProductionResultShape>,
     *   remarks?: string|null,
     *   subsidiaryID?: string,
     *   treatment?: string|null,
     *   unitCode?: string,
     *   warehouseID?: float,
     * }|ProductionOrderCreateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ProductionOrder>
     *
     * @throws APIException
     */
    public function create(
        array|ProductionOrderCreateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ProductionOrderCreateParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'post',
            path: 'api/v1/production-orders',
            body: (object) $parsed,
            options: $options,
            convert: ProductionOrder::class,
        );
    }

    /**
     * @api
     *
     * Retrieves a Production order resource.
     *
     * @param string $id Production order identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ProductionOrder>
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
            path: ['api/v1/production-orders/%1$s', $id],
            options: $requestOptions,
            convert: ProductionOrder::class,
        );
    }

    /**
     * @api
     *
     * Partially update a Production Order. Only provided fields will be updated.
     *
     * @param string $id Production order identifier
     * @param array{
     *   ingredients?: list<ProductionIngredient|ProductionIngredientShape>,
     *   intendedCustomerID?: float,
     *   productionDate?: string,
     *   productionResults?: list<ProductionResult|ProductionResultShape>,
     *   remarks?: string|null,
     *   subsidiaryID?: string,
     *   treatment?: string|null,
     *   unitCode?: string,
     *   warehouseID?: float,
     * }|ProductionOrderUpdateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ProductionOrder>
     *
     * @throws APIException
     */
    public function update(
        string $id,
        array|ProductionOrderUpdateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ProductionOrderUpdateParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'patch',
            path: ['api/v1/production-orders/%1$s', $id],
            headers: ['Content-Type' => 'application/merge-patch+json'],
            body: (object) $parsed,
            options: $options,
            convert: ProductionOrder::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Production order resources.
     *
     * @param array{itemsPerPage?: int, page?: int}|ProductionOrderListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<ProductionOrder>>
     *
     * @throws APIException
     */
    public function list(
        array|ProductionOrderListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ProductionOrderListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/production-orders',
            query: $parsed,
            options: $options,
            convert: new ListOf(ProductionOrder::class),
        );
    }
}
