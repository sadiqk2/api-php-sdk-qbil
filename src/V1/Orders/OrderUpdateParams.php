<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\BackToBackOrderLine;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\IntraCommunicator;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\OrderDeliveryMode;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\PurchaseOrderLine;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\SalesOrderLine;
use QbilPhpSDK\V1\Orders\OrderUpdateParams\TransferOrderline;

/**
 * Partially update an Order. Only provided fields will be updated. In order to update an orderline please check the [documentation](/docs/orderline-update).
 *
 * @see QbilPhpSDK\Services\V1\OrdersService::update()
 *
 * @phpstan-import-type BackToBackOrderLineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\BackToBackOrderLine
 * @phpstan-import-type PurchaseOrderLineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\PurchaseOrderLine
 * @phpstan-import-type SalesOrderLineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\SalesOrderLine
 * @phpstan-import-type TransferOrderlineShape from \QbilPhpSDK\V1\Orders\OrderUpdateParams\TransferOrderline
 * @phpstan-import-type TransportShape from \QbilPhpSDK\V1\Orders\Transport
 *
 * @phpstan-type OrderUpdateParamsShape = array{
 *   arrivalDate?: string|null,
 *   backToBackOrderLines?: list<BackToBackOrderLine|BackToBackOrderLineShape>|null,
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
 *   orderNumberingType?: string|null,
 *   originArrivalDateTime?: \DateTimeInterface|null,
 *   originDepartureDateTime?: \DateTimeInterface|null,
 *   purchaseOrderLines?: list<PurchaseOrderLine|PurchaseOrderLineShape>|null,
 *   salesOrderLines?: list<SalesOrderLine|SalesOrderLineShape>|null,
 *   transferOrderlines?: list<TransferOrderline|TransferOrderlineShape>|null,
 *   transport?: null|Transport|TransportShape,
 *   transporterBookingNo?: string|null,
 *   unloadingDate?: string|null,
 *   unloadingTime?: string|null,
 *   unloadingTimeSchedule?: string|null,
 * }
 */
final class OrderUpdateParams implements BaseModel
{
    /** @use SdkModel<OrderUpdateParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Optional(nullable: true)]
    public ?string $arrivalDate;

    /** @var list<BackToBackOrderLine>|null $backToBackOrderLines */
    #[Optional(list: BackToBackOrderLine::class)]
    public ?array $backToBackOrderLines;

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
     * This indicates whether an order involves intra-EU (intra-community) trade and helps determine if the order should be treated as an intra-community transaction.
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
    public ?string $orderNumberingType;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $originArrivalDateTime;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $originDepartureDateTime;

    /** @var list<PurchaseOrderLine>|null $purchaseOrderLines */
    #[Optional(list: PurchaseOrderLine::class)]
    public ?array $purchaseOrderLines;

    /** @var list<SalesOrderLine>|null $salesOrderLines */
    #[Optional(list: SalesOrderLine::class)]
    public ?array $salesOrderLines;

    /** @var list<TransferOrderline>|null $transferOrderlines */
    #[Optional(list: TransferOrderline::class)]
    public ?array $transferOrderlines;

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
     * @param list<BackToBackOrderLine|BackToBackOrderLineShape>|null $backToBackOrderLines
     * @param IntraCommunicator|value-of<IntraCommunicator>|null $intraCommunicator
     * @param OrderDeliveryMode|value-of<OrderDeliveryMode>|null $orderDeliveryMode
     * @param list<PurchaseOrderLine|PurchaseOrderLineShape>|null $purchaseOrderLines
     * @param list<SalesOrderLine|SalesOrderLineShape>|null $salesOrderLines
     * @param list<TransferOrderline|TransferOrderlineShape>|null $transferOrderlines
     * @param Transport|TransportShape|null $transport
     */
    public static function with(
        ?string $arrivalDate = null,
        ?array $backToBackOrderLines = null,
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
        ?string $orderNumberingType = null,
        ?\DateTimeInterface $originArrivalDateTime = null,
        ?\DateTimeInterface $originDepartureDateTime = null,
        ?array $purchaseOrderLines = null,
        ?array $salesOrderLines = null,
        ?array $transferOrderlines = null,
        Transport|array|null $transport = null,
        ?string $transporterBookingNo = null,
        ?string $unloadingDate = null,
        ?string $unloadingTime = null,
        ?string $unloadingTimeSchedule = null,
    ): self {
        $self = new self;

        null !== $arrivalDate && $self['arrivalDate'] = $arrivalDate;
        null !== $backToBackOrderLines && $self['backToBackOrderLines'] = $backToBackOrderLines;
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
        null !== $orderNumberingType && $self['orderNumberingType'] = $orderNumberingType;
        null !== $originArrivalDateTime && $self['originArrivalDateTime'] = $originArrivalDateTime;
        null !== $originDepartureDateTime && $self['originDepartureDateTime'] = $originDepartureDateTime;
        null !== $purchaseOrderLines && $self['purchaseOrderLines'] = $purchaseOrderLines;
        null !== $salesOrderLines && $self['salesOrderLines'] = $salesOrderLines;
        null !== $transferOrderlines && $self['transferOrderlines'] = $transferOrderlines;
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

    /**
     * @param list<BackToBackOrderLine|BackToBackOrderLineShape> $backToBackOrderLines
     */
    public function withBackToBackOrderLines(array $backToBackOrderLines): self
    {
        $self = clone $this;
        $self['backToBackOrderLines'] = $backToBackOrderLines;

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
     * This indicates whether an order involves intra-EU (intra-community) trade and helps determine if the order should be treated as an intra-community transaction.
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

    public function withOrderNumberingType(?string $orderNumberingType): self
    {
        $self = clone $this;
        $self['orderNumberingType'] = $orderNumberingType;

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
     * @param list<PurchaseOrderLine|PurchaseOrderLineShape> $purchaseOrderLines
     */
    public function withPurchaseOrderLines(array $purchaseOrderLines): self
    {
        $self = clone $this;
        $self['purchaseOrderLines'] = $purchaseOrderLines;

        return $self;
    }

    /**
     * @param list<SalesOrderLine|SalesOrderLineShape> $salesOrderLines
     */
    public function withSalesOrderLines(array $salesOrderLines): self
    {
        $self = clone $this;
        $self['salesOrderLines'] = $salesOrderLines;

        return $self;
    }

    /**
     * @param list<TransferOrderline|TransferOrderlineShape> $transferOrderlines
     */
    public function withTransferOrderlines(array $transferOrderlines): self
    {
        $self = clone $this;
        $self['transferOrderlines'] = $transferOrderlines;

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
