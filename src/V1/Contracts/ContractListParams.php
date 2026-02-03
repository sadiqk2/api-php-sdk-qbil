<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary;

/**
 * Retrieves the collection of Contract resources.
 *
 * @see QbilPhpSDK\Services\V1\ContractsService::list()
 *
 * @phpstan-import-type SubsidiaryShape from \QbilPhpSDK\V1\Contracts\ContractListParams\Subsidiary
 *
 * @phpstan-type ContractListParamsShape = array{
 *   contractDateAfter?: string|null,
 *   contractDateBefore?: string|null,
 *   contractDateStrictlyAfter?: string|null,
 *   contractDateStrictlyBefore?: string|null,
 *   contractLineID?: string|null,
 *   createdAtAfter?: string|null,
 *   createdAtBefore?: string|null,
 *   createdAtStrictlyAfter?: string|null,
 *   createdAtStrictlyBefore?: string|null,
 *   displayNumber?: string|null,
 *   itemsPerPage?: int|null,
 *   lastUpdatedAtAfter?: string|null,
 *   lastUpdatedAtBefore?: string|null,
 *   lastUpdatedAtStrictlyAfter?: string|null,
 *   lastUpdatedAtStrictlyBefore?: string|null,
 *   page?: int|null,
 *   subsidiary?: null|Subsidiary|SubsidiaryShape,
 * }
 */
final class ContractListParams implements BaseModel
{
    /** @use SdkModel<ContractListParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Optional]
    public ?string $contractDateAfter;

    #[Optional]
    public ?string $contractDateBefore;

    #[Optional]
    public ?string $contractDateStrictlyAfter;

    #[Optional]
    public ?string $contractDateStrictlyBefore;

    /**
     * Filter by contractline ID.
     */
    #[Optional]
    public ?string $contractLineID;

    #[Optional]
    public ?string $createdAtAfter;

    #[Optional]
    public ?string $createdAtBefore;

    #[Optional]
    public ?string $createdAtStrictlyAfter;

    #[Optional]
    public ?string $createdAtStrictlyBefore;

    /**
     * Filter by display number.
     */
    #[Optional]
    public ?string $displayNumber;

    /**
     * The number of items per page.
     */
    #[Optional]
    public ?int $itemsPerPage;

    #[Optional]
    public ?string $lastUpdatedAtAfter;

    #[Optional]
    public ?string $lastUpdatedAtBefore;

    #[Optional]
    public ?string $lastUpdatedAtStrictlyAfter;

    #[Optional]
    public ?string $lastUpdatedAtStrictlyBefore;

    /**
     * The collection page number.
     */
    #[Optional]
    public ?int $page;

    #[Optional]
    public ?Subsidiary $subsidiary;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Subsidiary|SubsidiaryShape|null $subsidiary
     */
    public static function with(
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
        ?int $itemsPerPage = null,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        ?int $page = null,
        Subsidiary|array|null $subsidiary = null,
    ): self {
        $self = new self;

        null !== $contractDateAfter && $self['contractDateAfter'] = $contractDateAfter;
        null !== $contractDateBefore && $self['contractDateBefore'] = $contractDateBefore;
        null !== $contractDateStrictlyAfter && $self['contractDateStrictlyAfter'] = $contractDateStrictlyAfter;
        null !== $contractDateStrictlyBefore && $self['contractDateStrictlyBefore'] = $contractDateStrictlyBefore;
        null !== $contractLineID && $self['contractLineID'] = $contractLineID;
        null !== $createdAtAfter && $self['createdAtAfter'] = $createdAtAfter;
        null !== $createdAtBefore && $self['createdAtBefore'] = $createdAtBefore;
        null !== $createdAtStrictlyAfter && $self['createdAtStrictlyAfter'] = $createdAtStrictlyAfter;
        null !== $createdAtStrictlyBefore && $self['createdAtStrictlyBefore'] = $createdAtStrictlyBefore;
        null !== $displayNumber && $self['displayNumber'] = $displayNumber;
        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $lastUpdatedAtAfter && $self['lastUpdatedAtAfter'] = $lastUpdatedAtAfter;
        null !== $lastUpdatedAtBefore && $self['lastUpdatedAtBefore'] = $lastUpdatedAtBefore;
        null !== $lastUpdatedAtStrictlyAfter && $self['lastUpdatedAtStrictlyAfter'] = $lastUpdatedAtStrictlyAfter;
        null !== $lastUpdatedAtStrictlyBefore && $self['lastUpdatedAtStrictlyBefore'] = $lastUpdatedAtStrictlyBefore;
        null !== $page && $self['page'] = $page;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;

        return $self;
    }

