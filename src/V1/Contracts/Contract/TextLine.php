<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\Contract;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type TextLineShape = array{code?: string|null, remarks?: string|null}
 */
final class TextLine implements BaseModel
{
    /** @use SdkModel<TextLineShape> */
    use SdkModel;

    #[Optional]
    public ?string $code;

    #[Optional]
    public ?string $remarks;

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
        ?string $code = null,
        ?string $remarks = null
    ): self {
        $self = new self;

        null !== $code && $self['code'] = $code;
        null !== $remarks && $self['remarks'] = $remarks;

        return $self;
    }

    public function withCode(string $code): self
    {
        $self = clone $this;
        $self['code'] = $code;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }
}
