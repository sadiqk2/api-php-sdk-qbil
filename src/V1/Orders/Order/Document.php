<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\Order;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type DocumentShape = array{
 *   id?: string|null, link?: string|null, name?: string|null
 * }
 */
final class Document implements BaseModel
{
    /** @use SdkModel<DocumentShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /**
     * The link to download the document.
     */
    #[Optional]
    public ?string $link;

    #[Optional]
    public ?string $name;

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
        ?string $id = null,
        ?string $link = null,
        ?string $name = null
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $link && $self['link'] = $link;
        null !== $name && $self['name'] = $name;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * The link to download the document.
     */
    public function withLink(string $link): self
    {
        $self = clone $this;
        $self['link'] = $link;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }
}
