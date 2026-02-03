<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\ProductionOrdersContract;
use QbilPhpSDK\V1\ProductionOrders\ProductionIngredient;
use QbilPhpSDK\V1\ProductionOrders\ProductionOrder;
use QbilPhpSDK\V1\ProductionOrders\ProductionResult;

/**
 * @phpstan-import-type ProductionIngredientShape from \QbilPhpSDK\V1\ProductionOrders\ProductionIngredient
 * @phpstan-import-type ProductionResultShape from \QbilPhpSDK\V1\ProductionOrders\ProductionResult
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ProductionOrdersService implements ProductionOrdersContract
{
    /**
     * @api
     */
    public ProductionOrdersRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new ProductionOrdersRawService($client);
    }

    /**
     * @api
     *
     * Creates a Production order resource.
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
    ): ProductionOrder {
        $params = Util::removeNulls(
            [
                'ingredients' => $ingredients,
                'intendedCustomerID' => $intendedCustomerID,
                'productionDate' => $productionDate,
                'productionResults' => $productionResults,
                'remarks' => $remarks,
                'subsidiaryID' => $subsidiaryID,
                'treatment' => $treatment,
                'unitCode' => $unitCode,
                'warehouseID' => $warehouseID,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->create(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves a Production order resource.
     *
     * @param string $id Production order identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): ProductionOrder {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Partially update a Production Order. Only provided fields will be updated.
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
    ): ProductionOrder {
        $params = Util::removeNulls(
            [
                'ingredients' => $ingredients,
                'intendedCustomerID' => $intendedCustomerID,
                'productionDate' => $productionDate,
                'productionResults' => $productionResults,
                'remarks' => $remarks,
                'subsidiaryID' => $subsidiaryID,
                'treatment' => $treatment,
                'unitCode' => $unitCode,
                'warehouseID' => $warehouseID,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->update($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Production order resources.
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
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
