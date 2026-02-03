<?php

declare(strict_types=1);

namespace QbilPhpSDK;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use QbilPhpSDK\Core\BaseClient;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\Services\V1Service;

/**
 * @phpstan-import-type NormalizedRequest from \QbilPhpSDK\Core\BaseClient
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
class Client extends BaseClient
{
    public string $apiKey;

    public string $tenant;

    /**
     * @api
     */
    public V1Service $v1;

    /**
     * @param RequestOpts|null $requestOptions
     */
    public function __construct(
        ?string $apiKey = null,
        ?string $tenant = null,
        ?string $baseUrl = null,
        RequestOptions|array|null $requestOptions = null,
    ) {
        $this->apiKey = (string) ($apiKey ?? Util::getenv('QBIL_PHP_SDK_API_KEY'));
        $this->tenant = (string) ($tenant ?? Util::getenv(
            'QBIL_PHP_SDK_TENANT'
        ) ?: 'demo');

        $baseUrl ??= Util::getenv(
            'QBIL_PHP_SDK_BASE_URL'
        ) ?: "https://{$this->tenant}.qbiltrade.com";

        $options = RequestOptions::parse(
            RequestOptions::with(
                uriFactory: Psr17FactoryDiscovery::findUriFactory(),
                streamFactory: Psr17FactoryDiscovery::findStreamFactory(),
                requestFactory: Psr17FactoryDiscovery::findRequestFactory(),
                transporter: Psr18ClientDiscovery::find(),
            ),
            $requestOptions,
        );

        parent::__construct(
            headers: [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => sprintf('qbil-php-sdk/PHP %s', VERSION),
                'X-Stainless-Lang' => 'php',
                'X-Stainless-Package-Version' => '0.0.1',
                'X-Stainless-Arch' => Util::machtype(),
                'X-Stainless-OS' => Util::ostype(),
                'X-Stainless-Runtime' => php_sapi_name(),
                'X-Stainless-Runtime-Version' => phpversion(),
            ],
            baseUrl: $baseUrl,
            options: $options
        );

        $this->v1 = new V1Service($this);
    }

    /** @return array<string,string> */
    protected function authHeaders(): array
    {
        return $this->apiKey ? ['Authorization' => "Bearer {$this->apiKey}"] : [];
    }

    /**
     * @internal
     *
     * @param string|list<string> $path
     * @param array<string,mixed> $query
     * @param array<string,string|int|list<string|int>|null> $headers
     * @param RequestOpts|null $opts
     *
     * @return array{NormalizedRequest, RequestOptions}
     */
    protected function buildRequest(
        string $method,
        string|array $path,
        array $query,
        array $headers,
        mixed $body,
        RequestOptions|array|null $opts,
    ): array {
        return parent::buildRequest(
            method: $method,
            path: $path,
            query: $query,
            headers: [...$this->authHeaders(), ...$headers],
            body: $body,
            opts: $opts,
        );
    }
}
