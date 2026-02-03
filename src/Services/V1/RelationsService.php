<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\RelationsContract;
use QbilPhpSDK\Services\V1\Relations\ContactsService;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Relations\Relation;
use QbilPhpSDK\V1\Silos\Silo;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class RelationsService implements RelationsContract
{
    /**
     * @api
     */
    public RelationsRawService $raw;

    /**
     * @api
     */
    public ContactsService $contacts;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new RelationsRawService($client);
        $this->contacts = new ContactsService($client);
    }

    /**
     * @api
     *
     * Retrieves a Relation resource.
     *
     * @param string $id Relation identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Relation {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Relation resources.
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Relation>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        int $page = 1,
        ?string $shortCode = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'itemsPerPage' => $itemsPerPage,
                'page' => $page,
                'shortCode' => $shortCode,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Address resources.
     *
     * @param string $id Relation identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Address>
     *
     * @throws APIException
     */
    public function listAddresses(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listAddresses($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Silo resources.
     *
     * @param string $id The relation Id
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Silo>
     *
     * @throws APIException
     */
    public function listSilos(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->listSilos($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
