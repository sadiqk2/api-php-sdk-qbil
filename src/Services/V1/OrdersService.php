<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\OrdersContract;
use QbilPhpSDK\Services\V1\Orders\ChangeRequestsService;
use QbilPhpSDK\V1\Orders\Order;
use QbilPhpSDK\V1\Orders\OrderAttachments;
use QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams\Attachment;
use QbilPhpSDK\V1\Orders\OrderDownloadDocumentParams\DocumentType;
use QbilPhpSDK\V1\Orders\OrderListBackToBackResponseItem;
use QbilPhpSDK\V1\Orders\OrderListPurchaseResponseItem;
use QbilPhpSDK\V1\Orders\OrderListSalesResponseItem;
use QbilPhpSDK\V1\Orders\OrderListTransferOrdersResponseItem;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\BackToBackOrderLine;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\IntraCommunicator;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\OrderDeliveryMode;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\PurchaseOrderLine;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\SalesOrderLine;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\TransferOrderline;
use QbilPhpSDK\V1\Orders\Transport;

/**
 * @phpstan-import-type BackToBackOrderLineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\BackToBackOrderLine
 * @phpstan-import-type PurchaseOrderLineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\PurchaseOrderLine
 * @phpstan-import-type SalesOrderLineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\SalesOrderLine
 * @phpstan-import-type TransferOrderlineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\TransferOrderline
 * @phpstan-import-type TransportShape from \QbilPhpSDK\V1\Orders\Transport
 * @phpstan-import-type AttachmentShape from \QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams\Attachment
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class OrdersService implements OrdersContract
{
    /**
     * @api
     */
    public OrdersRawService $raw;

    /**
     * @api
     */
    public ChangeRequestsService $changeRequests;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new OrdersRawService($client);
        $this->changeRequests = new ChangeRequestsService($client);
    }

    /**
     * @api
     *
     * Get an order matching the given id
     *
     * @param string $id Order identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Order {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Partially update an Order. Only provided fields will be updated. In order to update an orderline please check the [documentation](/docs/orderline-update).
     *
     * @param string $id Order identifier
     * @param list<BackToBackOrderLine|BackToBackOrderLineShape> $backToBackOrderLines
     * @param IntraCommunicator|value-of<IntraCommunicator>|null $intraCommunicator this indicates whether an order involves intra-EU (intra-community) trade and helps determine if the order should be treated as an intra-community transaction
     * @param OrderDeliveryMode|value-of<OrderDeliveryMode>|null $orderDeliveryMode
     * @param list<PurchaseOrderLine|PurchaseOrderLineShape> $purchaseOrderLines
     * @param list<SalesOrderLine|SalesOrderLineShape> $salesOrderLines
     * @param list<TransferOrderline|TransferOrderlineShape> $transferOrderlines
     * @param Transport|TransportShape|null $transport
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function update(
        string $id,
        ?string $arrivalDate = null,
        ?array $backToBackOrderLines = null,
        ?string $blDate = null,
        ?string $blNumber = null,
        ?string $departureDate = null,
        ?\DateTimeInterface $destinationArrivalDateTime = null,
        ?\DateTimeInterface $destinationDepartureDateTime = null,
        IntraCommunicator|string|null $intraCommunicator = null,
        ?string $licensePlate = null,
        ?string $loadingDate = null,
        ?string $loadingTime = null,
        ?string $notes = null,
        OrderDeliveryMode|string|null $orderDeliveryMode = null,
        ?string $orderNumberingType = null,
        ?\DateTimeInterface $originArrivalDateTime = null,
        ?\DateTimeInterface $originDepartureDateTime = null,
        ?array $purchaseOrderLines = null,
        ?array $salesOrderLines = null,
        ?array $transferOrderlines = null,
        Transport|array|null $transport = null,
        ?string $transporterBookingNo = null,
        ?string $unloadingDate = null,
        ?string $unloadingTime = null,
        ?string $unloadingTimeSchedule = null,
        RequestOptions|array|null $requestOptions = null,
    ): Order {
        $params = Util::removeNulls(
            [
                'arrivalDate' => $arrivalDate,
                'backToBackOrderLines' => $backToBackOrderLines,
                'blDate' => $blDate,
                'blNumber' => $blNumber,
                'departureDate' => $departureDate,
                'destinationArrivalDateTime' => $destinationArrivalDateTime,
                'destinationDepartureDateTime' => $destinationDepartureDateTime,
                'intraCommunicator' => $intraCommunicator,
                'licensePlate' => $licensePlate,
                'loadingDate' => $loadingDate,
                'loadingTime' => $loadingTime,
                'notes' => $notes,
                'orderDeliveryMode' => $orderDeliveryMode,
                'orderNumberingType' => $orderNumberingType,
                'originArrivalDateTime' => $originArrivalDateTime,
                'originDepartureDateTime' => $originDepartureDateTime,
                'purchaseOrderLines' => $purchaseOrderLines,
                'salesOrderLines' => $salesOrderLines,
                'transferOrderlines' => $transferOrderlines,
                'transport' => $transport,
                'transporterBookingNo' => $transporterBookingNo,
                'unloadingDate' => $unloadingDate,
                'unloadingTime' => $unloadingTime,
                'unloadingTimeSchedule' => $unloadingTimeSchedule,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->update($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Get all the orders
     *
     * @param list<string> $displayNumber
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param list<string> $subsidiary
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Order>
     *
     * @throws APIException
     */
    public function list(
        ?string $createdAtAfter = null,
        ?string $createdAtBefore = null,
        ?string $createdAtStrictlyAfter = null,
        ?string $createdAtStrictlyBefore = null,
        ?array $displayNumber = null,
        int $itemsPerPage = 40,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        ?string $orderDateAfter = null,
        ?string $orderDateBefore = null,
        ?string $orderDateStrictlyAfter = null,
        ?string $orderDateStrictlyBefore = null,
        int $page = 1,
        ?array $subsidiary = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'createdAtAfter' => $createdAtAfter,
                'createdAtBefore' => $createdAtBefore,
                'createdAtStrictlyAfter' => $createdAtStrictlyAfter,
                'createdAtStrictlyBefore' => $createdAtStrictlyBefore,
                'displayNumber' => $displayNumber,
                'itemsPerPage' => $itemsPerPage,
                'lastUpdatedAtAfter' => $lastUpdatedAtAfter,
                'lastUpdatedAtBefore' => $lastUpdatedAtBefore,
                'lastUpdatedAtStrictlyAfter' => $lastUpdatedAtStrictlyAfter,
                'lastUpdatedAtStrictlyBefore' => $lastUpdatedAtStrictlyBefore,
                'orderDateAfter' => $orderDateAfter,
                'orderDateBefore' => $orderDateBefore,
                'orderDateStrictlyAfter' => $orderDateStrictlyAfter,
                'orderDateStrictlyBefore' => $orderDateStrictlyBefore,
                'page' => $page,
                'subsidiary' => $subsidiary,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Creates a OrderAttachments resource.
     *
     * @param string $id OrderAttachments identifier
     * @param list<Attachment|AttachmentShape> $attachments
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function createAttachment(
        string $id,
        ?array $attachments = null,
        RequestOptions|array|null $requestOptions = null,
    ): OrderAttachments {
        $params = Util::removeNulls(['attachments' => $attachments]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->createAttachment($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Download internal and external order documents by their reference
     *
     * @param string $documentReference unique identifier of the order document
     * @param string $id Download Order Document identifier
     * @param DocumentType|value-of<DocumentType> $documentType Type of document to download. Expected values: "internal" for generated documents, "external" for stored attachments.
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function downloadDocument(
        string $documentReference,
        string $id,
        DocumentType|string $documentType,
        RequestOptions|array|null $requestOptions = null,
    ): string {
        $params = Util::removeNulls(['id' => $id, 'documentType' => $documentType]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->downloadDocument($documentReference, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of BackToBackOrderLine resources.
     *
     * @param string $id BackToBackOrderLine identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<OrderListBackToBackResponseItem>
     *
     * @throws APIException
     */
    public function listBackToBack(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listBackToBack($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of PurchaseOrderLine resources.
     *
     * @param string $id PurchaseOrderLine identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<OrderListPurchaseResponseItem>
     *
     * @throws APIException
     */
    public function listPurchase(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listPurchase($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of SalesOrderLine resources.
     *
     * @param string $id SalesOrderLine identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<OrderListSalesResponseItem>
     *
     * @throws APIException
     */
    public function listSales(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listSales($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of TransferOrderLine resources.
     *
     * @param string $id TransferOrderLine identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<OrderListTransferOrdersResponseItem>
     *
     * @throws APIException
     */
    public function listTransferOrders(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listTransferOrders($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
