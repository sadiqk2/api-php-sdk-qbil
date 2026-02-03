<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\ContainerOrdersContract;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrder;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrderLine;

/**
 * @phpstan-import-type ContainerOrderLineShape from \QbilPhpSDK\V1\ContainerOrders\ContainerOrderLine
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ContainerOrdersService implements ContainerOrdersContract
{
    /**
     * @api
     */
    public ContainerOrdersRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new ContainerOrdersRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a ContainerOrder resource.
     *
     * @param string $id ContainerOrder identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): ContainerOrder {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Updates the ContainerOrder resource.
     *
     * @param string $id_ ContainerOrder identifier
     * @param array<string,string|null> $customFields Custom field values as key-value pairs. Use GET <span style="color:green;">/custom-fields?location=order</span> to discover available field keys and their types.
     * @param list<ContainerOrderLine|ContainerOrderLineShape> $lines
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function update(
        string $id_,
        ?string $id = null,
        ?string $blNumber = null,
        ?array $customFields = null,
        ?\DateTimeInterface $destinationArrivalDateTime = null,
        ?\DateTimeInterface $destinationDepartureDateTime = null,
        ?array $lines = null,
        ?\DateTimeInterface $loadingDate = null,
        ?\DateTimeInterface $originArrivalDateTime = null,
        ?\DateTimeInterface $originDepartureDateTime = null,
        ?\DateTimeInterface $unloadingDate = null,
        RequestOptions|array|null $requestOptions = null,
    ): ContainerOrder {
        $params = Util::removeNulls(
            [
                'id' => $id,
                'blNumber' => $blNumber,
                'customFields' => $customFields,
                'destinationArrivalDateTime' => $destinationArrivalDateTime,
                'destinationDepartureDateTime' => $destinationDepartureDateTime,
                'lines' => $lines,
                'loadingDate' => $loadingDate,
                'originArrivalDateTime' => $originArrivalDateTime,
                'originDepartureDateTime' => $originDepartureDateTime,
                'unloadingDate' => $unloadingDate,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->update($id_, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
