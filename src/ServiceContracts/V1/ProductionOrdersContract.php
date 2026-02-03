<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\ProductionOrders\ProductionIngredient;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrder;
use QbilPhpSDK\V1\ProductionOrders\ProductionResult;

/**
 * @phpstan-import-type ProductionIngredientShape from \QbilPhpSDK\V1\ProductionOrders\ProductionIngredient
 * @phpstan-import-type ProductionResultShape from \QbilPhpSDK\V1\ProductionOrders\ProductionResult
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ProductionOrdersContract
{
    /**
     * @api
     *
     * @param list<ProductionIngredient|ProductionIngredientShape> $ingredients
     * @param float $intendedCustomerID Intended Customer Relation resource id
     * @param list<ProductionResult|ProductionResultShape> $productionResults
     * @param string $subsidiaryID Subsidiary resource's id
     * @param string $unitCode Quantity unit
     * @param float $warehouseID Address resource's id
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function create(
        ?array $ingredients = null,
        ?float $intendedCustomerID = null,
        ?string $productionDate = null,
        ?array $productionResults = null,
        ?string $remarks = null,
        ?string $subsidiaryID = null,
        ?string $treatment = null,
        ?string $unitCode = null,
        ?float $warehouseID = null,
        RequestOptions|array|null $requestOptions = null,
    ): ProductionOrder;

    /**
     * @api
     *
     * @param string $id Production order identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): ProductionOrder;

    /**
     * @api
     *
     * @param string $id Production order identifier
     * @param list<ProductionIngredient|ProductionIngredientShape> $ingredients
     * @param float $intendedCustomerID Intended Customer Relation resource id
     * @param list<ProductionResult|ProductionResultShape> $productionResults
     * @param string $subsidiaryID Subsidiary resource's id
     * @param string $unitCode Quantity unit
     * @param float $warehouseID Address resource's id
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function update(
        string $id,
        ?array $ingredients = null,
        ?float $intendedCustomerID = null,
        ?string $productionDate = null,
        ?array $productionResults = null,
        ?string $remarks = null,
        ?string $subsidiaryID = null,
        ?string $treatment = null,
        ?string $unitCode = null,
        ?float $warehouseID = null,
        RequestOptions|array|null $requestOptions = null,
    ): ProductionOrder;

    /**
     * @api
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<ProductionOrder>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
