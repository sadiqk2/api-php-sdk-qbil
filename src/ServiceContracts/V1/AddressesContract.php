<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Addresses\Address;
use QbilPhpSDK\V1\Addresses\AddressListParams\Relation;

/**
 * @phpstan-import-type RelationShape from \QbilPhpSDK\V1\Addresses\AddressListParams\Relation
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface AddressesContract
{
    /**
     * @api
     *
     * @param string $id Address identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Address;

    /**
     * @api
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param Relation|RelationShape $relation
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Address>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        int $page = 1,
        Relation|array|null $relation = null,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
