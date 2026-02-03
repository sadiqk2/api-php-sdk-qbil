<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Contracts\Contract;
use QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary;

/**
 * @phpstan-import-type SubsidiaryShape from \QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ContractsContract
{
    /**
     * @api
     *
     * @param string $id Contract identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Contract;

    /**
     * @api
     *
     * @param string $contractLineID Filter by contractline ID
     * @param string $displayNumber Filter by display number
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param Subsidiary|SubsidiaryShape $subsidiary
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Contract>
     *
     * @throws APIException
     */
    public function list(
        ?string $contractDateAfter = null,
        ?string $contractDateBefore = null,
        ?string $contractDateStrictlyAfter = null,
        ?string $contractDateStrictlyBefore = null,
        ?string $contractLineID = null,
        ?string $createdAtAfter = null,
        ?string $createdAtBefore = null,
        ?string $createdAtStrictlyAfter = null,
        ?string $createdAtStrictlyBefore = null,
        ?string $displayNumber = null,
        int $itemsPerPage = 40,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        int $page = 1,
        Subsidiary|array|null $subsidiary = null,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
