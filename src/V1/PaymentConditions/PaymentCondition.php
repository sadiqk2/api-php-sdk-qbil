<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\PaymentConditions;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\PaymentConditions\PaymentCondition\Description;

/**
 * @phpstan-import-type DescriptionShape from \QbilPhpSDK\V1\PaymentConditions\PaymentCondition\Description
 *
 * @phpstan-type PaymentConditionShape = array{
 *   id?: string|null,
 *   code?: string|null,
 *   creditRisk?: string|null,
 *   descriptions?: list<Description|DescriptionShape>|null,
 *   dueAmountInDays?: int|null,
 *   isActive?: bool|null,
 *   paymentMethod?: string|null,
 *   percentageInAdvance?: string|null,
 *   remarks?: string|null,
 * }
 */
final class PaymentCondition implements BaseModel
{
    /** @use SdkModel<PaymentConditionShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $code;

    #[Optional]
    public ?string $creditRisk;

    /** @var list<Description>|null $descriptions */
    #[Optional(list: Description::class)]
    public ?array $descriptions;

    #[Optional]
    public ?int $dueAmountInDays;

    #[Optional]
    public ?bool $isActive;

    #[Optional]
    public ?string $paymentMethod;

    #[Optional]
    public ?string $percentageInAdvance;

    #[Optional]
    public ?string $remarks;

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
        ?string $creditRisk = null,
        ?array $descriptions = null,
        ?int $dueAmountInDays = null,
        ?bool $isActive = null,
        ?string $paymentMethod = null,
        ?string $percentageInAdvance = null,
        ?string $remarks = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $code && $self['code'] = $code;
        null !== $creditRisk && $self['creditRisk'] = $creditRisk;
        null !== $descriptions && $self['descriptions'] = $descriptions;
        null !== $dueAmountInDays && $self['dueAmountInDays'] = $dueAmountInDays;
        null !== $isActive && $self['isActive'] = $isActive;
        null !== $paymentMethod && $self['paymentMethod'] = $paymentMethod;
        null !== $percentageInAdvance && $self['percentageInAdvance'] = $percentageInAdvance;
        null !== $remarks && $self['remarks'] = $remarks;

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

    public function withCreditRisk(string $creditRisk): self
    {
        $self = clone $this;
        $self['creditRisk'] = $creditRisk;

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

    public function withDueAmountInDays(int $dueAmountInDays): self
    {
        $self = clone $this;
        $self['dueAmountInDays'] = $dueAmountInDays;

        return $self;
    }

    public function withIsActive(bool $isActive): self
    {
        $self = clone $this;
        $self['isActive'] = $isActive;

        return $self;
    }

    public function withPaymentMethod(string $paymentMethod): self
    {
        $self = clone $this;
        $self['paymentMethod'] = $paymentMethod;

        return $self;
    }

    public function withPercentageInAdvance(string $percentageInAdvance): self
    {
        $self = clone $this;
        $self['percentageInAdvance'] = $percentageInAdvance;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }
}
