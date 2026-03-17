<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Get all the orders.
 *
 * @see QbilPhpSDK\Services\V1\OrdersService::list()
 *
 * @phpstan-type OrderListParamsShape = array{
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
 *   orderDateAfter?: string|null,
 *   orderDateBefore?: string|null,
 *   orderDateStrictlyAfter?: string|null,
 *   orderDateStrictlyBefore?: string|null,
 *   page?: int|null,
 *   subsidiary?: string|null,
 * }
 */
final class OrderListParams implements BaseModel
{
    /** @use SdkModel<OrderListParamsShape> */
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

    #[Optional]
    public ?string $orderDateAfter;

    #[Optional]
    public ?string $orderDateBefore;

    #[Optional]
    public ?string $orderDateStrictlyAfter;

    #[Optional]
    public ?string $orderDateStrictlyBefore;

    /**
     * The collection page number.
     */
    #[Optional]
    public ?int $page;

    #[Optional]
    public ?string $subsidiary;

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
        ?string $displayNumber = null,
        ?int $itemsPerPage = null,
        ?string $lastUpdatedAtAfter = null,
        ?string $lastUpdatedAtBefore = null,
        ?string $lastUpdatedAtStrictlyAfter = null,
        ?string $lastUpdatedAtStrictlyBefore = null,
        ?string $orderDateAfter = null,
        ?string $orderDateBefore = null,
        ?string $orderDateStrictlyAfter = null,
        ?string $orderDateStrictlyBefore = null,
        ?int $page = null,
        ?string $subsidiary = null,
    ): self {
        $self = new self;

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
        null !== $orderDateAfter && $self['orderDateAfter'] = $orderDateAfter;
        null !== $orderDateBefore && $self['orderDateBefore'] = $orderDateBefore;
        null !== $orderDateStrictlyAfter && $self['orderDateStrictlyAfter'] = $orderDateStrictlyAfter;
        null !== $orderDateStrictlyBefore && $self['orderDateStrictlyBefore'] = $orderDateStrictlyBefore;
        null !== $page && $self['page'] = $page;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;

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

    public function withOrderDateAfter(string $orderDateAfter): self
    {
        $self = clone $this;
        $self['orderDateAfter'] = $orderDateAfter;

        return $self;
    }

    public function withOrderDateBefore(string $orderDateBefore): self
    {
        $self = clone $this;
        $self['orderDateBefore'] = $orderDateBefore;

        return $self;
    }

    public function withOrderDateStrictlyAfter(
        string $orderDateStrictlyAfter
    ): self {
        $self = clone $this;
        $self['orderDateStrictlyAfter'] = $orderDateStrictlyAfter;

        return $self;
    }

    public function withOrderDateStrictlyBefore(
        string $orderDateStrictlyBefore
    ): self {
        $self = clone $this;
        $self['orderDateStrictlyBefore'] = $orderDateStrictlyBefore;

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

    public function withSubsidiary(string $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }
}
