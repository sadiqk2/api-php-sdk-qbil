<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\IntraCommunicator;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\OrderDeliveryMode;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\PurchaseLineChange;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\SalesLineChange;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\TransferLineChange;
use QbilPhpSDK\V1\Orders\Transport;

/**
 * @phpstan-import-type PurchaseLineChangeShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\PurchaseLineChange
 * @phpstan-import-type SalesLineChangeShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\SalesLineChange
 * @phpstan-import-type TransferLineChangeShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\TransferLineChange
 * @phpstan-import-type TransportShape from \QbilPhpSDK\V1\Orders\Transport
 *
 * @phpstan-type OrderChangeInputShape = array{
 *   arrivalDate?: string|null,
 *   blDate?: string|null,
 *   blNumber?: string|null,
 *   departureDate?: string|null,
 *   destinationArrivalDateTime?: \DateTimeInterface|null,
 *   destinationDepartureDateTime?: \DateTimeInterface|null,
 *   intraCommunicator?: null|IntraCommunicator|value-of<IntraCommunicator>,
 *   licensePlate?: string|null,
 *   loadingDate?: string|null,
 *   loadingTime?: string|null,
 *   notes?: string|null,
 *   orderDeliveryMode?: null|OrderDeliveryMode|value-of<OrderDeliveryMode>,
 *   originArrivalDateTime?: \DateTimeInterface|null,
 *   originDepartureDateTime?: \DateTimeInterface|null,
 *   purchaseLineChanges?: list<PurchaseLineChange|PurchaseLineChangeShape>|null,
 *   salesLineChanges?: list<SalesLineChange|SalesLineChangeShape>|null,
 *   transferLineChanges?: list<TransferLineChange|TransferLineChangeShape>|null,
 *   transport?: null|Transport|TransportShape,
 *   transporterBookingNo?: string|null,
 *   unloadingDate?: string|null,
 *   unloadingTime?: string|null,
 *   unloadingTimeSchedule?: string|null,
 * }
 */
final class OrderChangeInput implements BaseModel
{
    /** @use SdkModel<OrderChangeInputShape> */
    use SdkModel;

    #[Optional(nullable: true)]
    public ?string $arrivalDate;

    #[Optional(nullable: true)]
    public ?string $blDate;

    #[Optional(nullable: true)]
    public ?string $blNumber;

    #[Optional(nullable: true)]
    public ?string $departureDate;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $destinationArrivalDateTime;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $destinationDepartureDateTime;

    /**
     * This indicates whether an order involves intra-EU (intra-community) trade.
     *
     * @var value-of<IntraCommunicator>|null $intraCommunicator
     */
    #[Optional(enum: IntraCommunicator::class, nullable: true)]
    public ?string $intraCommunicator;

    #[Optional(nullable: true)]
    public ?string $licensePlate;

    #[Optional(nullable: true)]
    public ?string $loadingDate;

    #[Optional]
    public ?string $loadingTime;

    #[Optional(nullable: true)]
    public ?string $notes;

    /** @var value-of<OrderDeliveryMode>|null $orderDeliveryMode */
    #[Optional(enum: OrderDeliveryMode::class, nullable: true)]
    public ?string $orderDeliveryMode;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $originArrivalDateTime;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $originDepartureDateTime;

    /** @var list<PurchaseLineChange>|null $purchaseLineChanges */
    #[Optional(list: PurchaseLineChange::class)]
    public ?array $purchaseLineChanges;

    /** @var list<SalesLineChange>|null $salesLineChanges */
    #[Optional(list: SalesLineChange::class)]
    public ?array $salesLineChanges;

    /** @var list<TransferLineChange>|null $transferLineChanges */
    #[Optional(list: TransferLineChange::class)]
    public ?array $transferLineChanges;

    #[Optional(nullable: true)]
    public ?Transport $transport;

    #[Optional(nullable: true)]
    public ?string $transporterBookingNo;

    #[Optional(nullable: true)]
    public ?string $unloadingDate;

    #[Optional]
    public ?string $unloadingTime;

