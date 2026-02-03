<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Orders\Order;
use QbilPhpSDK\V1\Orders\OrderAttachments;
use QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams;
use QbilPhpSDK\V1\Orders\OrderDownloadDocumentParams;
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

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface OrdersRawContract
{
    /**
     * @api
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id Order identifier
     * @param array<string,mixed>|OrderUpdateParams $params
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|OrderListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Order>>
     *
     * @throws APIException
     */
    public function list(
        array|OrderListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id OrderAttachments identifier
     * @param array<string,mixed>|OrderCreateAttachmentParams $params
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $documentReference unique identifier of the order document
     * @param array<string,mixed>|OrderDownloadDocumentParams $params
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id BackToBackOrderLine identifier
     * @param array<string,mixed>|OrderListBackToBackParams $params
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id PurchaseOrderLine identifier
     * @param array<string,mixed>|OrderListPurchaseParams $params
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id SalesOrderLine identifier
     * @param array<string,mixed>|OrderListSalesParams $params
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
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id TransferOrderLine identifier
     * @param array<string,mixed>|OrderListTransferOrdersParams $params
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
    ): BaseResponse;
}
