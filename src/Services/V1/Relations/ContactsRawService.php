<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1\Relations;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\Relations\ContactsRawContract;
use QbilPhpSDK\V1\Relations\Contacts\Contact;
use QbilPhpSDK\V1\Relations\Contacts\ContactListParams;
use QbilPhpSDK\V1\Relations\Contacts\ContactRetrieveParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ContactsRawService implements ContactsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Contact resource.
     *
     * @param string $id Contact identifier
     * @param array{relationID: string}|ContactRetrieveParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Contact>
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        array|ContactRetrieveParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ContactRetrieveParams::parseRequest(
            $params,
            $requestOptions,
        );
        $relationID = $parsed['relationID'];
        unset($parsed['relationID']);

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/relations/%1$s/contacts/%2$s', $relationID, $id],
            options: $options,
            convert: Contact::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Contact resources.
     *
     * @param string $id Relation identifier
     * @param array{itemsPerPage?: int, page?: int}|ContactListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Contact>>
     *
     * @throws APIException
     */
    public function list(
        string $id,
        array|ContactListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ContactListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/relations/%1$s/contacts', $id],
            query: $parsed,
            options: $options,
            convert: new ListOf(Contact::class),
        );
    }
}
