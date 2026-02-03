<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Me;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Updates the Me resource.
 *
 * @see QbilPhpSDK\Services\V1\MeService::update()
 *
 * @phpstan-type MeUpdateParamsShape = array{
 *   email?: string|null, webhookURL?: string|null
 * }
 */
final class MeUpdateParams implements BaseModel
{
    /** @use SdkModel<MeUpdateParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * Email address for receiving updates related to API changes.
     */
    #[Optional]
    public ?string $email;

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
     */
    public static function with(
        ?string $email = null,
        ?string $webhookURL = null
    ): self {
        $self = new self;

        null !== $email && $self['email'] = $email;
        null !== $webhookURL && $self['webhookURL'] = $webhookURL;

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

    public function withWebhookURL(?string $webhookURL): self
    {
        $self = clone $this;
        $self['webhookURL'] = $webhookURL;

        return $self;
    }
}
