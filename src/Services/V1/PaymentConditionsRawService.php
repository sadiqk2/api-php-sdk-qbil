<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\PaymentConditionsRawContract;
use QbilPhpSDK\V1\PaymentConditions\PaymentCondition;
use QbilPhpSDK\V1\PaymentConditions\PaymentConditionListParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class PaymentConditionsRawService implements PaymentConditionsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a PaymentCondition resource.
     *
     * @param string $id PaymentCondition identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<PaymentCondition>
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
            path: ['api/v1/payment-conditions/%1$s', $id],
            options: $requestOptions,
            convert: PaymentCondition::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of PaymentCondition resources.
     *
     * @param array{
     *   id?: string, itemsPerPage?: int, page?: int
     * }|PaymentConditionListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<PaymentCondition>>
     *
     * @throws APIException
     */
    public function list(
        array|PaymentConditionListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = PaymentConditionListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/payment-conditions',
            query: $parsed,
            options: $options,
            convert: new ListOf(PaymentCondition::class),
        );
    }
}
