<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\SalesInvoicesRawContract;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoice;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoiceListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class SalesInvoicesRawService implements SalesInvoicesRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a SalesInvoice resource.
     *
     * @param string $id SalesInvoice identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SalesInvoice>
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
            path: ['api/v1/sales-invoices/%1$s', $id],
            options: $requestOptions,
            convert: SalesInvoice::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of SalesInvoice resources.
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
     *   type?: string,
     * }|SalesInvoiceListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<SalesInvoice>>
     *
     * @throws APIException
     */
    public function list(
        array|SalesInvoiceListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = SalesInvoiceListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/sales-invoices',
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
            convert: new ListOf(SalesInvoice::class),
        );
    }
}
