<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1Contract;
use QbilPhpSDK\Services\V1\AddressesService;
use QbilPhpSDK\Services\V1\ContainerOrdersService;
use QbilPhpSDK\Services\V1\ContractsService;
use QbilPhpSDK\Services\V1\DeliveryConditionsService;
use QbilPhpSDK\Services\V1\MeService;
use QbilPhpSDK\Services\V1\OrdersService;
use QbilPhpSDK\Services\V1\PackagingService;
use QbilPhpSDK\Services\V1\PalletsService;
use QbilPhpSDK\Services\V1\PaymentConditionsService;
use QbilPhpSDK\Services\V1\ProductionOrdersService;
use QbilPhpSDK\Services\V1\ProductsService;
use QbilPhpSDK\Services\V1\PurchaseInvoicesService;
use QbilPhpSDK\Services\V1\RelationsService;
use QbilPhpSDK\Services\V1\SalesInvoicesService;
use QbilPhpSDK\Services\V1\SilosService;
use QbilPhpSDK\Services\V1\StocksService;
use QbilPhpSDK\Services\V1\SubsidiariesService;
use QbilPhpSDK\Services\V1\TradeConditionsService;
use QbilPhpSDK\V1\V1ListCustomFieldsParams\Location;
use QbilPhpSDK\V1\V1ListCustomFieldsResponseItem;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class V1Service implements V1Contract
{
    /**
     * @api
     */
    public V1RawService $raw;

    /**
     * @api
     */
    public MeService $me;

    /**
     * @api
     */
    public AddressesService $addresses;

    /**
     * @api
     */
    public ContractsService $contracts;

    /**
     * @api
     */
    public DeliveryConditionsService $deliveryConditions;

    /**
     * @api
     */
    public ContainerOrdersService $containerOrders;

    /**
     * @api
     */
    public OrdersService $orders;

    /**
     * @api
     */
    public PackagingService $packaging;

    /**
     * @api
     */
    public PalletsService $pallets;

    /**
     * @api
     */
    public PaymentConditionsService $paymentConditions;

    /**
     * @api
     */
    public ProductsService $products;

    /**
     * @api
     */
    public ProductionOrdersService $productionOrders;

    /**
     * @api
     */
    public PurchaseInvoicesService $purchaseInvoices;

    /**
     * @api
     */
    public RelationsService $relations;

    /**
     * @api
     */
    public SalesInvoicesService $salesInvoices;

    /**
     * @api
     */
    public SilosService $silos;

    /**
     * @api
     */
    public StocksService $stocks;

    /**
     * @api
     */
    public SubsidiariesService $subsidiaries;

    /**
     * @api
     */
    public TradeConditionsService $tradeConditions;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new V1RawService($client);
        $this->me = new MeService($client);
        $this->addresses = new AddressesService($client);
        $this->contracts = new ContractsService($client);
        $this->deliveryConditions = new DeliveryConditionsService($client);
        $this->containerOrders = new ContainerOrdersService($client);
        $this->orders = new OrdersService($client);
        $this->packaging = new PackagingService($client);
        $this->pallets = new PalletsService($client);
        $this->paymentConditions = new PaymentConditionsService($client);
        $this->products = new ProductsService($client);
        $this->productionOrders = new ProductionOrdersService($client);
        $this->purchaseInvoices = new PurchaseInvoicesService($client);
        $this->relations = new RelationsService($client);
        $this->salesInvoices = new SalesInvoicesService($client);
        $this->silos = new SilosService($client);
        $this->stocks = new StocksService($client);
        $this->subsidiaries = new SubsidiariesService($client);
        $this->tradeConditions = new TradeConditionsService($client);
    }

    /**
     * @api
     *
     * Discover available custom fields and their keys. Use the `name` property as the key when setting custom field values in write APIs (e.g., PATCH /container-orders). Filter by `location` to find fields applicable to specific modules (e.g., order, contract, product).
     *
     * @param int $itemsPerPage The number of items per page
     * @param Location|value-of<Location> $location Filter by location(e.g. `custom-fields?location=contract` will return all custom fields placed in contract and contract-lines)
     * @param list<string> $name
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<V1ListCustomFieldsResponseItem>
     *
     * @throws APIException
     */
    public function listCustomFields(
        int $itemsPerPage = 40,
        Location|string|null $location = null,
        ?array $name = null,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'itemsPerPage' => $itemsPerPage,
                'location' => $location,
                'name' => $name,
                'page' => $page,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listCustomFields(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