    public function withContractDateAfter(string $contractDateAfter): self
    {
        $self = clone $this;
        $self['contractDateAfter'] = $contractDateAfter;

        return $self;
    }

    public function withContractDateBefore(string $contractDateBefore): self
    {
        $self = clone $this;
        $self['contractDateBefore'] = $contractDateBefore;

        return $self;
    }

    public function withContractDateStrictlyAfter(
        string $contractDateStrictlyAfter
    ): self {
        $self = clone $this;
        $self['contractDateStrictlyAfter'] = $contractDateStrictlyAfter;

        return $self;
    }

    public function withContractDateStrictlyBefore(
        string $contractDateStrictlyBefore
    ): self {
        $self = clone $this;
        $self['contractDateStrictlyBefore'] = $contractDateStrictlyBefore;

        return $self;
    }

    /**
     * Filter by contractline ID.
     */
    public function withContractLineID(string $contractLineID): self
    {
        $self = clone $this;
        $self['contractLineID'] = $contractLineID;

        return $self;
    }

    public function withCreatedAtAfter(string $createdAtAfter): self
    {
        $self = clone $this;
        $self['createdAtAfter'] = $createdAtAfter;

        return $self;
    }

    public function withCreatedAtBefore(string $createdAtBefore): self
    {
        $self = clone $this;
        $self['createdAtBefore'] = $createdAtBefore;

        return $self;
    }

    public function withCreatedAtStrictlyAfter(
        string $createdAtStrictlyAfter
    ): self {
        $self = clone $this;
        $self['createdAtStrictlyAfter'] = $createdAtStrictlyAfter;

        return $self;
    }

    public function withCreatedAtStrictlyBefore(
        string $createdAtStrictlyBefore
    ): self {
        $self = clone $this;
        $self['createdAtStrictlyBefore'] = $createdAtStrictlyBefore;

        return $self;
    }

    /**
     * Filter by display number.
     */
    public function withDisplayNumber(string $displayNumber): self
    {
        $self = clone $this;
        $self['displayNumber'] = $displayNumber;

        return $self;
    }

    /**
     * The number of items per page.
     */
    public function withItemsPerPage(int $itemsPerPage): self
    {
        $self = clone $this;
        $self['itemsPerPage'] = $itemsPerPage;

        return $self;
    }

    public function withLastUpdatedAtAfter(string $lastUpdatedAtAfter): self
    {
        $self = clone $this;
        $self['lastUpdatedAtAfter'] = $lastUpdatedAtAfter;

        return $self;
    }

    public function withLastUpdatedAtBefore(string $lastUpdatedAtBefore): self
    {
        $self = clone $this;
        $self['lastUpdatedAtBefore'] = $lastUpdatedAtBefore;

        return $self;
    }

    public function withLastUpdatedAtStrictlyAfter(
        string $lastUpdatedAtStrictlyAfter
    ): self {
        $self = clone $this;
        $self['lastUpdatedAtStrictlyAfter'] = $lastUpdatedAtStrictlyAfter;

        return $self;
    }

    public function withLastUpdatedAtStrictlyBefore(
        string $lastUpdatedAtStrictlyBefore
    ): self {
        $self = clone $this;
        $self['lastUpdatedAtStrictlyBefore'] = $lastUpdatedAtStrictlyBefore;

        return $self;
    }

    /**
     * The collection page number.
     */
    public function withPage(int $page): self
    {
        $self = clone $this;
        $self['page'] = $page;

        return $self;
    }

    /**
     * @param Subsidiary|SubsidiaryShape $subsidiary
     */
    public function withSubsidiary(Subsidiary|array $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }
}
