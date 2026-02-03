<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Stocks;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type ProductAnalysisShape = array{
 *   code?: string|null, value?: string|null
 * }
 */
final class ProductAnalysis implements BaseModel
{
    /** @use SdkModel<ProductAnalysisShape> */
    use SdkModel;

    #[Optional]
    public ?string $code;

    #[Optional]
    public ?string $value;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(?string $code = null, ?string $value = null): self
    {
        $self = new self;

        null !== $code && $self['code'] = $code;
        null !== $value && $self['value'] = $value;

        return $self;
    }

    public function withCode(string $code): self
    {
        $self = clone $this;
        $self['code'] = $code;

        return $self;
    }

    public function withValue(string $value): self
    {
        $self = clone $this;
        $self['value'] = $value;

        return $self;
    }
}
