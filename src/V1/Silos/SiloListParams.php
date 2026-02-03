<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Silos;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves the collection of Silo resources.
 *
 * @see QbilPhpSDK\Services\V1\SilosService::list()
 *
 * @phpstan-type SiloListParamsShape = array{
 *   itemsPerPage?: int|null, page?: int|null, siloName?: string|null
 * }
 */
final class SiloListParams implements BaseModel
{
    /** @use SdkModel<SiloListParamsShape> */
    use SdkModel;
    use SdkParams;

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

    /**
     * search by silo name.
     */
    #[Optional]
    public ?string $siloName;

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
        ?int $itemsPerPage = null,
        ?int $page = null,
        ?string $siloName = null
    ): self {
        $self = new self;

        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $page && $self['page'] = $page;
        null !== $siloName && $self['siloName'] = $siloName;

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

    /**
     * search by silo name.
     */
    public function withSiloName(string $siloName): self
    {
        $self = clone $this;
        $self['siloName'] = $siloName;

        return $self;
    }
}
