<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Orders\Order\Document;
use QbilPhpSDK\V1\Orders\Order\IntraCommunicator;
use QbilPhpSDK\V1\Orders\Order\Status;
use QbilPhpSDK\V1\Orders\Order\TransportOrder;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type DocumentShape from \QbilPhpSDK\V1\Orders\Order\Document
 * @phpstan-import-type TransportOrderShape from \QbilPhpSDK\V1\Orders\Order\TransportOrder
 *
 * @phpstan-type OrderShape = array{
 *   id?: string|null,
 *   arrivalDate?: string|null,
 *   blDate?: string|null,
 *   blNumber?: string|null,
 *   createdAt?: \DateTimeInterface|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   departureDate?: string|null,
 *   destinationArrivalDateTime?: \DateTimeInterface|null,
 *   destinationDepartureDateTime?: \DateTimeInterface|null,
 *   displayNumber?: string|null,
 *   documents?: list<Document|DocumentShape>|null,
 *   intraCommunicator?: null|IntraCommunicator|value-of<IntraCommunicator>,
 *   lastUpdatedAt?: \DateTimeInterface|null,
 *   licensePlate?: string|null,
 *   lines?: list<string>|null,
 *   loadingDate?: string|null,
 *   notes?: string|null,
 *   orderDate?: string|null,
 *   orderDeliveryMode?: string|null,
 *   originArrivalDateTime?: \DateTimeInterface|null,
 *   originDepartureDateTime?: \DateTimeInterface|null,
 *   status?: null|Status|value-of<Status>,
 *   subsidiary?: string|null,
 *   transporterBookingNo?: string|null,
 *   transportOrders?: list<TransportOrder|TransportOrderShape>|null,
 *   type?: string|null,
 *   unloadingDate?: string|null,
 *   unloadingTime?: string|null,
 *   unloadingTimeSchedule?: string|null,
 *   usersResponsible?: list<string>|null,
 * }
 */
final class Order implements BaseModel
{
    /** @use SdkModel<OrderShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional(nullable: true)]
    public ?string $arrivalDate;

    #[Optional(nullable: true)]
    public ?string $blDate;

    #[Optional]
    public ?string $blNumber;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $createdAt;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional(nullable: true)]
    public ?string $departureDate;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $destinationArrivalDateTime;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $destinationDepartureDateTime;

    #[Optional]
    public ?string $displayNumber;

    /** @var list<Document>|null $documents */
    #[Optional(list: Document::class)]
    public ?array $documents;

    /**
     * This indicates whether an order involves intra-EU (intra-community) trade and helps determine if the order should be treated as an intra-community transaction.
     *
     * @var value-of<IntraCommunicator>|null $intraCommunicator
     */
    #[Optional(enum: IntraCommunicator::class)]
    public ?string $intraCommunicator;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $lastUpdatedAt;

    #[Optional]
    public ?string $licensePlate;

    /** @var list<string>|null $lines */
    #[Optional(list: 'string')]
    public ?array $lines;

    #[Optional(nullable: true)]
    public ?string $loadingDate;

    #[Optional]
    public ?string $notes;

    #[Optional(nullable: true)]
    public ?string $orderDate;

    #[Optional]
    public ?string $orderDeliveryMode;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $originArrivalDateTime;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $originDepartureDateTime;

    /** @var value-of<Status>|null $status */
    #[Optional(enum: Status::class)]
    public ?string $status;

    #[Optional]
    public ?string $subsidiary;

    #[Optional]
    public ?string $transporterBookingNo;

    /** @var list<TransportOrder>|null $transportOrders */
    #[Optional(list: TransportOrder::class)]
    public ?array $transportOrders;

    #[Optional]
    public ?string $type;

    #[Optional(nullable: true)]
    public ?string $unloadingDate;

    #[Optional]
    public ?string $unloadingTime;

    #[Optional]
    public ?string $unloadingTimeSchedule;

