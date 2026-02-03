<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\TradeConditions\TradeCondition;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type DescriptionShape = array{
 *   description?: string|null, language?: string|null
 * }
 */
final class Description implements BaseModel
{
    /** @use SdkModel<DescriptionShape> */
    use SdkModel;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?string $language;

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
        ?string $description = null,
        ?string $language = null
    ): self {
        $self = new self;

        null !== $description && $self['description'] = $description;
        null !== $language && $self['language'] = $language;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withLanguage(string $language): self
    {
        $self = clone $this;
        $self['language'] = $language;

        return $self;
    }
}
