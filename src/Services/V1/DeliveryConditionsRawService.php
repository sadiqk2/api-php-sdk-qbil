<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\DeliveryConditionsRawContract;
use QbilPhpSDK\V1\DeliveryConditions\DeliveryCondition;
use QbilPhpSDK\V1\DeliveryConditions\DeliveryConditionListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class DeliveryConditionsRawService implements DeliveryConditionsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a DeliveryCondition resource.
     *
     * @param string $code DeliveryCondition identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<DeliveryCondition>
     *
     * @throws APIException
     */
    public function retrieve(
        string $code,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['api/v1/delivery-conditions/%1$s', $code],
            options: $requestOptions,
            convert: DeliveryCondition::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of DeliveryCondition resources.
     *
     * @param array{itemsPerPage?: int, page?: int}|DeliveryConditionListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<DeliveryCondition>>
     *
     * @throws APIException
     */
    public function list(
        array|DeliveryConditionListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = DeliveryConditionListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/delivery-conditions',
            query: $parsed,
            options: $options,
            convert: new ListOf(DeliveryCondition::class),
        );
    }
}
