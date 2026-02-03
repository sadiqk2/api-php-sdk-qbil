<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams\Attachment;

/**
 * Creates a OrderAttachments resource.
 *
 * @see QbilPhpSDK\Services\V1\OrdersService::createAttachment()
 *
 * @phpstan-import-type AttachmentShape from \QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams\Attachment
 *
 * @phpstan-type OrderCreateAttachmentParamsShape = array{
 *   attachments?: list<Attachment|AttachmentShape>|null
 * }
 */
final class OrderCreateAttachmentParams implements BaseModel
{
    /** @use SdkModel<OrderCreateAttachmentParamsShape> */
    use SdkModel;
    use SdkParams;

    /** @var list<Attachment>|null $attachments */
    #[Optional(list: Attachment::class)]
    public ?array $attachments;

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
    public static function with(?array $attachments = null): self
    {
        $self = new self;

        null !== $attachments && $self['attachments'] = $attachments;

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
}
