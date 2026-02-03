<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\AddressesContract;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Addresses\AddressListParams\Relation;

/**
 * @phpstan-import-type RelationShape from \QbilPhpSDK\V1\Addresses\AddressListParams\Relation
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class AddressesService implements AddressesContract
{
    /**
     * @api
     */
    public AddressesRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new AddressesRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a Address resource.
     *
     * @param string $id Address identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Address {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Address resources.
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param Relation|RelationShape $relation
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Address>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        int $page = 1,
        Relation|array|null $relation = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'itemsPerPage' => $itemsPerPage,
                'page' => $page,
                'relation' => $relation,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
