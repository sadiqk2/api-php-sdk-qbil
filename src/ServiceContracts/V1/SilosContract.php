<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Silos\Silo;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface SilosContract
{
    /**
     * @api
     *
     * @param string $id Silo identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Silo;

    /**
     * @api
     *
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param string $siloName search by silo name
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Silo>
     *
     * @throws APIException
     */
    public function list(
        int $itemsPerPage = 40,
        int $page = 1,
        ?string $siloName = null,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
