<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ContainerOrders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Stocks\ProductAnalysis;

/**
 * @phpstan-import-type ProductAnalysisShape from \QbilPhpSDK\V1\Stocks\ProductAnalysis
 *
 * @phpstan-type ContainerOrderLineShape = array{
 *   weighingTicketNumber: string|null,
 *   containerNumber?: string|null,
 *   customer?: string|null,
 *   destinationQuantity?: float|null,
 *   destinationSilo?: string|null,
 *   finalized?: bool|null,
 *   lineID?: string|null,
 *   preFinalized?: bool|null,
 *   productAnalysis?: list<ProductAnalysis|ProductAnalysisShape>|null,
 *   sourceQuantity?: float|null,
 *   sourceSilo?: string|null,
 *   supplier?: string|null,
 * }
 */
final class ContainerOrderLine implements BaseModel
{
    /** @use SdkModel<ContainerOrderLineShape> */
    use SdkModel;

    /**
     * Weighing ticket number.
     */
    #[Required]
    public ?string $weighingTicketNumber;

    /**
     * Loading reference.
     */
    #[Optional]
    public ?string $containerNumber;

    #[Optional(nullable: true)]
    public ?string $customer;

    /**
     * Net weight as weighed at factory in kg.
     */
    #[Optional]
    public ?float $destinationQuantity;

    /**
     * destination silo.
     */
    #[Optional(nullable: true)]
    public ?string $destinationSilo;

    /**
     * Finalized status of the line.
     */
    #[Optional]
    public ?bool $finalized;

    /**
     * Combination of source line and destination line separated by underscore.
     */
    #[Optional('lineId')]
    public ?string $lineID;

    #[Optional]
    public ?bool $preFinalized;

    /** @var list<ProductAnalysis>|null $productAnalysis */
    #[Optional(list: ProductAnalysis::class)]
    public ?array $productAnalysis;

    /**
     * Net weight according to shipper in kg.
     */
    #[Optional]
    public ?float $sourceQuantity;

    /**
     * Source silo.
     */
    #[Optional(nullable: true)]
    public ?string $sourceSilo;

    #[Optional(nullable: true)]
    public ?string $supplier;

    /**
     * `new ContainerOrderLine()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * ContainerOrderLine::with(weighingTicketNumber: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new ContainerOrderLine)->withWeighingTicketNumber(...)
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
     * @param list<ProductAnalysis|ProductAnalysisShape>|null $productAnalysis
     */
    public static function with(
        ?string $weighingTicketNumber,
        ?string $containerNumber = null,
        ?string $customer = null,
        ?float $destinationQuantity = null,
        ?string $destinationSilo = null,
        ?bool $finalized = null,
        ?string $lineID = null,
        ?bool $preFinalized = null,
        ?array $productAnalysis = null,
        ?float $sourceQuantity = null,
        ?string $sourceSilo = null,
        ?string $supplier = null,
    ): self {
        $self = new self;

        $self['weighingTicketNumber'] = $weighingTicketNumber;

        null !== $containerNumber && $self['containerNumber'] = $containerNumber;
        null !== $customer && $self['customer'] = $customer;
        null !== $destinationQuantity && $self['destinationQuantity'] = $destinationQuantity;
        null !== $destinationSilo && $self['destinationSilo'] = $destinationSilo;
        null !== $finalized && $self['finalized'] = $finalized;
        null !== $lineID && $self['lineID'] = $lineID;
        null !== $preFinalized && $self['preFinalized'] = $preFinalized;
        null !== $productAnalysis && $self['productAnalysis'] = $productAnalysis;
        null !== $sourceQuantity && $self['sourceQuantity'] = $sourceQuantity;
        null !== $sourceSilo && $self['sourceSilo'] = $sourceSilo;
        null !== $supplier && $self['supplier'] = $supplier;

        return $self;
    }

    /**
     * Weighing ticket number.
     */
    public function withWeighingTicketNumber(
        ?string $weighingTicketNumber
    ): self {
        $self = clone $this;
        $self['weighingTicketNumber'] = $weighingTicketNumber;

        return $self;
    }

    /**
     * Loading reference.
     */
    public function withContainerNumber(string $containerNumber): self
    {
        $self = clone $this;
        $self['containerNumber'] = $containerNumber;

        return $self;
    }

    public function withCustomer(?string $customer): self
    {
        $self = clone $this;
        $self['customer'] = $customer;

        return $self;
    }

    /**
     * Net weight as weighed at factory in kg.
     */
    public function withDestinationQuantity(float $destinationQuantity): self
    {
        $self = clone $this;
        $self['destinationQuantity'] = $destinationQuantity;

        return $self;
    }

    /**
     * destination silo.
     */
    public function withDestinationSilo(?string $destinationSilo): self
    {
        $self = clone $this;
        $self['destinationSilo'] = $destinationSilo;

        return $self;
    }

    /**
     * Finalized status of the line.
     */
    public function withFinalized(bool $finalized): self
    {
        $self = clone $this;
        $self['finalized'] = $finalized;

        return $self;
    }

    /**
     * Combination of source line and destination line separated by underscore.
     */
    public function withLineID(string $lineID): self
    {
        $self = clone $this;
        $self['lineID'] = $lineID;

        return $self;
    }

    public function withPreFinalized(bool $preFinalized): self
    {
        $self = clone $this;
        $self['preFinalized'] = $preFinalized;

        return $self;
    }

    /**
     * @param list<ProductAnalysis|ProductAnalysisShape> $productAnalysis
     */
    public function withProductAnalysis(array $productAnalysis): self
    {
        $self = clone $this;
        $self['productAnalysis'] = $productAnalysis;

        return $self;
    }

    /**
     * Net weight according to shipper in kg.
     */
    public function withSourceQuantity(float $sourceQuantity): self
    {
        $self = clone $this;
        $self['sourceQuantity'] = $sourceQuantity;

        return $self;
    }

    /**
     * Source silo.
     */
    public function withSourceSilo(?string $sourceSilo): self
    {
        $self = clone $this;
        $self['sourceSilo'] = $sourceSilo;

        return $self;
    }

    public function withSupplier(?string $supplier): self
    {
        $self = clone $this;
        $self['supplier'] = $supplier;

        return $self;
    }
}
