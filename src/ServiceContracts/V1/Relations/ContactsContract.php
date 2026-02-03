<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1\Relations;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Relations\Contacts\Contact;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ContactsContract
{
    /**
     * @api
     *
     * @param string $id Contact identifier
     * @param string $relationID Relation identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        string $relationID,
        RequestOptions|array|null $requestOptions = null,
    ): Contact;

    /**
     * @api
     *
     * @param string $id Relation identifier
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Contact>
     *
     * @throws APIException
     */
    public function list(
        string $id,
        int $itemsPerPage = 40,
        int $page = 1,
        RequestOptions|array|null $requestOptions = null,
    ): array;
}
