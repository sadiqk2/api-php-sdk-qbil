<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1\Relations;

use QbilPhpSDK\Core\Contracts\BaseResponse;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Relations\Contacts\Contact;
use QbilPhpSDK\V1\Relations\Contacts\ContactListParams;
use QbilPhpSDK\V1\Relations\Contacts\ContactRetrieveParams;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ContactsRawContract
{
    /**
     * @api
     *
     * @param string $id Contact identifier
     * @param array<string,mixed>|ContactRetrieveParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<Contact>
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        array|ContactRetrieveParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $id Relation identifier
     * @param array<string,mixed>|ContactListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<list<Contact>>
     *
     * @throws APIException
     */
    public function list(
        string $id,
        array|ContactListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
