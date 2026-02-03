<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\AddressesRawContract;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Addresses\AddressListParams;
use QbilPhpSDK\V1\Addresses\AddressListParams\Relation;

/**
 * @phpstan-import-type RelationShape from \QbilPhpSDK\V1\Addresses\AddressListParams\Relation
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class AddressesRawService implements AddressesRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Address resource.
     *
     * @param string $id Address identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Address>
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
            path: ['api/v1/addresses/%1$s', $id],
            options: $requestOptions,
            convert: Address::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Address resources.
     *
     * @param array{
     *   itemsPerPage?: int, page?: int, relation?: Relation|RelationShape
     * }|AddressListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Address>>
     *
     * @throws APIException
     */
    public function list(
        array|AddressListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = AddressListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/addresses',
            query: $parsed,
            options: $options,
            convert: new ListOf(Address::class),
        );
    }
}
