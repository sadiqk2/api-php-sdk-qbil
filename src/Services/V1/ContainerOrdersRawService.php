<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\ContainerOrdersRawContract;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrder;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrderLine;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrderUpdateParams;

/**
 * @phpstan-import-type ContainerOrderLineShape from \QbilPhpSDK\V1\ContainerOrders\ContainerOrderLine
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ContainerOrdersRawService implements ContainerOrdersRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a ContainerOrder resource.
     *
     * @param string $id ContainerOrder identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ContainerOrder>
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
            path: ['api/v1/container-orders/%1$s', $id],
            options: $requestOptions,
            convert: ContainerOrder::class,
        );
    }

    /**
     * @api
     *
     * Updates the ContainerOrder resource.
     *
     * @param string $id_ ContainerOrder identifier
     * @param array{
     *   id?: string,
     *   blNumber?: string,
     *   customFields?: array<string,string|null>,
     *   destinationArrivalDateTime?: \DateTimeInterface,
     *   destinationDepartureDateTime?: \DateTimeInterface,
     *   lines?: list<ContainerOrderLine|ContainerOrderLineShape>,
     *   loadingDate?: \DateTimeInterface,
     *   originArrivalDateTime?: \DateTimeInterface,
     *   originDepartureDateTime?: \DateTimeInterface,
     *   unloadingDate?: \DateTimeInterface,
     * }|ContainerOrderUpdateParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<ContainerOrder>
     *
     * @throws APIException
     */
    public function update(
        string $id_,
        array|ContainerOrderUpdateParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ContainerOrderUpdateParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'patch',
            path: ['api/v1/container-orders/%1$s', $id_],
            headers: ['Content-Type' => 'application/merge-patch+json'],
            body: (object) $parsed,
            options: $options,
            convert: ContainerOrder::class,
        );
    }
}
