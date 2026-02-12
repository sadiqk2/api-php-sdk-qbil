<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\TradeConditionsRawContract;
use QbilPhpSDK\V1\TradeConditions\TradeCondition;
use QbilPhpSDK\V1\TradeConditions\TradeConditionListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class TradeConditionsRawService implements TradeConditionsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a TradeCondition resource.
     *
     * @param string $id TradeCondition identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<TradeCondition>
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
            path: ['api/v1/trade-conditions/%1$s', $id],
            options: $requestOptions,
            convert: TradeCondition::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of TradeCondition resources.
     *
     * @param array{
     *   id?: string, itemsPerPage?: int, page?: int
     * }|TradeConditionListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<TradeCondition>>
     *
     * @throws APIException
     */
    public function list(
        array|TradeConditionListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = TradeConditionListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/trade-conditions',
            query: $parsed,
            options: $options,
            convert: new ListOf(TradeCondition::class),
        );
    }
}
