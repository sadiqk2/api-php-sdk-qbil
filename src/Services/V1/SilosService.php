<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\SilosContract;
use QbilPhpSDK\V1\Silos\Silo;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class SilosService implements SilosContract
{
    /**
     * @api
     */
    public SilosRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new SilosRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a Silo resource.
     *
     * @param string $id Silo identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Silo {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Silo resources.
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param string $siloName search by silo name
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Silo>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        int $page = 1,
        ?string $siloName = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'itemsPerPage' => $itemsPerPage,
                'page' => $page,
                'siloName' => $siloName,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
