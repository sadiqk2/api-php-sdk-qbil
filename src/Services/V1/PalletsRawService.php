<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\PalletsRawContract;
use QbilPhpSDK\V1\Pallets\Pallet;
use QbilPhpSDK\V1\Pallets\PalletListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class PalletsRawService implements PalletsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Pallet resource.
     *
     * @param string $id Pallet identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Pallet>
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
            path: ['api/v1/pallets/%1$s', $id],
            options: $requestOptions,
            convert: Pallet::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Pallet resources.
     *
     * @param array{
     *   code?: string, itemsPerPage?: int, page?: int
     * }|PalletListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Pallet>>
     *
     * @throws APIException
     */
    public function list(
        array|PalletListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = PalletListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/pallets',
            query: $parsed,
            options: $options,
            convert: new ListOf(Pallet::class),
        );
    }
}
