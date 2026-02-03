<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
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
interface OrdersContract
{
    /**
     * @api
     *
     * @param string $id Order identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Order;

    /**
     * @api
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
    ): Order;

    /**
     * @api
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
    ): array;

    /**
     * @api
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
    ): OrderAttachments;

    /**
     * @api
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
    ): string;

    /**
     * @api
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
    ): array;

    /**
     * @api
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
    ): array;

    /**
     * @api
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
    ): array;

    /**
     * @api
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
    ): array;
}
