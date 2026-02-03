<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeRequest\Status;

/**
 * @phpstan-import-type OrderChangeInputShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput
 *
 * @phpstan-type OrderChangeRequestShape = array{
 *   id?: string|null,
 *   createdAt?: \DateTimeInterface|null,
 *   createdBy?: string|null,
 *   order?: string|null,
 *   orderDisplayNumber?: string|null,
 *   orderID?: int|null,
 *   processedAt?: \DateTimeInterface|null,
 *   processedBy?: string|null,
 *   proposedChanges?: null|OrderChangeInput|OrderChangeInputShape,
 *   rejectionReason?: string|null,
 *   remarks?: string|null,
 *   sourceReference?: string|null,
 *   status?: null|Status|value-of<Status>,
 * }
 */
final class OrderChangeRequest implements BaseModel
{
    /** @use SdkModel<OrderChangeRequestShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?\DateTimeInterface $createdAt;

    #[Optional]
    public ?string $createdBy;

    #[Optional]
    public ?string $order;

    #[Optional]
    public ?string $orderDisplayNumber;

    #[Optional('orderId')]
    public ?int $orderID;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $processedAt;

    #[Optional(nullable: true)]
    public ?string $processedBy;

    #[Optional]
    public ?OrderChangeInput $proposedChanges;

    #[Optional(nullable: true)]
    public ?string $rejectionReason;

    #[Optional(nullable: true)]
    public ?string $remarks;

    #[Optional(nullable: true)]
    public ?string $sourceReference;

    /** @var value-of<Status>|null $status */
    #[Optional(enum: Status::class)]
    public ?string $status;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param OrderChangeInput|OrderChangeInputShape|null $proposedChanges
     * @param Status|value-of<Status>|null $status
     */
    public static function with(
        ?string $id = null,
        ?\DateTimeInterface $createdAt = null,
        ?string $createdBy = null,
        ?string $order = null,
        ?string $orderDisplayNumber = null,
        ?int $orderID = null,
        ?\DateTimeInterface $processedAt = null,
        ?string $processedBy = null,
        OrderChangeInput|array|null $proposedChanges = null,
        ?string $rejectionReason = null,
        ?string $remarks = null,
        ?string $sourceReference = null,
        Status|string|null $status = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $createdAt && $self['createdAt'] = $createdAt;
        null !== $createdBy && $self['createdBy'] = $createdBy;
        null !== $order && $self['order'] = $order;
        null !== $orderDisplayNumber && $self['orderDisplayNumber'] = $orderDisplayNumber;
        null !== $orderID && $self['orderID'] = $orderID;
        null !== $processedAt && $self['processedAt'] = $processedAt;
        null !== $processedBy && $self['processedBy'] = $processedBy;
        null !== $proposedChanges && $self['proposedChanges'] = $proposedChanges;
        null !== $rejectionReason && $self['rejectionReason'] = $rejectionReason;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $sourceReference && $self['sourceReference'] = $sourceReference;
        null !== $status && $self['status'] = $status;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withCreatedAt(\DateTimeInterface $createdAt): self
    {
        $self = clone $this;
        $self['createdAt'] = $createdAt;

        return $self;
    }

    public function withCreatedBy(string $createdBy): self
    {
        $self = clone $this;
        $self['createdBy'] = $createdBy;

        return $self;
    }

    public function withOrder(string $order): self
    {
        $self = clone $this;
        $self['order'] = $order;

        return $self;
    }

    public function withOrderDisplayNumber(string $orderDisplayNumber): self
    {
        $self = clone $this;
        $self['orderDisplayNumber'] = $orderDisplayNumber;

        return $self;
    }

    public function withOrderID(int $orderID): self
    {
        $self = clone $this;
        $self['orderID'] = $orderID;

        return $self;
    }

    public function withProcessedAt(?\DateTimeInterface $processedAt): self
    {
        $self = clone $this;
        $self['processedAt'] = $processedAt;

        return $self;
    }

    public function withProcessedBy(?string $processedBy): self
    {
        $self = clone $this;
        $self['processedBy'] = $processedBy;

        return $self;
    }

    /**
     * @param OrderChangeInput|OrderChangeInputShape $proposedChanges
     */
    public function withProposedChanges(
        OrderChangeInput|array $proposedChanges
    ): self {
        $self = clone $this;
        $self['proposedChanges'] = $proposedChanges;

        return $self;
    }

    public function withRejectionReason(?string $rejectionReason): self
    {
        $self = clone $this;
        $self['rejectionReason'] = $rejectionReason;

        return $self;
    }

    public function withRemarks(?string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withSourceReference(?string $sourceReference): self
    {
        $self = clone $this;
        $self['sourceReference'] = $sourceReference;

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
}
