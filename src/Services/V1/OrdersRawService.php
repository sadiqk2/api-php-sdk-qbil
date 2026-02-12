<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\OrdersRawContract;
use QbilPhpSDK\V1\Orders\Order;
use QbilPhpSDK\V1\Orders\OrderAttachments;
use QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams;
use QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams\Attachment;
use QbilPhpSDK\V1\Orders\OrderDownloadDocumentParams;
use QbilPhpSDK\V1\Orders\OrderDownloadDocumentParams\DocumentType;
use QbilPhpSDK\V1\Orders\OrderListBackToBackParams;
use QbilPhpSDK\V1\Orders\OrderListBackToBackResponseItem;
use QbilPhpSDK\V1\Orders\OrderListParams;
use QbilPhpSDK\V1\Orders\OrderListPurchaseParams;
use QbilPhpSDK\V1\Orders\OrderListPurchaseResponseItem;
use QbilPhpSDK\V1\Orders\OrderListSalesParams;
use QbilPhpSDK\V1\Orders\OrderListSalesResponseItem;
use QbilPhpSDK\V1\Orders\OrderListTransferOrdersParams;
use QbilPhpSDK\V1\Orders\OrderListTransferOrdersResponseItem;
use QbilPhpSDK\V1\Orders\OrderUpdateParams;
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
final class OrdersRawService implements OrdersRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Get an order matching the given id
     *
     * @param string $id Order identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Order>
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
            path: ['api/v1/orders/%1$s', $id],
            options: $requestOptions,
            convert: Order::class,
        );
    }

    /**
     * @api
     *
     * Partially update an Order. Only provided fields will be updated. In order to update an orderline please check the [documentation](/docs/orderline-update).
     *
     * @param string $id Order identifier
     * @param array{
     *   arrivalDate?: string|null,
     *   backToBackOrderLines?: list<BackToBackOrderLine|BackToBackOrderLineShape>,
     *   blDate?: string|null,
     *   blNumber?: string|null,
     *   departureDate?: string|null,
     *   destinationArrivalDateTime?: \DateTimeInterface|null,
     *   destinationDepartureDateTime?: \DateTimeInterface|null,
     *   intraCommunicator?: IntraCommunicator|value-of<IntraCommunicator>|null,
     *   licensePlate?: string|null,
     *   loadingDate?: string|null,
     *   loadingTime?: string,
     *   notes?: string|null,
     *   orderDeliveryMode?: OrderDeliveryMode|value-of<OrderDeliveryMode>|null,
     *   orderNumberingType?: string|null,
     *   originArrivalDateTime?: \DateTimeInterface|null,
     *   originDepartureDateTime?: \DateTimeInterface|null,
     *   purchaseOrderLines?: list<PurchaseOrderLine|PurchaseOrderLineShape>,
     *   salesOrderLines?: list<SalesOrderLine|SalesOrderLineShape>,
     *   transferOrderlines?: list<TransferOrderline|TransferOrderlineShape>,
     *   transport?: Transport|TransportShape|null,
     *   transporterBookingNo?: string|null,
     *   unloadingDate?: string|null,
     *   unloadingTime?: string,
     *   unloadingTimeSchedule?: string,
     * }|OrderUpdateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Order>
     *
     * @throws APIException
     */
    public function update(
        string $id,
        array|OrderUpdateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderUpdateParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'patch',
            path: ['api/v1/orders/%1$s', $id],
            headers: ['Content-Type' => 'application/merge-patch+json'],
            body: (object) $parsed,
            options: $options,
            convert: Order::class,
        );
    }

    /**
     * @api
     *
     * Get all the orders
     *
     * @param array{
     *   createdAtAfter?: string,
     *   createdAtBefore?: string,
     *   createdAtStrictlyAfter?: string,
     *   createdAtStrictlyBefore?: string,
     *   displayNumber?: string,
     *   itemsPerPage?: int,
     *   lastUpdatedAtAfter?: string,
     *   lastUpdatedAtBefore?: string,
     *   lastUpdatedAtStrictlyAfter?: string,
     *   lastUpdatedAtStrictlyBefore?: string,
     *   orderDateAfter?: string,
     *   orderDateBefore?: string,
     *   orderDateStrictlyAfter?: string,
     *   orderDateStrictlyBefore?: string,
     *   page?: int,
     *   subsidiary?: string,
     * }|OrderListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Order>>
     *
     * @throws APIException
     */
    public function list(
        array|OrderListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/orders',
            query: Util::array_transform_keys(
                $parsed,
                [
                    'createdAtAfter' => 'createdAt[after]',
                    'createdAtBefore' => 'createdAt[before]',
                    'createdAtStrictlyAfter' => 'createdAt[strictly_after]',
                    'createdAtStrictlyBefore' => 'createdAt[strictly_before]',
                    'lastUpdatedAtAfter' => 'lastUpdatedAt[after]',
                    'lastUpdatedAtBefore' => 'lastUpdatedAt[before]',
                    'lastUpdatedAtStrictlyAfter' => 'lastUpdatedAt[strictly_after]',
                    'lastUpdatedAtStrictlyBefore' => 'lastUpdatedAt[strictly_before]',
                    'orderDateAfter' => 'orderDate[after]',
                    'orderDateBefore' => 'orderDate[before]',
                    'orderDateStrictlyAfter' => 'orderDate[strictly_after]',
                    'orderDateStrictlyBefore' => 'orderDate[strictly_before]',
                ],
            ),
            options: $options,
            convert: new ListOf(Order::class),
        );
    }

    /**
     * @api
     *
     * Creates a OrderAttachments resource.
     *
     * @param string $id OrderAttachments identifier
     * @param array{
     *   attachments?: list<Attachment|AttachmentShape>
     * }|OrderCreateAttachmentParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<OrderAttachments>
     *
     * @throws APIException
     */
    public function createAttachment(
        string $id,
        array|OrderCreateAttachmentParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderCreateAttachmentParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'post',
            path: ['api/v1/orders/%1$s/attachments', $id],
            body: (object) $parsed,
            options: $options,
            convert: OrderAttachments::class,
        );
    }

    /**
     * @api
     *
     * Download internal and external order documents by their reference
     *
     * @param string $documentReference unique identifier of the order document
     * @param array{
     *   id: string, documentType: DocumentType|value-of<DocumentType>
     * }|OrderDownloadDocumentParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<string>
     *
     * @throws APIException
     */
    public function downloadDocument(
        string $documentReference,
        array|OrderDownloadDocumentParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderDownloadDocumentParams::parseRequest(
            $params,
            $requestOptions,
        );
        $id = $parsed['id'];
        unset($parsed['id']);
        $documentType = $parsed['documentType'];
        unset($parsed['documentType']);

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: [
                'api/v1/orders/%1$s/documents/%2$s/%3$s',
                $id,
                $documentType,
                $documentReference,
            ],
            headers: ['Accept' => 'application/octet-stream'],
            options: $options,
            convert: 'string',
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of BackToBackOrderLine resources.
     *
     * @param string $id BackToBackOrderLine identifier
     * @param array{itemsPerPage?: int, page?: int}|OrderListBackToBackParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<OrderListBackToBackResponseItem>>
     *
     * @throws APIException
     */
    public function listBackToBack(
        string $id,
        array|OrderListBackToBackParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderListBackToBackParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/orders/%1$s/back-to-back', $id],
            query: $parsed,
            options: $options,
            convert: new ListOf(OrderListBackToBackResponseItem::class),
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of PurchaseOrderLine resources.
     *
     * @param string $id PurchaseOrderLine identifier
     * @param array{itemsPerPage?: int, page?: int}|OrderListPurchaseParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<OrderListPurchaseResponseItem>>
     *
     * @throws APIException
     */
    public function listPurchase(
        string $id,
        array|OrderListPurchaseParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderListPurchaseParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/orders/%1$s/purchase', $id],
            query: $parsed,
            options: $options,
            convert: new ListOf(OrderListPurchaseResponseItem::class),
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of SalesOrderLine resources.
     *
     * @param string $id SalesOrderLine identifier
     * @param array{itemsPerPage?: int, page?: int}|OrderListSalesParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<OrderListSalesResponseItem>>
     *
     * @throws APIException
     */
    public function listSales(
        string $id,
        array|OrderListSalesParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderListSalesParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/orders/%1$s/sales', $id],
            query: $parsed,
            options: $options,
            convert: new ListOf(OrderListSalesResponseItem::class),
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of TransferOrderLine resources.
     *
     * @param string $id TransferOrderLine identifier
     * @param array{
     *   itemsPerPage?: int, page?: int
     * }|OrderListTransferOrdersParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<OrderListTransferOrdersResponseItem>>
     *
     * @throws APIException
     */
    public function listTransferOrders(
        string $id,
        array|OrderListTransferOrdersParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = OrderListTransferOrdersParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/orders/%1$s/transfer-orders', $id],
            query: $parsed,
            options: $options,
            convert: new ListOf(OrderListTransferOrdersResponseItem::class),
        );
    }
}
