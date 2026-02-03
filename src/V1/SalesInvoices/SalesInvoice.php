<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\SalesInvoices;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoice\InvoiceLine;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoice\InvoiceType;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type InvoiceLineShape from \QbilPhpSDK\V1\SalesInvoices\SalesInvoice\InvoiceLine
 *
 * @phpstan-type SalesInvoiceShape = array{
 *   id?: string|null,
 *   companyName?: string|null,
 *   createdAt?: \DateTimeInterface|null,
 *   createdBy?: string|null,
 *   currency?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   displayNumber?: string|null,
 *   dueDate?: string|null,
 *   exchangeRate?: float|null,
 *   grossAmount?: float|null,
 *   invoiceDate?: string|null,
 *   invoiceLines?: list<InvoiceLine|InvoiceLineShape>|null,
 *   invoiceType?: null|InvoiceType|value-of<InvoiceType>,
 *   lastUpdatedAt?: \DateTimeInterface|null,
 *   netAmount?: float|null,
 *   ourVatRegistration?: string|null,
 *   paidAmount?: float|null,
 *   paymentCondition?: string|null,
 *   paymentDate?: string|null,
 *   remarks?: string|null,
 *   salesJournal?: string|null,
 *   subsidiary?: string|null,
 *   theirVatRegistration?: string|null,
 *   totalAmount?: float|null,
 *   vatAmount?: float|null,
 *   vatCodeAndPercentage?: string|null,
 * }
 */
final class SalesInvoice implements BaseModel
{
    /** @use SdkModel<SalesInvoiceShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $companyName;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $createdAt;

    #[Optional]
    public ?string $createdBy;

    #[Optional(nullable: true)]
    public ?string $currency;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?string $displayNumber;

    #[Optional]
    public ?string $dueDate;

    #[Optional(nullable: true)]
    public ?float $exchangeRate;

    #[Optional]
    public ?float $grossAmount;

    #[Optional]
    public ?string $invoiceDate;

    /** @var list<InvoiceLine>|null $invoiceLines */
    #[Optional(list: InvoiceLine::class)]
    public ?array $invoiceLines;

    /** @var value-of<InvoiceType>|null $invoiceType */
    #[Optional(enum: InvoiceType::class)]
    public ?string $invoiceType;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $lastUpdatedAt;

    #[Optional]
    public ?float $netAmount;

    #[Optional]
    public ?string $ourVatRegistration;

    #[Optional]
    public ?float $paidAmount;

    #[Optional(nullable: true)]
    public ?string $paymentCondition;

    #[Optional]
    public ?string $paymentDate;

    #[Optional]
    public ?string $remarks;

    #[Optional(nullable: true)]
    public ?string $salesJournal;

    #[Optional]
    public ?string $subsidiary;

