<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\MeRawContract;
use QbilPhpSDK\V1\Me\Me;
use QbilPhpSDK\V1\Me\MeUpdateParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class MeRawService implements MeRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Me resource.
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Me>
     *
     * @throws APIException
     */
    public function retrieve(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/me',
            options: $requestOptions,
            convert: Me::class,
        );
    }

    /**
     * @api
     *
     * Updates the Me resource.
     *
     * @param array{email?: string, webhookURL?: string|null}|MeUpdateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Me>
     *
     * @throws APIException
     */
    public function update(
        array|MeUpdateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = MeUpdateParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'patch',
            path: 'api/v1/me',
            body: (object) $parsed,
            options: $options,
            convert: Me::class,
        );
    }
}