    #[Optional]
    public ?string $unloadingTimeSchedule;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param IntraCommunicator|value-of<IntraCommunicator>|null $intraCommunicator
     * @param OrderDeliveryMode|value-of<OrderDeliveryMode>|null $orderDeliveryMode
     * @param list<PurchaseLineChange|PurchaseLineChangeShape>|null $purchaseLineChanges
     * @param list<SalesLineChange|SalesLineChangeShape>|null $salesLineChanges
     * @param list<TransferLineChange|TransferLineChangeShape>|null $transferLineChanges
     * @param Transport|TransportShape|null $transport
     */
    public static function with(
        ?string $arrivalDate = null,
        ?string $blDate = null,
        ?string $blNumber = null,
        ?string $departureDate = null,
        ?\DateTimeInterface $destinationArrivalDateTime = null,
        ?\DateTimeInterface $destinationDepartureDateTime = null,
        IntraCommunicator|string|null $intraCommunicator = null,
        ?string $licensePlate = null,
        ?string $loadingDate = null,
        ?string $loadingTime = null,
        ?string $notes = null,
        OrderDeliveryMode|string|null $orderDeliveryMode = null,
        ?\DateTimeInterface $originArrivalDateTime = null,
        ?\DateTimeInterface $originDepartureDateTime = null,
        ?array $purchaseLineChanges = null,
        ?array $salesLineChanges = null,
        ?array $transferLineChanges = null,
        Transport|array|null $transport = null,
        ?string $transporterBookingNo = null,
        ?string $unloadingDate = null,
        ?string $unloadingTime = null,
        ?string $unloadingTimeSchedule = null,
    ): self {
        $self = new self;

        null !== $arrivalDate && $self['arrivalDate'] = $arrivalDate;
        null !== $blDate && $self['blDate'] = $blDate;
        null !== $blNumber && $self['blNumber'] = $blNumber;
        null !== $departureDate && $self['departureDate'] = $departureDate;
        null !== $destinationArrivalDateTime && $self['destinationArrivalDateTime'] = $destinationArrivalDateTime;
        null !== $destinationDepartureDateTime && $self['destinationDepartureDateTime'] = $destinationDepartureDateTime;
        null !== $intraCommunicator && $self['intraCommunicator'] = $intraCommunicator;
        null !== $licensePlate && $self['licensePlate'] = $licensePlate;
        null !== $loadingDate && $self['loadingDate'] = $loadingDate;
        null !== $loadingTime && $self['loadingTime'] = $loadingTime;
        null !== $notes && $self['notes'] = $notes;
        null !== $orderDeliveryMode && $self['orderDeliveryMode'] = $orderDeliveryMode;
        null !== $originArrivalDateTime && $self['originArrivalDateTime'] = $originArrivalDateTime;
        null !== $originDepartureDateTime && $self['originDepartureDateTime'] = $originDepartureDateTime;
        null !== $purchaseLineChanges && $self['purchaseLineChanges'] = $purchaseLineChanges;
        null !== $salesLineChanges && $self['salesLineChanges'] = $salesLineChanges;
        null !== $transferLineChanges && $self['transferLineChanges'] = $transferLineChanges;
        null !== $transport && $self['transport'] = $transport;
        null !== $transporterBookingNo && $self['transporterBookingNo'] = $transporterBookingNo;
        null !== $unloadingDate && $self['unloadingDate'] = $unloadingDate;
        null !== $unloadingTime && $self['unloadingTime'] = $unloadingTime;
        null !== $unloadingTimeSchedule && $self['unloadingTimeSchedule'] = $unloadingTimeSchedule;

        return $self;
    }

    public function withArrivalDate(?string $arrivalDate): self
    {
        $self = clone $this;
        $self['arrivalDate'] = $arrivalDate;

        return $self;
    }

    public function withBlDate(?string $blDate): self
    {
        $self = clone $this;
        $self['blDate'] = $blDate;

        return $self;
    }

    public function withBlNumber(?string $blNumber): self
    {
        $self = clone $this;
        $self['blNumber'] = $blNumber;

        return $self;
    }

    public function withDepartureDate(?string $departureDate): self
    {
        $self = clone $this;
        $self['departureDate'] = $departureDate;

        return $self;
    }

