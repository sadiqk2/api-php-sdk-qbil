<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1RawContract;
use QbilPhpSDK\V1\V1ListCustomFieldsParams;
use QbilPhpSDK\V1\V1ListCustomFieldsParams\Location;
use QbilPhpSDK\V1\V1ListCustomFieldsResponseItem;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class V1RawService implements V1RawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Discover available custom fields and their keys. Use the `name` property as the key when setting custom field values in write APIs (e.g., PATCH /container-orders). Filter by `location` to find fields applicable to specific modules (e.g., order, contract, product).
     *
     * @param array{
     *   itemsPerPage?: int,
     *   location?: value-of<Location>,
     *   name?: list<string>,
     *   page?: int,
     * }|V1ListCustomFieldsParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<V1ListCustomFieldsResponseItem>>
     *
     * @throws APIException
     */
    public function listCustomFields(
        array|V1ListCustomFieldsParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = V1ListCustomFieldsParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/custom-fields',
            query: $parsed,
            options: $options,
            convert: new ListOf(V1ListCustomFieldsResponseItem::class),
        );
    }
}
