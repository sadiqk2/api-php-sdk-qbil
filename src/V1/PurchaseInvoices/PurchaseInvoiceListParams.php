<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\PurchaseInvoices;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves the collection of PurchaseInvoice resources.
 *
 * @see QbilPhpSDK\Services\V1\PurchaseInvoicesService::list()
 *
 * @phpstan-type PurchaseInvoiceListParamsShape = array{
 *   createdAtAfter?: string|null,
 *   createdAtBefore?: string|null,
 *   createdAtStrictlyAfter?: string|null,
 *   createdAtStrictlyBefore?: string|null,
 *   invoiceDateAfter?: string|null,
 *   invoiceDateBefore?: string|null,
 *   invoiceDateStrictlyAfter?: string|null,
 *   invoiceDateStrictlyBefore?: string|null,
 *   itemsPerPage?: int|null,
 *   lastUpdatedAtAfter?: string|null,
 *   lastUpdatedAtBefore?: string|null,
 *   lastUpdatedAtStrictlyAfter?: string|null,
 *   lastUpdatedAtStrictlyBefore?: string|null,
 *   page?: int|null,
 * }
 */
final class PurchaseInvoiceListParams implements BaseModel
{
    /** @use SdkModel<PurchaseInvoiceListParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Optional]
    public ?string $createdAtAfter;

    #[Optional]
    public ?string $createdAtBefore;

    #[Optional]
    public ?string $createdAtStrictlyAfter;

    #[Optional]
    public ?string $createdAtStrictlyBefore;

    #[Optional]
    public ?string $invoiceDateAfter;

    #[Optional]
    public ?string $invoiceDateBefore;

    #[Optional]
    public ?string $invoiceDateStrictlyAfter;

    #[Optional]
    public ?string $invoiceDateStrictlyBefore;

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

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(
        ?string $createdAtAfter = null,
        ?string $createdAtBefore = null,
        ?string $createdAtStrictlyAfter = null,
        ?string $createdAtStrictlyBefore = null,
        ?string $invoiceDateAfter = null,
        ?string $invoiceDateBefore = null,
        ?string $invoiceDateStrictlyAfter = null,
        ?string $invoiceDateStrictlyBefore = null,
        ?int $itemsPerPage = null,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        ?int $page = null,
    ): self {
        $self = new self;

        null !== $createdAtAfter && $self['createdAtAfter'] = $createdAtAfter;
        null !== $createdAtBefore && $self['createdAtBefore'] = $createdAtBefore;
        null !== $createdAtStrictlyAfter && $self['createdAtStrictlyAfter'] = $createdAtStrictlyAfter;
        null !== $createdAtStrictlyBefore && $self['createdAtStrictlyBefore'] = $createdAtStrictlyBefore;
        null !== $invoiceDateAfter && $self['invoiceDateAfter'] = $invoiceDateAfter;
        null !== $invoiceDateBefore && $self['invoiceDateBefore'] = $invoiceDateBefore;
        null !== $invoiceDateStrictlyAfter && $self['invoiceDateStrictlyAfter'] = $invoiceDateStrictlyAfter;
        null !== $invoiceDateStrictlyBefore && $self['invoiceDateStrictlyBefore'] = $invoiceDateStrictlyBefore;
        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $lastUpdatedAtAfter && $self['lastUpdatedAtAfter'] = $lastUpdatedAtAfter;
        null !== $lastUpdatedAtBefore && $self['lastUpdatedAtBefore'] = $lastUpdatedAtBefore;
        null !== $lastUpdatedAtStrictlyAfter && $self['lastUpdatedAtStrictlyAfter'] = $lastUpdatedAtStrictlyAfter;
        null !== $lastUpdatedAtStrictlyBefore && $self['lastUpdatedAtStrictlyBefore'] = $lastUpdatedAtStrictlyBefore;
        null !== $page && $self['page'] = $page;

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

    public function withInvoiceDateAfter(string $invoiceDateAfter): self
    {
        $self = clone $this;
        $self['invoiceDateAfter'] = $invoiceDateAfter;

        return $self;
    }

    public function withInvoiceDateBefore(string $invoiceDateBefore): self
    {
        $self = clone $this;
        $self['invoiceDateBefore'] = $invoiceDateBefore;

        return $self;
    }

    public function withInvoiceDateStrictlyAfter(
        string $invoiceDateStrictlyAfter
    ): self {
        $self = clone $this;
        $self['invoiceDateStrictlyAfter'] = $invoiceDateStrictlyAfter;

        return $self;
    }

    public function withInvoiceDateStrictlyBefore(
        string $invoiceDateStrictlyBefore
    ): self {
        $self = clone $this;
        $self['invoiceDateStrictlyBefore'] = $invoiceDateStrictlyBefore;

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
}
