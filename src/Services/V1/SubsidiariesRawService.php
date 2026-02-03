<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\SubsidiariesRawContract;
use QbilPhpSDK\V1\Subsidiaries\Subsidiary;
use QbilPhpSDK\V1\Subsidiaries\SubsidiaryListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class SubsidiariesRawService implements SubsidiariesRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Get Subsidiary by identifier
     *
     * @param string $id Subsidiary identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Subsidiary>
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
            path: ['api/v1/subsidiaries/%1$s', $id],
            options: $requestOptions,
            convert: Subsidiary::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Subsidiary resources.
     *
     * @param array{itemsPerPage?: int, page?: int}|SubsidiaryListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Subsidiary>>
     *
     * @throws APIException
     */
    public function list(
        array|SubsidiaryListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = SubsidiaryListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/subsidiaries',
            query: $parsed,
            options: $options,
            convert: new ListOf(Subsidiary::class),
        );
    }
}
