<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\PackagingRawContract;
use QbilPhpSDK\V1\Packaging\Packaging;
use QbilPhpSDK\V1\Packaging\PackagingListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class PackagingRawService implements PackagingRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Packaging resource.
     *
     * @param string $id Packaging identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Packaging>
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
            path: ['api/v1/packaging/%1$s', $id],
            options: $requestOptions,
            convert: Packaging::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Packaging resources.
     *
     * @param array{
     *   code?: list<string>, itemsPerPage?: int, page?: int
     * }|PackagingListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Packaging>>
     *
     * @throws APIException
     */
    public function list(
        array|PackagingListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = PackagingListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/packaging',
            query: $parsed,
            options: $options,
            convert: new ListOf(Packaging::class),
        );
    }
}
