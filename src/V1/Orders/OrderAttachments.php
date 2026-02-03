<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\OrderAttachments\Attachment;

/**
 * @phpstan-import-type AttachmentShape from \QbilPhpSDK\V1\Orders\OrderAttachments\Attachment
 *
 * @phpstan-type OrderAttachmentsShape = array{
 *   id?: string|null,
 *   attachments?: list<Attachment|AttachmentShape>|null,
 *   orderDisplayNumber?: string|null,
 * }
 */
final class OrderAttachments implements BaseModel
{
    /** @use SdkModel<OrderAttachmentsShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /** @var list<Attachment>|null $attachments */
    #[Optional(list: Attachment::class)]
    public ?array $attachments;

    #[Optional]
    public ?string $orderDisplayNumber;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Attachment|AttachmentShape>|null $attachments
     */
    public static function with(
        ?string $id = null,
        ?array $attachments = null,
        ?string $orderDisplayNumber = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $attachments && $self['attachments'] = $attachments;
        null !== $orderDisplayNumber && $self['orderDisplayNumber'] = $orderDisplayNumber;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * @param list<Attachment|AttachmentShape> $attachments
     */
    public function withAttachments(array $attachments): self
    {
        $self = clone $this;
        $self['attachments'] = $attachments;

        return $self;
    }

    public function withOrderDisplayNumber(string $orderDisplayNumber): self
    {
        $self = clone $this;
        $self['orderDisplayNumber'] = $orderDisplayNumber;

        return $self;
    }
}
