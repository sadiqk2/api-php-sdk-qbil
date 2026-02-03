<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\ContractListParams;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type SubsidiaryShape = array{id?: list<string>|null}
 */
final class Subsidiary implements BaseModel
{
    /** @use SdkModel<SubsidiaryShape> */
    use SdkModel;

    /** @var list<string>|null $id */
    #[Optional(list: 'string')]
    public ?array $id;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $id
     */
    public static function with(?array $id = null): self
    {
        $self = new self;

        null !== $id && $self['id'] = $id;

        return $self;
    }

    /**
     * @param list<string> $id
     */
    public function withID(array $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }
}
