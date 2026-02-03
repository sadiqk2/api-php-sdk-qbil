<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Pallets;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Pallets\Pallet\Description;

/**
 * @phpstan-import-type DescriptionShape from \QbilPhpSDK\V1\Pallets\Pallet\Description
 *
 * @phpstan-type PalletShape = array{
 *   id?: string|null,
 *   code?: string|null,
 *   descriptions?: list<Description|DescriptionShape>|null,
 *   weight?: float|null,
 * }
 */
final class Pallet implements BaseModel
{
    /** @use SdkModel<PalletShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $code;

    /** @var list<Description>|null $descriptions */
    #[Optional(list: Description::class)]
    public ?array $descriptions;

    #[Optional]
    public ?float $weight;

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
     */
    public static function with(
        ?string $id = null,
        ?string $code = null,
        ?array $descriptions = null,
        ?float $weight = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $code && $self['code'] = $code;
        null !== $descriptions && $self['descriptions'] = $descriptions;
        null !== $weight && $self['weight'] = $weight;

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

    public function withWeight(float $weight): self
    {
        $self = clone $this;
        $self['weight'] = $weight;

        return $self;
    }
}
