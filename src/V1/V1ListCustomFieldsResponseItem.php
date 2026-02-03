<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type V1ListCustomFieldsResponseItemShape = array{
 *   choices?: list<string>|null,
 *   description?: string|null,
 *   label?: string|null,
 *   location?: list<string>|null,
 *   name?: string|null,
 *   required?: bool|null,
 *   type?: string|null,
 * }
 */
final class V1ListCustomFieldsResponseItem implements BaseModel
{
    /** @use SdkModel<V1ListCustomFieldsResponseItemShape> */
    use SdkModel;

    /**
     * Available choices for choice-type fields. Returns null for other field types (text, number, date, etc.).
     *
     * @var list<string>|null $choices
     */
    #[Optional(list: 'string', nullable: true)]
    public ?array $choices;

    /**
     * Optional description explaining the purpose of this custom field.
     */
    #[Optional(nullable: true)]
    public ?string $description;

    /**
     * Label for the custom field.
     */
    #[Optional]
    public ?string $label;

    /**
     * Modules/locations where this custom field can be used (e.g., order, contract, product).
     *
     * @var list<string>|null $location
     */
    #[Optional(list: 'string')]
    public ?array $location;

    /**
     * Unique identifier (key) for the custom field. Use this as the key when setting custom field values in write APIs.
     */
    #[Optional]
    public ?string $name;

    /**
     * Whether this field is required or not.
     */
    #[Optional]
    public ?bool $required;

    /**
     * Field type. <span style="color:green;">Available Types:</span> text, number, quantity, amount, exchange_rate, textarea, checkbox, choice, date, time, datetime, transporters, product_groups, manufacturers, containers, country_choice, brands, users, products, pallets, consignees, load_unload_addresses, relations.
     */
    #[Optional]
    public ?string $type;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $choices
     * @param list<string>|null $location
     */
    public static function with(
        ?array $choices = null,
        ?string $description = null,
        ?string $label = null,
        ?array $location = null,
        ?string $name = null,
        ?bool $required = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $choices && $self['choices'] = $choices;
        null !== $description && $self['description'] = $description;
        null !== $label && $self['label'] = $label;
        null !== $location && $self['location'] = $location;
        null !== $name && $self['name'] = $name;
        null !== $required && $self['required'] = $required;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    /**
     * Available choices for choice-type fields. Returns null for other field types (text, number, date, etc.).
     *
     * @param list<string>|null $choices
     */
    public function withChoices(?array $choices): self
    {
        $self = clone $this;
        $self['choices'] = $choices;

        return $self;
    }

    /**
     * Optional description explaining the purpose of this custom field.
     */
    public function withDescription(?string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * Label for the custom field.
     */
    public function withLabel(string $label): self
    {
        $self = clone $this;
        $self['label'] = $label;

        return $self;
    }

    /**
     * Modules/locations where this custom field can be used (e.g., order, contract, product).
     *
     * @param list<string> $location
     */
    public function withLocation(array $location): self
    {
        $self = clone $this;
        $self['location'] = $location;

        return $self;
    }

    /**
     * Unique identifier (key) for the custom field. Use this as the key when setting custom field values in write APIs.
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * Whether this field is required or not.
     */
    public function withRequired(bool $required): self
    {
        $self = clone $this;
        $self['required'] = $required;

        return $self;
    }

    /**
     * Field type. <span style="color:green;">Available Types:</span> text, number, quantity, amount, exchange_rate, textarea, checkbox, choice, date, time, datetime, transporters, product_groups, manufacturers, containers, country_choice, brands, users, products, pallets, consignees, load_unload_addresses, relations.
     */
    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
