<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\TradeConditions\TradeCondition;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface TradeConditionsContract
{
    /**
     * @api
     *
     * @param string $id TradeCondition identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): TradeCondition;

    /**
     * @api
     *
     * @param list<string> $id
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<TradeCondition>
     *
     * @throws APIException
     */
    public function list(
        ?array $id = null,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
