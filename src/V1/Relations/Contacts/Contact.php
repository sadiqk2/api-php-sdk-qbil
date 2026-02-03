<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Relations\Contacts;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type ContactShape = array{
 *   id?: string|null,
 *   active?: bool|null,
 *   associatedRelation?: string|null,
 *   email?: string|null,
 *   fax?: string|null,
 *   firstName?: string|null,
 *   function?: string|null,
 *   gender?: string|null,
 *   initials?: string|null,
 *   inserts?: string|null,
 *   name?: string|null,
 *   phone?: string|null,
 * }
 */
final class Contact implements BaseModel
{
    /** @use SdkModel<ContactShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?bool $active;

    #[Optional]
    public ?string $associatedRelation;

    #[Optional(nullable: true)]
    public ?string $email;

    #[Optional]
    public ?string $fax;

    #[Optional]
    public ?string $firstName;

    #[Optional]
    public ?string $function;

    #[Optional]
    public ?string $gender;

    #[Optional]
    public ?string $initials;

    #[Optional]
    public ?string $inserts;

    #[Optional]
    public ?string $name;

    #[Optional]
    public ?string $phone;

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
        ?bool $active = null,
        ?string $associatedRelation = null,
        ?string $email = null,
        ?string $fax = null,
        ?string $firstName = null,
        ?string $function = null,
        ?string $gender = null,
        ?string $initials = null,
        ?string $inserts = null,
        ?string $name = null,
        ?string $phone = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $active && $self['active'] = $active;
        null !== $associatedRelation && $self['associatedRelation'] = $associatedRelation;
        null !== $email && $self['email'] = $email;
        null !== $fax && $self['fax'] = $fax;
        null !== $firstName && $self['firstName'] = $firstName;
        null !== $function && $self['function'] = $function;
        null !== $gender && $self['gender'] = $gender;
        null !== $initials && $self['initials'] = $initials;
        null !== $inserts && $self['inserts'] = $inserts;
        null !== $name && $self['name'] = $name;
        null !== $phone && $self['phone'] = $phone;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withActive(bool $active): self
    {
        $self = clone $this;
        $self['active'] = $active;

        return $self;
    }

    public function withAssociatedRelation(string $associatedRelation): self
    {
        $self = clone $this;
        $self['associatedRelation'] = $associatedRelation;

        return $self;
    }

    public function withEmail(?string $email): self
    {
        $self = clone $this;
        $self['email'] = $email;

        return $self;
    }

    public function withFax(string $fax): self
    {
        $self = clone $this;
        $self['fax'] = $fax;

        return $self;
    }

    public function withFirstName(string $firstName): self
    {
        $self = clone $this;
        $self['firstName'] = $firstName;

        return $self;
    }

    public function withFunction(string $function): self
    {
        $self = clone $this;
        $self['function'] = $function;

        return $self;
    }

    public function withGender(string $gender): self
    {
        $self = clone $this;
        $self['gender'] = $gender;

        return $self;
    }

    public function withInitials(string $initials): self
    {
        $self = clone $this;
        $self['initials'] = $initials;

        return $self;
    }

    public function withInserts(string $inserts): self
    {
        $self = clone $this;
        $self['inserts'] = $inserts;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    public function withPhone(string $phone): self
    {
        $self = clone $this;
        $self['phone'] = $phone;

        return $self;
    }
}
