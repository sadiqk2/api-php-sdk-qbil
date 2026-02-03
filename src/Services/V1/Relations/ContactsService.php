<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1\Relations;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\Relations\ContactsContract;
use QbilPhpSDK\V1\Relations\Contacts\Contact;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ContactsService implements ContactsContract
{
    /**
     * @api
     */
    public ContactsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new ContactsRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a Contact resource.
     *
     * @param string $id Contact identifier
     * @param string $relationID Relation identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        string $relationID,
        RequestOptions|array|null $requestOptions = null,
    ): Contact {
        $params = Util::removeNulls(['relationID' => $relationID]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Contact resources.
     *
     * @param string $id Relation identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Contact>
     *
     * @throws APIException
     */
    public function list(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            ['itemsPerPage' => $itemsPerPage, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list($id, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
