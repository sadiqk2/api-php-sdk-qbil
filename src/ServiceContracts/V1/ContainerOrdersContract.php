<?php

declare(strict_types=1);

namespace QbilPhpSDK\ServiceContracts\V1;

use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrder;
use QbilPhpSDK\V1\ContainerOrders\ContainerOrderLine;

/**
 * @phpstan-import-type ContainerOrderLineShape from \QbilPhpSDK\V1\ContainerOrders\ContainerOrderLine
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
interface ContainerOrdersContract
{
    /**
     * @api
     *
     * @param string $id ContainerOrder identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): ContainerOrder;

    /**
     * @api
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
    ): ContainerOrder;
}
