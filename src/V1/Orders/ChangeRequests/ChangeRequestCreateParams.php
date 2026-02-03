<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Create a new order change request for a given order.
 *
 * @see QbilPhpSDK\Services\V1\Orders\ChangeRequestsService::create()
 *
 * @phpstan-import-type OrderChangeInputShape from \QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput
 *
 * @phpstan-type ChangeRequestCreateParamsShape = array{
 *   proposedChanges: OrderChangeInput|OrderChangeInputShape,
 *   remarks?: string|null,
 *   sourceReference?: string|null,
 * }
 */
final class ChangeRequestCreateParams implements BaseModel
{
    /** @use SdkModel<ChangeRequestCreateParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Required]
    public OrderChangeInput $proposedChanges;

    #[Optional(nullable: true)]
    public ?string $remarks;

    #[Optional(nullable: true)]
    public ?string $sourceReference;

    /**
     * `new ChangeRequestCreateParams()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * ChangeRequestCreateParams::with(proposedChanges: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new ChangeRequestCreateParams)->withProposedChanges(...)
     * ```
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param OrderChangeInput|OrderChangeInputShape $proposedChanges
     */
    public static function with(
        OrderChangeInput|array $proposedChanges,
        ?string $remarks = null,
        ?string $sourceReference = null,
    ): self {
        $self = new self;

        $self['proposedChanges'] = $proposedChanges;

        null !== $remarks && $self['remarks'] = $remarks;
        null !== $sourceReference && $self['sourceReference'] = $sourceReference;

        return $self;
    }

    /**
     * @param OrderChangeInput|OrderChangeInputShape $proposedChanges
     */
    public function withProposedChanges(
        OrderChangeInput|array $proposedChanges
    ): self {
        $self = clone $this;
        $self['proposedChanges'] = $proposedChanges;

        return $self;
    }

    public function withRemarks(?string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withSourceReference(?string $sourceReference): self
    {
        $self = clone $this;
        $self['sourceReference'] = $sourceReference;

        return $self;
    }
}
