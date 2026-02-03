<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\RelationsRawContract;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Relations\Relation;
use QbilPhpSDK\V1\Relations\RelationListAddressesParams;
use QbilPhpSDK\V1\Relations\RelationListParams;
use QbilPhpSDK\V1\Relations\RelationListSilosParams;
use QbilPhpSDK\V1\Silos\Silo;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class RelationsRawService implements RelationsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Relation resource.
     *
     * @param string $id Relation identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Relation>
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
            path: ['api/v1/relations/%1$s', $id],
            options: $requestOptions,
            convert: Relation::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Relation resources.
     *
     * @param array{
     *   itemsPerPage?: int, page?: int, shortCode?: string
     * }|RelationListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Relation>>
     *
     * @throws APIException
     */
    public function list(
        array|RelationListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = RelationListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/relations',
            query: $parsed,
            options: $options,
            convert: new ListOf(Relation::class),
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Address resources.
     *
     * @param string $id Relation identifier
     * @param array{itemsPerPage?: int, page?: int}|RelationListAddressesParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Address>>
     *
     * @throws APIException
     */
    public function listAddresses(
        string $id,
        array|RelationListAddressesParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = RelationListAddressesParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/relations/%1$s/addresses', $id],
            query: $parsed,
            options: $options,
            convert: new ListOf(Address::class),
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Silo resources.
     *
     * @param string $id The relation Id
     * @param array{itemsPerPage?: int, page?: int}|RelationListSilosParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Silo>>
     *
     * @throws APIException
     */
    public function listSilos(
        string $id,
        array|RelationListSilosParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = RelationListSilosParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/relations/%1$s/silos', $id],
            query: $parsed,
            options: $options,
            convert: new ListOf(Silo::class),
        );
    }
}
