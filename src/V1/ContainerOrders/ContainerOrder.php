<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ContainerOrders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\Core\Conversion\MapOf;

/**
 * @phpstan-import-type ContainerOrderLineShape from \QbilPhpSDK\V1\ContainerOrders\ContainerOrderLine
 *
 * @phpstan-type ContainerOrderShape = array{
 *   displayNumber: string,
 *   id?: string|null,
 *   blNumber?: string|null,
 *   customFields?: array<string,string|null>|null,
 *   destinationArrivalDateTime?: \DateTimeInterface|null,
 *   destinationDepartureDateTime?: \DateTimeInterface|null,
 *   lines?: list<ContainerOrderLine|ContainerOrderLineShape>|null,
 *   loadingDate?: \DateTimeInterface|null,
 *   originArrivalDateTime?: \DateTimeInterface|null,
 *   originDepartureDateTime?: \DateTimeInterface|null,
 *   unloadingDate?: \DateTimeInterface|null,
 * }
 */
final class ContainerOrder implements BaseModel
{
    /** @use SdkModel<ContainerOrderShape> */
    use SdkModel;

    #[Required]
    public string $displayNumber;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $blNumber;

    /**
     * Custom field values as key-value pairs. Use GET <span style="color:green;">/custom-fields?location=order</span> to discover available field keys and their types.
     *
     * @var array<string,string|null>|null $customFields
     */
    #[Optional(type: new MapOf('string', nullable: true))]
    public ?array $customFields;

    #[Optional]
    public ?\DateTimeInterface $destinationArrivalDateTime;

    #[Optional]
    public ?\DateTimeInterface $destinationDepartureDateTime;

    /** @var list<ContainerOrderLine>|null $lines */
    #[Optional(list: ContainerOrderLine::class)]
    public ?array $lines;

    #[Optional]
    public ?\DateTimeInterface $loadingDate;

    #[Optional]
    public ?\DateTimeInterface $originArrivalDateTime;

    #[Optional]
    public ?\DateTimeInterface $originDepartureDateTime;

    #[Optional]
    public ?\DateTimeInterface $unloadingDate;

    /**
     * `new ContainerOrder()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * ContainerOrder::with(displayNumber: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new ContainerOrder)->withDisplayNumber(...)
     * ```
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param array<string,string|null>|null $customFields
     * @param list<ContainerOrderLine|ContainerOrderLineShape>|null $lines
     */
    public static function with(
        string $displayNumber,
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
    ): self {
        $self = new self;

        $self['displayNumber'] = $displayNumber;

        null !== $id && $self['id'] = $id;
        null !== $blNumber && $self['blNumber'] = $blNumber;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $destinationArrivalDateTime && $self['destinationArrivalDateTime'] = $destinationArrivalDateTime;
        null !== $destinationDepartureDateTime && $self['destinationDepartureDateTime'] = $destinationDepartureDateTime;
        null !== $lines && $self['lines'] = $lines;
        null !== $loadingDate && $self['loadingDate'] = $loadingDate;
        null !== $originArrivalDateTime && $self['originArrivalDateTime'] = $originArrivalDateTime;
        null !== $originDepartureDateTime && $self['originDepartureDateTime'] = $originDepartureDateTime;
        null !== $unloadingDate && $self['unloadingDate'] = $unloadingDate;

        return $self;
    }

    public function withDisplayNumber(string $displayNumber): self
    {
        $self = clone $this;
        $self['displayNumber'] = $displayNumber;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withBlNumber(string $blNumber): self
    {
        $self = clone $this;
        $self['blNumber'] = $blNumber;

        return $self;
    }

    /**
     * Custom field values as key-value pairs. Use GET <span style="color:green;">/custom-fields?location=order</span> to discover available field keys and their types.
     *
     * @param array<string,string|null> $customFields
     */
    public function withCustomFields(array $customFields): self
    {
        $self = clone $this;
        $self['customFields'] = $customFields;

        return $self;
    }

    public function withDestinationArrivalDateTime(
        \DateTimeInterface $destinationArrivalDateTime
    ): self {
        $self = clone $this;
        $self['destinationArrivalDateTime'] = $destinationArrivalDateTime;

        return $self;
    }

    public function withDestinationDepartureDateTime(
        \DateTimeInterface $destinationDepartureDateTime
    ): self {
        $self = clone $this;
        $self['destinationDepartureDateTime'] = $destinationDepartureDateTime;

        return $self;
    }

    /**
     * @param list<ContainerOrderLine|ContainerOrderLineShape> $lines
     */
    public function withLines(array $lines): self
    {
        $self = clone $this;
        $self['lines'] = $lines;

        return $self;
    }

    public function withLoadingDate(\DateTimeInterface $loadingDate): self
    {
        $self = clone $this;
        $self['loadingDate'] = $loadingDate;

        return $self;
    }

    public function withOriginArrivalDateTime(
        \DateTimeInterface $originArrivalDateTime
    ): self {
        $self = clone $this;
        $self['originArrivalDateTime'] = $originArrivalDateTime;

        return $self;
    }

    public function withOriginDepartureDateTime(
        \DateTimeInterface $originDepartureDateTime
    ): self {
        $self = clone $this;
        $self['originDepartureDateTime'] = $originDepartureDateTime;

        return $self;
    }

    public function withUnloadingDate(\DateTimeInterface $unloadingDate): self
    {
        $self = clone $this;
        $self['unloadingDate'] = $unloadingDate;

        return $self;
    }
}