    #[Optional]
    public ?string $theirVatRegistration;

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
     * @param list<CustomField|CustomFieldShape>|null $customFields
     * @param list<InvoiceLine|InvoiceLineShape>|null $invoiceLines
     * @param InvoiceType|value-of<InvoiceType>|null $invoiceType
     */
    public static function with(
        ?string $id = null,
        ?string $companyName = null,
        ?\DateTimeInterface $createdAt = null,
        ?string $createdBy = null,
        ?string $currency = null,
        ?array $customFields = null,
        ?string $displayNumber = null,
        ?string $dueDate = null,
        ?float $exchangeRate = null,
        ?float $grossAmount = null,
        ?string $invoiceDate = null,
        ?array $invoiceLines = null,
        InvoiceType|string|null $invoiceType = null,
        ?\DateTimeInterface $lastUpdatedAt = null,
        ?float $netAmount = null,
        ?string $ourVatRegistration = null,
        ?float $paidAmount = null,
        ?string $paymentCondition = null,
        ?string $paymentDate = null,
        ?string $remarks = null,
        ?string $salesJournal = null,
        ?string $subsidiary = null,
        ?string $theirVatRegistration = null,
        ?float $totalAmount = null,
        ?float $vatAmount = null,
        ?string $vatCodeAndPercentage = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $companyName && $self['companyName'] = $companyName;
        null !== $createdAt && $self['createdAt'] = $createdAt;
        null !== $createdBy && $self['createdBy'] = $createdBy;
        null !== $currency && $self['currency'] = $currency;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $displayNumber && $self['displayNumber'] = $displayNumber;
        null !== $dueDate && $self['dueDate'] = $dueDate;
        null !== $exchangeRate && $self['exchangeRate'] = $exchangeRate;
        null !== $grossAmount && $self['grossAmount'] = $grossAmount;
        null !== $invoiceDate && $self['invoiceDate'] = $invoiceDate;
        null !== $invoiceLines && $self['invoiceLines'] = $invoiceLines;
        null !== $invoiceType && $self['invoiceType'] = $invoiceType;
        null !== $lastUpdatedAt && $self['lastUpdatedAt'] = $lastUpdatedAt;
        null !== $netAmount && $self['netAmount'] = $netAmount;
        null !== $ourVatRegistration && $self['ourVatRegistration'] = $ourVatRegistration;
        null !== $paidAmount && $self['paidAmount'] = $paidAmount;
        null !== $paymentCondition && $self['paymentCondition'] = $paymentCondition;
        null !== $paymentDate && $self['paymentDate'] = $paymentDate;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $salesJournal && $self['salesJournal'] = $salesJournal;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;
        null !== $theirVatRegistration && $self['theirVatRegistration'] = $theirVatRegistration;
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

    public function withCompanyName(string $companyName): self
    {
        $self = clone $this;
        $self['companyName'] = $companyName;

        return $self;
    }

    public function withCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $self = clone $this;
        $self['createdAt'] = $createdAt;

        return $self;
    }

    public function withCreatedBy(string $createdBy): self
    {
        $self = clone $this;
        $self['createdBy'] = $createdBy;

        return $self;
    }

    public function withCurrency(?string $currency): self
    {
        $self = clone $this;
        $self['currency'] = $currency;

        return $self;
    }

    /**
     * @param list<CustomField|CustomFieldShape> $customFields
     */
    public function withCustomFields(array $customFields): self
    {
        $self = clone $this;
        $self['customFields'] = $customFields;

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

    public function withExchangeRate(?float $exchangeRate): self
    {
        $self = clone $this;
        $self['exchangeRate'] = $exchangeRate;

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

    /**
     * @param InvoiceType|value-of<InvoiceType> $invoiceType
     */
    public function withInvoiceType(InvoiceType|string $invoiceType): self
    {
        $self = clone $this;
        $self['invoiceType'] = $invoiceType;

        return $self;
    }

    public function withLastUpdatedAt(?\DateTimeInterface $lastUpdatedAt): self
    {
        $self = clone $this;
        $self['lastUpdatedAt'] = $lastUpdatedAt;

        return $self;
    }

    public function withNetAmount(float $netAmount): self
    {
        $self = clone $this;
        $self['netAmount'] = $netAmount;

        return $self;
    }

    public function withOurVatRegistration(string $ourVatRegistration): self
    {
        $self = clone $this;
        $self['ourVatRegistration'] = $ourVatRegistration;

        return $self;
    }

    public function withPaidAmount(float $paidAmount): self
    {
        $self = clone $this;
        $self['paidAmount'] = $paidAmount;

        return $self;
    }

    public function withPaymentCondition(?string $paymentCondition): self
    {
        $self = clone $this;
        $self['paymentCondition'] = $paymentCondition;

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

    public function withSalesJournal(?string $salesJournal): self
    {
        $self = clone $this;
        $self['salesJournal'] = $salesJournal;

        return $self;
    }

    public function withSubsidiary(string $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }

    public function withTheirVatRegistration(string $theirVatRegistration): self
    {
        $self = clone $this;
        $self['theirVatRegistration'] = $theirVatRegistration;

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
