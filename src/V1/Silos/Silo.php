<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Silos;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Silos\Silo\Type;

/**
 * @phpstan-type SiloShape = array{
 *   id?: string|null,
 *   address?: string|null,
 *   companyName?: string|null,
 *   isHidden?: bool|null,
 *   loadUnloadAddress?: string|null,
 *   name?: string|null,
 *   relation?: string|null,
 *   singleBatch?: bool|null,
 *   type?: null|Type|value-of<Type>,
 * }
 */
final class Silo implements BaseModel
{
    /** @use SdkModel<SiloShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional(nullable: true)]
    public ?string $address;

    #[Optional]
    public ?string $companyName;

    #[Optional]
    public ?bool $isHidden;

    #[Optional]
    public ?string $loadUnloadAddress;

    #[Optional]
    public ?string $name;

    #[Optional]
    public ?string $relation;

    #[Optional]
    public ?bool $singleBatch;

    /** @var value-of<Type>|null $type */
    #[Optional(enum: Type::class)]
    public ?string $type;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param Type|value-of<Type>|null $type
     */
    public static function with(
        ?string $id = null,
        ?string $address = null,
        ?string $companyName = null,
        ?bool $isHidden = null,
        ?string $loadUnloadAddress = null,
        ?string $name = null,
        ?string $relation = null,
        ?bool $singleBatch = null,
        Type|string|null $type = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $address && $self['address'] = $address;
        null !== $companyName && $self['companyName'] = $companyName;
        null !== $isHidden && $self['isHidden'] = $isHidden;
        null !== $loadUnloadAddress && $self['loadUnloadAddress'] = $loadUnloadAddress;
        null !== $name && $self['name'] = $name;
        null !== $relation && $self['relation'] = $relation;
        null !== $singleBatch && $self['singleBatch'] = $singleBatch;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAddress(?string $address): self
    {
        $self = clone $this;
        $self['address'] = $address;

        return $self;
    }

    public function withCompanyName(string $companyName): self
    {
        $self = clone $this;
        $self['companyName'] = $companyName;

        return $self;
    }

    public function withIsHidden(bool $isHidden): self
    {
        $self = clone $this;
        $self['isHidden'] = $isHidden;

        return $self;
    }

    public function withLoadUnloadAddress(string $loadUnloadAddress): self
    {
        $self = clone $this;
        $self['loadUnloadAddress'] = $loadUnloadAddress;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    public function withRelation(string $relation): self
    {
        $self = clone $this;
        $self['relation'] = $relation;

        return $self;
    }

    public function withSingleBatch(bool $singleBatch): self
    {
        $self = clone $this;
        $self['singleBatch'] = $singleBatch;

        return $self;
    }

    /**
     * @param Type|value-of<Type> $type
     */
    public function withType(Type|string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
