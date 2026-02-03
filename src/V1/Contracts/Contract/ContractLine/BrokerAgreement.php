<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\Contract\ContractLine;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Contracts\Contract\ContractLine\BrokerAgreement\ContractBasis;

/**
 * @phpstan-type BrokerAgreementShape = array{
 *   broker?: string|null,
 *   contractBasis?: null|ContractBasis|value-of<ContractBasis>,
 *   contractNumber?: string|null,
 *   currencyCode?: string|null,
 *   percentage?: float|null,
 *   price?: float|null,
 *   type?: string|null,
 * }
 */
final class BrokerAgreement implements BaseModel
{
    /** @use SdkModel<BrokerAgreementShape> */
    use SdkModel;

    #[Optional]
    public ?string $broker;

    /** @var value-of<ContractBasis>|null $contractBasis */
    #[Optional(enum: ContractBasis::class)]
    public ?string $contractBasis;

    #[Optional]
    public ?string $contractNumber;

    #[Optional(nullable: true)]
    public ?string $currencyCode;

    #[Optional(nullable: true)]
    public ?float $percentage;

    #[Optional]
    public ?float $price;

    #[Optional]
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
     * @param ContractBasis|value-of<ContractBasis>|null $contractBasis
     */
    public static function with(
        ?string $broker = null,
        ContractBasis|string|null $contractBasis = null,
        ?string $contractNumber = null,
        ?string $currencyCode = null,
        ?float $percentage = null,
        ?float $price = null,
        ?string $type = null,
    ): self {
        $self = new self;

        null !== $broker && $self['broker'] = $broker;
        null !== $contractBasis && $self['contractBasis'] = $contractBasis;
        null !== $contractNumber && $self['contractNumber'] = $contractNumber;
        null !== $currencyCode && $self['currencyCode'] = $currencyCode;
        null !== $percentage && $self['percentage'] = $percentage;
        null !== $price && $self['price'] = $price;
        null !== $type && $self['type'] = $type;

        return $self;
    }

    public function withBroker(string $broker): self
    {
        $self = clone $this;
        $self['broker'] = $broker;

        return $self;
    }

    /**
     * @param ContractBasis|value-of<ContractBasis> $contractBasis
     */
    public function withContractBasis(ContractBasis|string $contractBasis): self
    {
        $self = clone $this;
        $self['contractBasis'] = $contractBasis;

        return $self;
    }

    public function withContractNumber(string $contractNumber): self
    {
        $self = clone $this;
        $self['contractNumber'] = $contractNumber;

        return $self;
    }

    public function withCurrencyCode(?string $currencyCode): self
    {
        $self = clone $this;
        $self['currencyCode'] = $currencyCode;

        return $self;
    }

    public function withPercentage(?float $percentage): self
    {
        $self = clone $this;
        $self['percentage'] = $percentage;

        return $self;
    }

    public function withPrice(float $price): self
    {
        $self = clone $this;
        $self['price'] = $price;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }
}
