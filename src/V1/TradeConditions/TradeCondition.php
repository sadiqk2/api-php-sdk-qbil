<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\TradeConditions;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\TradeConditions\TradeCondition\Description;

/**
 * @phpstan-import-type DescriptionShape from \QbilPhpSDK\V1\TradeConditions\TradeCondition\Description
 *
 * @phpstan-type TradeConditionShape = array{
 *   id?: string|null,
 *   code?: string|null,
 *   descriptions?: list<Description|DescriptionShape>|null,
 *   remarks?: string|null,
 *   subsidiaries?: list<string>|null,
 * }
 */
final class TradeCondition implements BaseModel
{
    /** @use SdkModel<TradeConditionShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $code;

    /** @var list<Description>|null $descriptions */
    #[Optional(list: Description::class)]
    public ?array $descriptions;

    #[Optional]
    public ?string $remarks;

    /** @var list<string>|null $subsidiaries */
    #[Optional(list: 'string')]
    public ?array $subsidiaries;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<Description|DescriptionShape>|null $descriptions
     * @param list<string>|null $subsidiaries
     */
    public static function with(
        ?string $id = null,
        ?string $code = null,
        ?array $descriptions = null,
        ?string $remarks = null,
        ?array $subsidiaries = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $code && $self['code'] = $code;
        null !== $descriptions && $self['descriptions'] = $descriptions;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $subsidiaries && $self['subsidiaries'] = $subsidiaries;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withCode(string $code): self
    {
        $self = clone $this;
        $self['code'] = $code;

        return $self;
    }

    /**
     * @param list<Description|DescriptionShape> $descriptions
     */
    public function withDescriptions(array $descriptions): self
    {
        $self = clone $this;
        $self['descriptions'] = $descriptions;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    /**
     * @param list<string> $subsidiaries
     */
    public function withSubsidiaries(array $subsidiaries): self
    {
        $self = clone $this;
        $self['subsidiaries'] = $subsidiaries;

        return $self;
    }
}
