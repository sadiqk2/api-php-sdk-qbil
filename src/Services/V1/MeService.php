<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\MeContract;
use QbilPhpSDK\V1\Me\Me;

/**
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class MeService implements MeContract
{
    /**
     * @api
     */
    public MeRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new MeRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a Me resource.
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        RequestOptions|array|null $requestOptions = null
    ): Me {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve(requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Updates the Me resource.
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
    ): Me {
        $params = Util::removeNulls(
            ['email' => $email, 'webhookURL' => $webhookURL]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->update(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
