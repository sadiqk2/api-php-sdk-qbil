<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Conversion\ListOf;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\ContractsRawContract;
use QbilPhpSDK\V1\Contracts\Contract;
use QbilPhpSDK\V1\Contracts\ContractListParams;
use QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary;

/**
 * @phpstan-import-type SubsidiaryShape from \QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ContractsRawService implements ContractsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Retrieves a Contract resource.
     *
     * @param string $id Contract identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Contract>
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
            path: ['api/v1/contracts/%1$s', $id],
            options: $requestOptions,
            convert: Contract::class,
        );
    }

    /**
     * @api
     *
     * Retrieves the collection of Contract resources.
     *
     * @param array{
     *   contractDateAfter?: string,
     *   contractDateBefore?: string,
     *   contractDateStrictlyAfter?: string,
     *   contractDateStrictlyBefore?: string,
     *   contractLineID?: string,
     *   createdAtAfter?: string,
     *   createdAtBefore?: string,
     *   createdAtStrictlyAfter?: string,
     *   createdAtStrictlyBefore?: string,
     *   displayNumber?: string,
     *   itemsPerPage?: int,
     *   lastUpdatedAtAfter?: string,
     *   lastUpdatedAtBefore?: string,
     *   lastUpdatedAtStrictlyAfter?: string,
     *   lastUpdatedAtStrictlyBefore?: string,
     *   page?: int,
     *   subsidiary?: Subsidiary|SubsidiaryShape,
     * }|ContractListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Contract>>
     *
     * @throws APIException
     */
    public function list(
        array|ContractListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = ContractListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'api/v1/contracts',
            query: Util::array_transform_keys(
                $parsed,
                [
                    'contractDateAfter' => 'contractDate[after]',
                    'contractDateBefore' => 'contractDate[before]',
                    'contractDateStrictlyAfter' => 'contractDate[strictly_after]',
                    'contractDateStrictlyBefore' => 'contractDate[strictly_before]',
                    'contractLineID' => 'contractLineId',
                    'createdAtAfter' => 'createdAt[after]',
                    'createdAtBefore' => 'createdAt[before]',
                    'createdAtStrictlyAfter' => 'createdAt[strictly_after]',
                    'createdAtStrictlyBefore' => 'createdAt[strictly_before]',
                    'lastUpdatedAtAfter' => 'lastUpdatedAt[after]',
                    'lastUpdatedAtBefore' => 'lastUpdatedAt[before]',
                    'lastUpdatedAtStrictlyAfter' => 'lastUpdatedAt[strictly_after]',
                    'lastUpdatedAtStrictlyBefore' => 'lastUpdatedAt[strictly_before]',
                ],
            ),
            options: $options,
            convert: new ListOf(Contract::class),
        );
    }
}
