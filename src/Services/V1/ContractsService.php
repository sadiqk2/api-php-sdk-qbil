<?php

declare(strict_types=1);

namespace QbilPhpSDK\Services\V1;

use QbilPhpSDK\Client;
use QbilPhpSDK\Core\Exceptions\APIException;
use QbilPhpSDK\Core\Util;
use QbilPhpSDK\RequestOptions;
use QbilPhpSDK\ServiceContracts\V1\ContractsContract;
use QbilPhpSDK\V1\Contracts\Contract;
use QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary;

/**
 * @phpstan-import-type SubsidiaryShape from \QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary
 * @phpstan-import-type RequestOpts from \QbilPhpSDK\RequestOptions
 */
final class ContractsService implements ContractsContract
{
    /**
     * @api
     */
    public ContractsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new ContractsRawService($client);
    }

    /**
     * @api
     *
     * Retrieves a Contract resource.
     *
     * @param string $id Contract identifier
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $id,
        RequestOptions|array|null $requestOptions = null
    ): Contract {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($id, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Retrieves the collection of Contract resources.
     *
     * @param string $contractLineID Filter by contractline ID
     * @param string $displayNumber Filter by display number
     * @param int $itemsPerPage The number of items per page
     * @param int $page The collection page number
     * @param Subsidiary|SubsidiaryShape $subsidiary
     * @param RequestOpts|null $requestOptions
     *
     * @return list<Contract>
     *
     * @throws APIException
     */
    public function list(
        ?string $contractDateAfter = null,
        ?string $contractDateBefore = null,
        ?string $contractDateStrictlyAfter = null,
        ?string $contractDateStrictlyBefore = null,
        ?string $contractLineID = null,
        ?string $createdAtAfter = null,
        ?string $createdAtBefore = null,
        ?string $createdAtStrictlyAfter = null,
        ?string $createdAtStrictlyBefore = null,
        ?string $displayNumber = null,
        int $itemsPerPage = 40,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        int $page = 1,
        Subsidiary|array|null $subsidiary = null,
        RequestOptions|array|null $requestOptions = null,
    ): array {
        $params = Util::removeNulls(
            [
                'contractDateAfter' => $contractDateAfter,
                'contractDateBefore' => $contractDateBefore,
                'contractDateStrictlyAfter' => $contractDateStrictlyAfter,
                'contractDateStrictlyBefore' => $contractDateStrictlyBefore,
                'contractLineID' => $contractLineID,
                'createdAtAfter' => $createdAtAfter,
                'createdAtBefore' => $createdAtBefore,
                'createdAtStrictlyAfter' => $createdAtStrictlyAfter,
                'createdAtStrictlyBefore' => $createdAtStrictlyBefore,
                'displayNumber' => $displayNumber,
                'itemsPerPage' => $itemsPerPage,
                'lastUpdatedAtAfter' => $lastUpdatedAtAfter,
                'lastUpdatedAtBefore' => $lastUpdatedAtBefore,
                'lastUpdatedAtStrictlyAfter' => $lastUpdatedAtStrictlyAfter,
                'lastUpdatedAtStrictlyBefore' => $lastUpdatedAtStrictlyBefore,
                'page' => $page,
                'subsidiary' => $subsidiary,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
