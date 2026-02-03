<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Relations\Relation;
use QbilPhpSDK\V1\Silos\Silo;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface RelationsContract
{
    /**
     * @api
     *
     * @param string $id Relation identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Relation;

    /**
     * @api
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Relation>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        int $page = 1,
        ?string $shortCode = null,
        RequestOptions|array|null $requestOptions = null,
    ): array;

    /**
     * @api
     *
     * @param string $id Relation identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Address>
     *
     * @throws APIException
     */
    public function listAddresses(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;

    /**
     * @api
     *
     * @param string $id The relation Id
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Silo>
     *
     * @throws APIException
     */
    public function listSilos(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
