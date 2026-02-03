<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\SalesInvoicesContract;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoice;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class SalesInvoicesService implements SalesInvoicesContract
{
    /**
     * @api
     */
    public SalesInvoicesRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new SalesInvoicesRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a SalesInvoice resource.
     *
     * @param string $id SalesInvoice identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): SalesInvoice {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of SalesInvoice resources.
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param list<string> $type
     * @param RequestOpts|null $requestOptions
     *
     * @return list<SalesInvoice>
     *
     * @throws APIException
     */
    public function list(
        ?string $createdAtAfter = null,
        ?string $createdAtBefore = null,
        ?string $createdAtStrictlyAfter = null,
        ?string $createdAtStrictlyBefore = null,
        ?string $invoiceDateAfter = null,
        ?string $invoiceDateBefore = null,
        ?string $invoiceDateStrictlyAfter = null,
        ?string $invoiceDateStrictlyBefore = null,
        int $itemsPerPage = 40,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        int $page = 1,
        ?array $type = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'createdAtAfter' => $createdAtAfter,
                'createdAtBefore' => $createdAtBefore,
                'createdAtStrictlyAfter' => $createdAtStrictlyAfter,
                'createdAtStrictlyBefore' => $createdAtStrictlyBefore,
                'invoiceDateAfter' => $invoiceDateAfter,
                'invoiceDateBefore' => $invoiceDateBefore,
                'invoiceDateStrictlyAfter' => $invoiceDateStrictlyAfter,
                'invoiceDateStrictlyBefore' => $invoiceDateStrictlyBefore,
                'itemsPerPage' => $itemsPerPage,
                'lastUpdatedAtAfter' => $lastUpdatedAtAfter,
                'lastUpdatedAtBefore' => $lastUpdatedAtBefore,
                'lastUpdatedAtStrictlyAfter' => $lastUpdatedAtStrictlyAfter,
                'lastUpdatedAtStrictlyBefore' => $lastUpdatedAtStrictlyBefore,
                'page' => $page,
                'type' => $type,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
