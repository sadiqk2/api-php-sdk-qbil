<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Relations\Relation;
use QbilPhpSDK\V1\Relations\RelationListAddressesParams;
use QbilPhpSDK\V1\Relations\RelationListParams;
use QbilPhpSDK\V1\Relations\RelationListSilosParams;
use QbilPhpSDK\V1\Silos\Silo;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface RelationsRawContract
{
    /**
     * @api
     *
     * @param string $id Relation identifier
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Relation>
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|RelationListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Relation>>
     *
     * @throws APIException
     */
    public function list(
        array|RelationListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id Relation identifier
     * @param array<string,mixed>|RelationListAddressesParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Address>>
     *
     * @throws APIException
     */
    public function listAddresses(
        string $id,
        array|RelationListAddressesParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id The relation Id
     * @param array<string,mixed>|RelationListSilosParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Silo>>
     *
     * @throws APIException
     */
    public function listSilos(
        string $id,
        array|RelationListSilosParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
