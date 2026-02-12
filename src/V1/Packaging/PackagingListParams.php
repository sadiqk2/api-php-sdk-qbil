<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Packaging;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves the collection of Packaging resources.
 *
 * @see QbilPhpSDK\Services\V1\PackagingService::list()
 *
 * @phpstan-type PackagingListParamsShape = array{
 *   code?: string|null, itemsPerPage?: int|null, page?: int|null
 * }
 */
final class PackagingListParams implements BaseModel
{
    /** @use SdkModel<PackagingListParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Optional]
    public ?string $code;

    /**
     * The number of items per page.
     */
    #[Optional]
    public ?int $itemsPerPage;

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
        ?string $code = null,
        ?int $itemsPerPage = null,
        ?int $page = null
    ): self {
        $self = new self;

        null !== $code && $self['code'] = $code;
        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $page && $self['page'] = $page;

        return $self;
    }

    public function withCode(string $code): self
    {
        $self = clone $this;
        $self['code'] = $code;

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