    public function withDestinationArrivalDateTime(
        ?\DateTimeInterface $destinationArrivalDateTime
    ): self {
        $self = clone $this;
        $self['destinationArrivalDateTime'] = $destinationArrivalDateTime;

        return $self;
    }

    public function withDestinationDepartureDateTime(
        ?\DateTimeInterface $destinationDepartureDateTime
    ): self {
        $self = clone $this;
        $self['destinationDepartureDateTime'] = $destinationDepartureDateTime;

        return $self;
    }

    /**
     * This indicates whether an order involves intra-EU (intra-community) trade.
     *
     * @param IntraCommunicator|value-of<IntraCommunicator>|null $intraCommunicator
     */
    public function withIntraCommunicator(
        IntraCommunicator|string|null $intraCommunicator
    ): self {
        $self = clone $this;
        $self['intraCommunicator'] = $intraCommunicator;

        return $self;
    }

    public function withLicensePlate(?string $licensePlate): self
    {
        $self = clone $this;
        $self['licensePlate'] = $licensePlate;

        return $self;
    }

    public function withLoadingDate(?string $loadingDate): self
    {
        $self = clone $this;
        $self['loadingDate'] = $loadingDate;

        return $self;
    }

    public function withLoadingTime(string $loadingTime): self
    {
        $self = clone $this;
        $self['loadingTime'] = $loadingTime;

        return $self;
    }

    public function withNotes(?string $notes): self
    {
        $self = clone $this;
        $self['notes'] = $notes;

        return $self;
    }

    /**
     * @param OrderDeliveryMode|value-of<OrderDeliveryMode>|null $orderDeliveryMode
     */
    public function withOrderDeliveryMode(
        OrderDeliveryMode|string|null $orderDeliveryMode
    ): self {
        $self = clone $this;
        $self['orderDeliveryMode'] = $orderDeliveryMode;

        return $self;
    }

    public function withOriginArrivalDateTime(
        ?\DateTimeInterface $originArrivalDateTime
    ): self {
        $self = clone $this;
        $self['originArrivalDateTime'] = $originArrivalDateTime;

        return $self;
    }

    public function withOriginDepartureDateTime(
        ?\DateTimeInterface $originDepartureDateTime
    ): self {
        $self = clone $this;
        $self['originDepartureDateTime'] = $originDepartureDateTime;

        return $self;
    }

    /**
     * @param list<PurchaseLineChange|PurchaseLineChangeShape> $purchaseLineChanges
     */
    public function withPurchaseLineChanges(array $purchaseLineChanges): self
    {
        $self = clone $this;
        $self['purchaseLineChanges'] = $purchaseLineChanges;

        return $self;
    }

    /**
     * @param list<SalesLineChange|SalesLineChangeShape> $salesLineChanges
     */
    public function withSalesLineChanges(array $salesLineChanges): self
    {
        $self = clone $this;
        $self['salesLineChanges'] = $salesLineChanges;

        return $self;
    }

    /**
     * @param list<TransferLineChange|TransferLineChangeShape> $transferLineChanges
     */
    public function withTransferLineChanges(array $transferLineChanges): self
    {
        $self = clone $this;
        $self['transferLineChanges'] = $transferLineChanges;

        return $self;
    }

    /**
     * @param Transport|TransportShape|null $transport
     */
    public function withTransport(Transport|array|null $transport): self
    {
        $self = clone $this;
        $self['transport'] = $transport;

        return $self;
    }

    public function withTransporterBookingNo(
        ?string $transporterBookingNo
    ): self {
        $self = clone $this;
        $self['transporterBookingNo'] = $transporterBookingNo;

        return $self;
    }

    public function withUnloadingDate(?string $unloadingDate): self
    {
        $self = clone $this;
        $self['unloadingDate'] = $unloadingDate;

        return $self;
    }

    public function withUnloadingTime(string $unloadingTime): self
    {
        $self = clone $this;
        $self['unloadingTime'] = $unloadingTime;

        return $self;
    }

    public function withUnloadingTimeSchedule(
        string $unloadingTimeSchedule
    ): self {
        $self = clone $this;
        $self['unloadingTimeSchedule'] = $unloadingTimeSchedule;

        return $self;
    }
}
