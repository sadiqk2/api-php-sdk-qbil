<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\PurchaseInvoicesRawContract;
use QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoice;
use QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoiceListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class PurchaseInvoicesRawService implements PurchaseInvoicesRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a PurchaseInvoice resource.
     *
     * @param string $id PurchaseInvoice identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<PurchaseInvoice>
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
            path: ['api/v1/purchase-invoices/%1$s', $id],
            options: $requestOptions,
            convert: PurchaseInvoice::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of PurchaseInvoice resources.
     *
     * @param array{
     *   createdAtAfter?: string,
     *   createdAtBefore?: string,
     *   createdAtStrictlyAfter?: string,
     *   createdAtStrictlyBefore?: string,
     *   invoiceDateAfter?: string,
     *   invoiceDateBefore?: string,
     *   invoiceDateStrictlyAfter?: string,
     *   invoiceDateStrictlyBefore?: string,
     *   itemsPerPage?: int,
     *   lastUpdatedAtAfter?: string,
     *   lastUpdatedAtBefore?: string,
     *   lastUpdatedAtStrictlyAfter?: string,
     *   lastUpdatedAtStrictlyBefore?: string,
     *   page?: int,
     * }|PurchaseInvoiceListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<PurchaseInvoice>>
     *
     * @throws APIException
     */
    public function list(
        array|PurchaseInvoiceListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = PurchaseInvoiceListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/purchase-invoices',
            query: Util::array_transform_keys(
                $parsed,
                [
                    'createdAtAfter' => 'createdAt[after]',
                    'createdAtBefore' => 'createdAt[before]',
                    'createdAtStrictlyAfter' => 'createdAt[strictly_after]',
                    'createdAtStrictlyBefore' => 'createdAt[strictly_before]',
                    'invoiceDateAfter' => 'invoiceDate[after]',
                    'invoiceDateBefore' => 'invoiceDate[before]',
                    'invoiceDateStrictlyAfter' => 'invoiceDate[strictly_after]',
                    'invoiceDateStrictlyBefore' => 'invoiceDate[strictly_before]',
                    'lastUpdatedAtAfter' => 'lastUpdatedAt[after]',
                    'lastUpdatedAtBefore' => 'lastUpdatedAt[before]',
                    'lastUpdatedAtStrictlyAfter' => 'lastUpdatedAt[strictly_after]',
                    'lastUpdatedAtStrictlyBefore' => 'lastUpdatedAt[strictly_before]',
                ],
            ),
            options: $options,
            convert: new ListOf(PurchaseInvoice::class),
        );
    }
}
