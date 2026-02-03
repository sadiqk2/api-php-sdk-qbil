<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Me;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Me\Me\Permission;
use QbilPhpSDK\V1\Me\Me\Topic;

/**
 * @phpstan-type MeShape = array{
 *   id?: string|null,
 *   allowedSubsidiaries?: list<string>|null,
 *   allowedTransporters?: list<int>|null,
 *   allowedWarehouses?: list<string>|null,
 *   email?: string|null,
 *   expiresAt?: \DateTimeInterface|null,
 *   name?: string|null,
 *   permissions?: list<Permission|value-of<Permission>>|null,
 *   topics?: list<Topic|value-of<Topic>>|null,
 *   webhookURL?: string|null,
 * }
 */
final class Me implements BaseModel
{
    /** @use SdkModel<MeShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /** @var list<string>|null $allowedSubsidiaries */
    #[Optional(list: 'string')]
    public ?array $allowedSubsidiaries;

    /** @var list<int>|null $allowedTransporters */
    #[Optional(list: 'int')]
    public ?array $allowedTransporters;

    /** @var list<string>|null $allowedWarehouses */
    #[Optional(list: 'string')]
    public ?array $allowedWarehouses;

    /**
     * Email address for receiving updates related to API changes.
     */
    #[Optional]
    public ?string $email;

    #[Optional]
    public ?\DateTimeInterface $expiresAt;

    #[Optional]
    public ?string $name;

    /** @var list<value-of<Permission>>|null $permissions */
    #[Optional(list: Permission::class)]
    public ?array $permissions;

    /** @var list<value-of<Topic>>|null $topics */
    #[Optional(list: Topic::class)]
    public ?array $topics;

    #[Optional('webhookUrl', nullable: true)]
    public ?string $webhookURL;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $allowedSubsidiaries
     * @param list<int>|null $allowedTransporters
     * @param list<string>|null $allowedWarehouses
     * @param list<Permission|value-of<Permission>>|null $permissions
     * @param list<Topic|value-of<Topic>>|null $topics
     */
    public static function with(
        ?string $id = null,
        ?array $allowedSubsidiaries = null,
        ?array $allowedTransporters = null,
        ?array $allowedWarehouses = null,
        ?string $email = null,
        ?\DateTimeInterface $expiresAt = null,
        ?string $name = null,
        ?array $permissions = null,
        ?array $topics = null,
        ?string $webhookURL = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $allowedSubsidiaries && $self['allowedSubsidiaries'] = $allowedSubsidiaries;
        null !== $allowedTransporters && $self['allowedTransporters'] = $allowedTransporters;
        null !== $allowedWarehouses && $self['allowedWarehouses'] = $allowedWarehouses;
        null !== $email && $self['email'] = $email;
        null !== $expiresAt && $self['expiresAt'] = $expiresAt;
        null !== $name && $self['name'] = $name;
        null !== $permissions && $self['permissions'] = $permissions;
        null !== $topics && $self['topics'] = $topics;
        null !== $webhookURL && $self['webhookURL'] = $webhookURL;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * @param list<string> $allowedSubsidiaries
     */
    public function withAllowedSubsidiaries(array $allowedSubsidiaries): self
    {
        $self = clone $this;
        $self['allowedSubsidiaries'] = $allowedSubsidiaries;

        return $self;
    }

    /**
     * @param list<int> $allowedTransporters
     */
    public function withAllowedTransporters(array $allowedTransporters): self
    {
        $self = clone $this;
        $self['allowedTransporters'] = $allowedTransporters;

        return $self;
    }

    /**
     * @param list<string> $allowedWarehouses
     */
    public function withAllowedWarehouses(array $allowedWarehouses): self
    {
        $self = clone $this;
        $self['allowedWarehouses'] = $allowedWarehouses;

        return $self;
    }

    /**
     * Email address for receiving updates related to API changes.
     */
    public function withEmail(string $email): self
    {
        $self = clone $this;
        $self['email'] = $email;

        return $self;
    }

    public function withExpiresAt(\DateTimeInterface $expiresAt): self
    {
        $self = clone $this;
        $self['expiresAt'] = $expiresAt;

        return $self;
    }

    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * @param list<Permission|value-of<Permission>> $permissions
     */
    public function withPermissions(array $permissions): self
    {
        $self = clone $this;
        $self['permissions'] = $permissions;

        return $self;
    }

    /**
     * @param list<Topic|value-of<Topic>> $topics
     */
    public function withTopics(array $topics): self
    {
        $self = clone $this;
        $self['topics'] = $topics;

        return $self;
    }

    public function withWebhookURL(?string $webhookURL): self
    {
        $self = clone $this;
        $self['webhookURL'] = $webhookURL;

        return $self;
    }
}
