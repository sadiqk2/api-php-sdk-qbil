<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\V1ListCustomFieldsParams\Location;
use QbilPhpSDK\V1\V1ListCustomFieldsResponseItem;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface V1Contract
{
    /**
     * @api
     *
     * @param int $itemsPerPage The number of items per page
     * @param Location|value-of<Location> $location Filter by location(e.g. `custom-fields?location=contract` will return all custom fields placed in contract and contract-lines)
     * @param list<string> $name
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<V1ListCustomFieldsResponseItem>
     *
     * @throws APIException
     */
    public function listCustomFields(
        int $itemsPerPage = 40,
        Location|string|null $location = null,
        ?array $name = null,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
