<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\PurchaseInvoices;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoice\InvoiceLine;

/**
 * @phpstan-import-type InvoiceLineShape from \QbilPhpSDK\V1\PurchaseInvoices\PurchaseInvoice\InvoiceLine
 *
 * @phpstan-type PurchaseInvoiceShape = array{
 *   id?: string|null,
 *   amount?: float|null,
 *   createdBy?: string|null,
 *   createdOn?: \DateTimeInterface|null,
 *   creditor?: string|null,
 *   creditorInvoiceNumber?: string|null,
 *   currency?: string|null,
 *   displayNumber?: string|null,
 *   dueDate?: string|null,
 *   grossAmount?: float|null,
 *   invoiceDate?: string|null,
 *   invoiceLines?: list<InvoiceLine|InvoiceLineShape>|null,
 *   lastUpdatedAt?: \DateTimeInterface|null,
 *   paidAmount?: float|null,
 *   paymentDate?: string|null,
 *   remarks?: string|null,
 *   subsidiary?: string|null,
 *   theirVatRegistrationNumber?: string|null,
 *   totalAmount?: float|null,
 *   vatAmount?: float|null,
 *   vatCodeAndPercentage?: string|null,
 * }
 */
final class PurchaseInvoice implements BaseModel
{
    /** @use SdkModel<PurchaseInvoiceShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?float $amount;

    #[Optional]
    public ?string $createdBy;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $createdOn;

    #[Optional]
    public ?string $creditor;

    #[Optional]
    public ?string $creditorInvoiceNumber;

    #[Optional]
    public ?string $currency;

    #[Optional]
    public ?string $displayNumber;

    #[Optional]
    public ?string $dueDate;

    #[Optional]
    public ?float $grossAmount;

    #[Optional]
    public ?string $invoiceDate;

    /** @var list<InvoiceLine>|null $invoiceLines */
    #[Optional(list: InvoiceLine::class)]
    public ?array $invoiceLines;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $lastUpdatedAt;

    #[Optional]
    public ?float $paidAmount;

    #[Optional]
    public ?string $paymentDate;

    #[Optional]
    public ?string $remarks;

    #[Optional]
    public ?string $subsidiary;

    #[Optional]
    public ?string $theirVatRegistrationNumber;

    #[Optional]
    public ?float $totalAmount;

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
     *
     * @param list<InvoiceLine|InvoiceLineShape>|null $invoiceLines
     */
    public static function with(
        ?string $id = null,
        ?float $amount = null,
        ?string $createdBy = null,
        ?\DateTimeInterface $createdOn = null,
        ?string $creditor = null,
        ?string $creditorInvoiceNumber = null,
        ?string $currency = null,
        ?string $displayNumber = null,
        ?string $dueDate = null,
        ?float $grossAmount = null,
        ?string $invoiceDate = null,
        ?array $invoiceLines = null,
        ?\DateTimeInterface $lastUpdatedAt = null,
        ?float $paidAmount = null,
        ?string $paymentDate = null,
        ?string $remarks = null,
        ?string $subsidiary = null,
        ?string $theirVatRegistrationNumber = null,
        ?float $totalAmount = null,
        ?float $vatAmount = null,
        ?string $vatCodeAndPercentage = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $amount && $self['amount'] = $amount;
        null !== $createdBy && $self['createdBy'] = $createdBy;
        null !== $createdOn && $self['createdOn'] = $createdOn;
        null !== $creditor && $self['creditor'] = $creditor;
        null !== $creditorInvoiceNumber && $self['creditorInvoiceNumber'] = $creditorInvoiceNumber;
        null !== $currency && $self['currency'] = $currency;
        null !== $displayNumber && $self['displayNumber'] = $displayNumber;
        null !== $dueDate && $self['dueDate'] = $dueDate;
        null !== $grossAmount && $self['grossAmount'] = $grossAmount;
        null !== $invoiceDate && $self['invoiceDate'] = $invoiceDate;
        null !== $invoiceLines && $self['invoiceLines'] = $invoiceLines;
        null !== $lastUpdatedAt && $self['lastUpdatedAt'] = $lastUpdatedAt;
        null !== $paidAmount && $self['paidAmount'] = $paidAmount;
        null !== $paymentDate && $self['paymentDate'] = $paymentDate;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;
        null !== $theirVatRegistrationNumber && $self['theirVatRegistrationNumber'] = $theirVatRegistrationNumber;
        null !== $totalAmount && $self['totalAmount'] = $totalAmount;
        null !== $vatAmount && $self['vatAmount'] = $vatAmount;
        null !== $vatCodeAndPercentage && $self['vatCodeAndPercentage'] = $vatCodeAndPercentage;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withAmount(float $amount): self
    {
        $self = clone $this;
        $self['amount'] = $amount;

        return $self;
    }

    public function withCreatedBy(string $createdBy): self
    {
        $self = clone $this;
        $self['createdBy'] = $createdBy;

        return $self;
    }

    public function withCreatedOn(?\DateTimeInterface $createdOn): self
    {
        $self = clone $this;
        $self['createdOn'] = $createdOn;

        return $self;
    }

    public function withCreditor(string $creditor): self
    {
        $self = clone $this;
        $self['creditor'] = $creditor;

        return $self;
    }

    public function withCreditorInvoiceNumber(
        string $creditorInvoiceNumber
    ): self {
        $self = clone $this;
        $self['creditorInvoiceNumber'] = $creditorInvoiceNumber;

        return $self;
    }

    public function withCurrency(string $currency): self
    {
        $self = clone $this;
        $self['currency'] = $currency;

        return $self;
    }

    public function withDisplayNumber(string $displayNumber): self
    {
        $self = clone $this;
        $self['displayNumber'] = $displayNumber;

        return $self;
    }

    public function withDueDate(string $dueDate): self
    {
        $self = clone $this;
        $self['dueDate'] = $dueDate;

        return $self;
    }

    public function withGrossAmount(float $grossAmount): self
    {
        $self = clone $this;
        $self['grossAmount'] = $grossAmount;

        return $self;
    }

    public function withInvoiceDate(string $invoiceDate): self
    {
        $self = clone $this;
        $self['invoiceDate'] = $invoiceDate;

        return $self;
    }

    /**
     * @param list<InvoiceLine|InvoiceLineShape> $invoiceLines
     */
    public function withInvoiceLines(array $invoiceLines): self
    {
        $self = clone $this;
        $self['invoiceLines'] = $invoiceLines;

        return $self;
    }

    public function withLastUpdatedAt(?\DateTimeInterface $lastUpdatedAt): self
    {
        $self = clone $this;
        $self['lastUpdatedAt'] = $lastUpdatedAt;

        return $self;
    }

    public function withPaidAmount(float $paidAmount): self
    {
        $self = clone $this;
        $self['paidAmount'] = $paidAmount;

        return $self;
    }

    public function withPaymentDate(string $paymentDate): self
    {
        $self = clone $this;
        $self['paymentDate'] = $paymentDate;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withSubsidiary(string $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }

    public function withTheirVatRegistrationNumber(
        string $theirVatRegistrationNumber
    ): self {
        $self = clone $this;
        $self['theirVatRegistrationNumber'] = $theirVatRegistrationNumber;

        return $self;
    }

    public function withTotalAmount(float $totalAmount): self
    {
        $self = clone $this;
        $self['totalAmount'] = $totalAmount;

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