    /**
     * Users responsible for this order (logistic employees).
     *
     * @var list<string>|null $usersResponsible
     */
    #[Optional(list: 'string')]
    public ?array $usersResponsible;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<CustomField|CustomFieldShape>|null $customFields
     * @param list<Document|DocumentShape>|null $documents
     * @param IntraCommunicator|value-of<IntraCommunicator>|null $intraCommunicator
     * @param list<string>|null $lines
     * @param Status|value-of<Status>|null $status
     * @param list<TransportOrder|TransportOrderShape>|null $transportOrders
     * @param list<string>|null $usersResponsible
     */
    public static function with(
        ?string $id = null,
        ?string $arrivalDate = null,
        ?string $blDate = null,
        ?string $blNumber = null,
        ?\DateTimeInterface $createdAt = null,
        ?array $customFields = null,
        ?string $departureDate = null,
        ?\DateTimeInterface $destinationArrivalDateTime = null,
        ?\DateTimeInterface $destinationDepartureDateTime = null,
        ?string $displayNumber = null,
        ?array $documents = null,
        IntraCommunicator|string|null $intraCommunicator = null,
        ?\DateTimeInterface $lastUpdatedAt = null,
        ?string $licensePlate = null,
        ?array $lines = null,
        ?string $loadingDate = null,
        ?string $notes = null,
        ?string $orderDate = null,
        ?string $orderDeliveryMode = null,
        ?\DateTimeInterface $originArrivalDateTime = null,
        ?\DateTimeInterface $originDepartureDateTime = null,
        Status|string|null $status = null,
        ?string $subsidiary = null,
        ?string $transporterBookingNo = null,
        ?array $transportOrders = null,
        ?string $type = null,
        ?string $unloadingDate = null,
        ?string $unloadingTime = null,
        ?string $unloadingTimeSchedule = null,
        ?array $usersResponsible = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $arrivalDate && $self['arrivalDate'] = $arrivalDate;
        null !== $blDate && $self['blDate'] = $blDate;
        null !== $blNumber && $self['blNumber'] = $blNumber;
        null !== $createdAt && $self['createdAt'] = $createdAt;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $departureDate && $self['departureDate'] = $departureDate;
        null !== $destinationArrivalDateTime && $self['destinationArrivalDateTime'] = $destinationArrivalDateTime;
        null !== $destinationDepartureDateTime && $self['destinationDepartureDateTime'] = $destinationDepartureDateTime;
        null !== $displayNumber && $self['displayNumber'] = $displayNumber;
        null !== $documents && $self['documents'] = $documents;
        null !== $intraCommunicator && $self['intraCommunicator'] = $intraCommunicator;
        null !== $lastUpdatedAt && $self['lastUpdatedAt'] = $lastUpdatedAt;
        null !== $licensePlate && $self['licensePlate'] = $licensePlate;
        null !== $lines && $self['lines'] = $lines;
        null !== $loadingDate && $self['loadingDate'] = $loadingDate;
        null !== $notes && $self['notes'] = $notes;
        null !== $orderDate && $self['orderDate'] = $orderDate;
        null !== $orderDeliveryMode && $self['orderDeliveryMode'] = $orderDeliveryMode;
        null !== $originArrivalDateTime && $self['originArrivalDateTime'] = $originArrivalDateTime;
        null !== $originDepartureDateTime && $self['originDepartureDateTime'] = $originDepartureDateTime;
        null !== $status && $self['status'] = $status;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;
        null !== $transporterBookingNo && $self['transporterBookingNo'] = $transporterBookingNo;
        null !== $transportOrders && $self['transportOrders'] = $transportOrders;
        null !== $type && $self['type'] = $type;
        null !== $unloadingDate && $self['unloadingDate'] = $unloadingDate;
        null !== $unloadingTime && $self['unloadingTime'] = $unloadingTime;
        null !== $unloadingTimeSchedule && $self['unloadingTimeSchedule'] = $unloadingTimeSchedule;
        null !== $usersResponsible && $self['usersResponsible'] = $usersResponsible;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

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

    public function withBlNumber(string $blNumber): self
    {
        $self = clone $this;
        $self['blNumber'] = $blNumber;

        return $self;
    }

    public function withCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $self = clone $this;
        $self['createdAt'] = $createdAt;

        return $self;
    }

    /**
     * @param list<CustomField|CustomFieldShape> $customFields
     */
    public function withCustomFields(array $customFields): self
    {
        $self = clone $this;
        $self['customFields'] = $customFields;

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

    public function withDisplayNumber(string $displayNumber): self
    {
        $self = clone $this;
        $self['displayNumber'] = $displayNumber;

        return $self;
    }

    /**
     * @param list<Document|DocumentShape> $documents
     */
    public function withDocuments(array $documents): self
    {
        $self = clone $this;
        $self['documents'] = $documents;

        return $self;
    }

    /**
     * This indicates whether an order involves intra-EU (intra-community) trade and helps determine if the order should be treated as an intra-community transaction.
     *
     * @param IntraCommunicator|value-of<IntraCommunicator> $intraCommunicator
     */
    public function withIntraCommunicator(
        IntraCommunicator|string $intraCommunicator
    ): self {
        $self = clone $this;
        $self['intraCommunicator'] = $intraCommunicator;

        return $self;
    }

    public function withLastUpdatedAt(?\DateTimeInterface $lastUpdatedAt): self
    {
        $self = clone $this;
        $self['lastUpdatedAt'] = $lastUpdatedAt;

        return $self;
    }

    public function withLicensePlate(string $licensePlate): self
    {
        $self = clone $this;
        $self['licensePlate'] = $licensePlate;

        return $self;
    }

    /**
     * @param list<string> $lines
     */
    public function withLines(array $lines): self
    {
        $self = clone $this;
        $self['lines'] = $lines;

        return $self;
    }

    public function withLoadingDate(?string $loadingDate): self
    {
        $self = clone $this;
        $self['loadingDate'] = $loadingDate;

        return $self;
    }

    public function withNotes(string $notes): self
    {
        $self = clone $this;
        $self['notes'] = $notes;

        return $self;
    }

    public function withOrderDate(?string $orderDate): self
    {
        $self = clone $this;
        $self['orderDate'] = $orderDate;

        return $self;
    }

    public function withOrderDeliveryMode(string $orderDeliveryMode): self
    {
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
     * @param Status|value-of<Status> $status
     */
    public function withStatus(Status|string $status): self
    {
        $self = clone $this;
        $self['status'] = $status;

        return $self;
    }

    public function withSubsidiary(string $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }

    public function withTransporterBookingNo(string $transporterBookingNo): self
    {
        $self = clone $this;
        $self['transporterBookingNo'] = $transporterBookingNo;

        return $self;
    }

    /**
     * @param list<TransportOrder|TransportOrderShape> $transportOrders
     */
    public function withTransportOrders(array $transportOrders): self
    {
        $self = clone $this;
        $self['transportOrders'] = $transportOrders;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

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

    /**
     * Users responsible for this order (logistic employees).
     *
     * @param list<string> $usersResponsible
     */
    public function withUsersResponsible(array $usersResponsible): self
    {
        $self = clone $this;
        $self['usersResponsible'] = $usersResponsible;

        return $self;
    }
}
