<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\Order;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 *
 * @phpstan-type TransportOrderShape = array{
 *   id?: string|null,
 *   carrier?: string|null,
 *   carrierReferenceNumber?: string|null,
 *   currency?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   dueDate?: string|null,
 *   estimatedAmount?: float|null,
 *   invoiceDate?: string|null,
 *   invoiceNumber?: string|null,
 *   pricingType?: string|null,
 *   quantity?: float|null,
 *   shipper?: string|null,
 * }
 */
final class TransportOrder implements BaseModel
{
    /** @use SdkModel<TransportOrderShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $carrier;

    #[Optional]
    public ?string $carrierReferenceNumber;

    #[Optional]
    public ?string $currency;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional(nullable: true)]
    public ?string $dueDate;

    #[Optional]
    public ?float $estimatedAmount;

    #[Optional(nullable: true)]
    public ?string $invoiceDate;

    #[Optional(nullable: true)]
    public ?string $invoiceNumber;

    #[Optional]
    public ?string $pricingType;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?string $shipper;

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
     */
    public static function with(
        ?string $id = null,
        ?string $carrier = null,
        ?string $carrierReferenceNumber = null,
        ?string $currency = null,
        ?array $customFields = null,
        ?string $dueDate = null,
        ?float $estimatedAmount = null,
        ?string $invoiceDate = null,
        ?string $invoiceNumber = null,
        ?string $pricingType = null,
        ?float $quantity = null,
        ?string $shipper = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $carrier && $self['carrier'] = $carrier;
        null !== $carrierReferenceNumber && $self['carrierReferenceNumber'] = $carrierReferenceNumber;
        null !== $currency && $self['currency'] = $currency;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $dueDate && $self['dueDate'] = $dueDate;
        null !== $estimatedAmount && $self['estimatedAmount'] = $estimatedAmount;
        null !== $invoiceDate && $self['invoiceDate'] = $invoiceDate;
        null !== $invoiceNumber && $self['invoiceNumber'] = $invoiceNumber;
        null !== $pricingType && $self['pricingType'] = $pricingType;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $shipper && $self['shipper'] = $shipper;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withCarrier(string $carrier): self
    {
        $self = clone $this;
        $self['carrier'] = $carrier;

        return $self;
    }

    public function withCarrierReferenceNumber(
        string $carrierReferenceNumber
    ): self {
        $self = clone $this;
        $self['carrierReferenceNumber'] = $carrierReferenceNumber;

        return $self;
    }

    public function withCurrency(string $currency): self
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

    public function withDueDate(?string $dueDate): self
    {
        $self = clone $this;
        $self['dueDate'] = $dueDate;

        return $self;
    }

    public function withEstimatedAmount(float $estimatedAmount): self
    {
        $self = clone $this;
        $self['estimatedAmount'] = $estimatedAmount;

        return $self;
    }

    public function withInvoiceDate(?string $invoiceDate): self
    {
        $self = clone $this;
        $self['invoiceDate'] = $invoiceDate;

        return $self;
    }

    public function withInvoiceNumber(?string $invoiceNumber): self
    {
        $self = clone $this;
        $self['invoiceNumber'] = $invoiceNumber;

        return $self;
    }

    public function withPricingType(string $pricingType): self
    {
        $self = clone $this;
        $self['pricingType'] = $pricingType;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    public function withShipper(string $shipper): self
    {
        $self = clone $this;
        $self['shipper'] = $shipper;

        return $self;
    }
}
