<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\SalesInvoices\SalesInvoice;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\SalesInvoices\SalesInvoice\InvoiceLine\LineType;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 *
 * @phpstan-type InvoiceLineShape = array{
 *   amount?: float|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   description?: string|null,
 *   lineType?: null|LineType|value-of<LineType>,
 *   price?: float|null,
 *   productSpecification?: string|null,
 *   quantity?: float|null,
 *   unitCode?: string|null,
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

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?string $description;

    /** @var value-of<LineType>|null $lineType */
    #[Optional(enum: LineType::class)]
    public ?string $lineType;

    #[Optional]
    public ?float $price;

    #[Optional]
    public ?string $productSpecification;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?string $unitCode;

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
     * @param LineType|value-of<LineType>|null $lineType
     */
    public static function with(
        ?float $amount = null,
        ?array $customFields = null,
        ?string $description = null,
        LineType|string|null $lineType = null,
        ?float $price = null,
        ?string $productSpecification = null,
        ?float $quantity = null,
        ?string $unitCode = null,
        ?float $vatAmount = null,
        ?string $vatCodeAndPercentage = null,
    ): self {
        $self = new self;

        null !== $amount && $self['amount'] = $amount;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $description && $self['description'] = $description;
        null !== $lineType && $self['lineType'] = $lineType;
        null !== $price && $self['price'] = $price;
        null !== $productSpecification && $self['productSpecification'] = $productSpecification;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $unitCode && $self['unitCode'] = $unitCode;
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

    /**
     * @param list<CustomField|CustomFieldShape> $customFields
     */
    public function withCustomFields(array $customFields): self
    {
        $self = clone $this;
        $self['customFields'] = $customFields;

        return $self;
    }

    public function withDescription(string $description): self
    {
        $self = clone $this;
        $self['description'] = $description;

        return $self;
    }

    /**
     * @param LineType|value-of<LineType> $lineType
     */
    public function withLineType(LineType|string $lineType): self
    {
        $self = clone $this;
        $self['lineType'] = $lineType;

        return $self;
    }

    public function withPrice(float $price): self
    {
        $self = clone $this;
        $self['price'] = $price;

        return $self;
    }

    public function withProductSpecification(string $productSpecification): self
    {
        $self = clone $this;
        $self['productSpecification'] = $productSpecification;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    public function withUnitCode(string $unitCode): self
    {
        $self = clone $this;
        $self['unitCode'] = $unitCode;

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
