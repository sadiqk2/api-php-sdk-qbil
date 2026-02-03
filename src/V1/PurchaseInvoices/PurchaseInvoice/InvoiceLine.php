<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoice;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * @phpstan-type InvoiceLineShape = array{
 *   amount?: float|null,
 *   assignedAmount?: float|null,
 *   assignedQuantity?: float|null,
 *   correctionAmount?: float|null,
 *   correctionQuantity?: float|null,
 *   creditor?: string|null,
 *   description?: string|null,
 *   exchangeRate?: float|null,
 *   quantity?: float|null,
 *   type?: string|null,
 *   vatAmount?: float|null,
 *   vatCodeAndPercentage?: string|null,
 * }
 */
final class InvoiceLine implements BaseModel
{
    /** @use SdkModel<InvoiceLineShape> */
    use SdkModel;

    #[Optional]
    public ?float $amount;

    #[Optional]
    public ?float $assignedAmount;

    #[Optional]
    public ?float $assignedQuantity;

    #[Optional]
    public ?float $correctionAmount;

    #[Optional]
    public ?float $correctionQuantity;

    #[Optional(nullable: true)]
    public ?string $creditor;

    #[Optional]
    public ?string $description;

    #[Optional]
    public ?float $exchangeRate;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?string $type;

    #[Optional]
    public ?float $vatAmount;

    /**
     * The VAT code and percentage, concatenated as a string (e.g., "code - percentage%").
     */
    #[Optional]
    public ?string $vatCodeAndPercentage;

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
        ?float $amount = null,
        ?float $assignedAmount = null,
        ?float $assignedQuantity = null,
        ?float $correctionAmount = null,
        ?float $correctionQuantity = null,
        ?string $creditor = null,
        ?string $description = null,
        ?float $exchangeRate = null,
        ?float $quantity = null,
        ?string $type = null,
        ?float $vatAmount = null,
        ?string $vatCodeAndPercentage = null,
    ): self {
        $self = new self;

        null !== $amount && $self['amount'] = $amount;
        null !== $assignedAmount && $self['assignedAmount'] = $assignedAmount;
        null !== $assignedQuantity && $self['assignedQuantity'] = $assignedQuantity;
        null !== $correctionAmount && $self['correctionAmount'] = $correctionAmount;
        null !== $correctionQuantity && $self['correctionQuantity'] = $correctionQuantity;
        null !== $creditor && $self['creditor'] = $creditor;
        null !== $description && $self['description'] = $description;
        null !== $exchangeRate && $self['exchangeRate'] = $exchangeRate;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $type && $self['type'] = $type;
        null !== $vatAmount && $self['vatAmount'] = $vatAmount;
        null !== $vatCodeAndPercentage && $self['vatCodeAndPercentage'] = $vatCodeAndPercentage;

        return $self;
    }

    public function withAmount(float $amount): self
    {
        $self = clone $this;
        $self['amount'] = $amount;

        return $self;
    }

    public function withAssignedAmount(float $assignedAmount): self
    {
        $self = clone $this;
        $self['assignedAmount'] = $assignedAmount;

        return $self;
    }

    public function withAssignedQuantity(float $assignedQuantity): self
    {
        $self = clone $this;
        $self['assignedQuantity'] = $assignedQuantity;

        return $self;
    }

    public function withCorrectionAmount(float $correctionAmount): self
    {
        $self = clone $this;
        $self['correctionAmount'] = $correctionAmount;

        return $self;
    }

    public function withCorrectionQuantity(float $correctionQuantity): self
    {
        $self = clone $this;
        $self['correctionQuantity'] = $correctionQuantity;

        return $self;
    }

    public function withCreditor(?string $creditor): self
    {
        $self = clone $this;
        $self['creditor'] = $creditor;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    public function withExchangeRate(float $exchangeRate): self
    {
        $self = clone $this;
        $self['exchangeRate'] = $exchangeRate;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    public function withType(string $type): self
    {
        $self = clone $this;
        $self['type'] = $type;

        return $self;
    }

    public function withVatAmount(float $vatAmount): self
    {
        $self = clone $this;
        $self['vatAmount'] = $vatAmount;

        return $self;
    }

    /**
     * The VAT code and percentage, concatenated as a string (e.g., "code - percentage%").
     */
    public function withVatCodeAndPercentage(string $vatCodeAndPercentage): self
    {
        $self = clone $this;
        $self['vatCodeAndPercentage'] = $vatCodeAndPercentage;

        return $self;
    }
}
