<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\SilosRawContract;
use QbilPhpSDK\V1\Silos\Silo;
use QbilPhpSDK\V1\Silos\SiloListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class SilosRawService implements SilosRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Silo resource.
     *
     * @param string $id Silo identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Silo>
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
            path: ['api/v1/silos/%1$s', $id],
            options: $requestOptions,
            convert: Silo::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Silo resources.
     *
     * @param array{
     *   itemsPerPage?: int, page?: int, siloName?: string
     * }|SiloListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Silo>>
     *
     * @throws APIException
     */
    public function list(
        array|SiloListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = SiloListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/silos',
            query: $parsed,
            options: $options,
            convert: new ListOf(Silo::class),
        );
    }
}
