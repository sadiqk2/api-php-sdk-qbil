<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\V1ListCustomFieldsParams\Location;

/**
 * Discover available custom fields and their keys. Use the `name` property as the key when setting custom field values in write APIs (e.g., PATCH /container-orders). Filter by `location` to find fields applicable to specific modules (e.g., order, contract, product).
 *
 * @see QbilPhpSDK\Services\V1Service::listCustomFields()
 *
 * @phpstan-type V1ListCustomFieldsParamsShape = array{
 *   itemsPerPage?: int|null,
 *   location?: null|Location|value-of<Location>,
 *   name?: list<string>|null,
 *   page?: int|null,
 * }
 */
final class V1ListCustomFieldsParams implements BaseModel
{
    /** @use SdkModel<V1ListCustomFieldsParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * The number of items per page.
     */
    #[Optional]
    public ?int $itemsPerPage;

    /**
     * Filter by location(e.g. `custom-fields?location=contract` will return all custom fields placed in contract and contract-lines).
     *
     * @var value-of<Location>|null $location
     */
    #[Optional(enum: Location::class)]
    public ?string $location;

    /** @var list<string>|null $name */
    #[Optional(list: 'string')]
    public ?array $name;

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
     *
     * @param Location|value-of<Location>|null $location
     * @param list<string>|null $name
     */
    public static function with(
        ?int $itemsPerPage = null,
        Location|string|null $location = null,
        ?array $name = null,
        ?int $page = null,
    ): self {
        $self = new self;

        null !== $itemsPerPage && $self['itemsPerPage'] = $itemsPerPage;
        null !== $location && $self['location'] = $location;
        null !== $name && $self['name'] = $name;
        null !== $page && $self['page'] = $page;

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
     * Filter by location(e.g. `custom-fields?location=contract` will return all custom fields placed in contract and contract-lines).
     *
     * @param Location|value-of<Location> $location
     */
    public function withLocation(Location|string $location): self
    {
        $self = clone $this;
        $self['location'] = $location;

        return $self;
    }

    /**
     * @param list<string> $name
     */
    public function withName(array $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

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
