<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\OrderCreateAttachmentParams;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type AttachmentShape = array{
 *   file: string, filename: string, size?: int|null
 * }
 */
final class Attachment implements BaseModel
{
    /** @use SdkModel<AttachmentShape> */
    use SdkModel;

    /**
     * Base64 encoded file data.
     */
    #[Required]
    public string $file;

    #[Required]
    public string $filename;

    #[Optional]
    public ?int $size;

    /**
     * `new Attachment()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * Attachment::with(file: ..., filename: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new Attachment)->withFile(...)->withFilename(...)
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
     */
    public static function with(
        string $file,
        string $filename,
        ?int $size = null
    ): self {
        $self = new self;

        $self['file'] = $file;
        $self['filename'] = $filename;

        null !== $size && $self['size'] = $size;

        return $self;
    }

    /**
     * Base64 encoded file data.
     */
    public function withFile(string $file): self
    {
        $self = clone $this;
        $self['file'] = $file;

        return $self;
    }

    public function withFilename(string $filename): self
    {
        $self = clone $this;
        $self['filename'] = $filename;

        return $self;
    }

    public function withSize(int $size): self
    {
        $self = clone $this;
        $self['size'] = $size;

        return $self;
    }
}
