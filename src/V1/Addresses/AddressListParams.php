<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Addresses;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\AddressListParams\Relation;

/**
 * Retrieves the collection of Address resources.
 *
 * @see QbilPhpSDK\Services\V1\AddressesService::list()
 *
 * @phpstan-import-type RelationShape from \QbilPhpSDK\V1\Addresses\AddressListParams\Relation
 *
 * @phpstan-type AddressListParamsShape = array{
 *   itemsPerPage?: int|null,
 *   page?: int|null,
 *   relation?: null|Relation|RelationShape,
 * }
 */
final class AddressListParams implements BaseModel
{
    /** @use SdkModel<AddressListParamsShape> */
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

    #[Optional]
    public ?Relation $relation;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Relation|RelationShape|null $relation
     */
    public static function with(
        ?int $itemsPerPage = null,
        ?int $page = null,
        Relation|array|null $relation = null
    ): self {
        $self = new self;

        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $page && $self['page'] = $page;
        null !== $relation && $self['relation'] = $relation;

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
     * @param Relation|RelationShape $relation
     */
    public function withRelation(Relation|array $relation): self
    {
        $self = clone $this;
        $self['relation'] = $relation;

        return $self;
    }
}
