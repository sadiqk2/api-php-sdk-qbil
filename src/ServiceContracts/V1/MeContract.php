<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\Me\Me;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface MeContract
{
    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        RequestOptions|array|null $requestOptions = null
    ): Me;

    /**
     * @api
     *
     * @param string $email email address for receiving updates related to API changes
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function update(
        ?string $email = null,
        ?string $webhookURL = null,
        RequestOptions|array|null $requestOptions = null,
    ): Me;
}
