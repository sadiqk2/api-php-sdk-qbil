<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\PackagingContract;
use QbilPhpSDK\V1\Packaging\Packaging;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class PackagingService implements PackagingContract
{
    /**
     * @api
     */
    public PackagingRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new PackagingRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a Packaging resource.
     *
     * @param string $id Packaging identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Packaging {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Packaging resources.
     *
     * @param list<string> $code
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Packaging>
     *
     * @throws APIException
     */
    public function list(
        ?array $code = null,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['code' => $code, 'itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
