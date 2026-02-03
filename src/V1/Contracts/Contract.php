<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Contracts\Contract\ContractLine;
use QbilPhpSDK\V1\Contracts\Contract\ContractType;
use QbilPhpSDK\V1\Contracts\Contract\TextLine;

/**
 * @phpstan-import-type ContractLineShape from \QbilPhpSDK\V1\Contracts\Contract\ContractLine
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type VatRegistrationShape from \QbilPhpSDK\V1\Contracts\VatRegistration
 * @phpstan-import-type TextLineShape from \QbilPhpSDK\V1\Contracts\Contract\TextLine
 *
 * @phpstan-type ContractShape = array{
 *   id?: string|null,
 *   contractDate?: string|null,
 *   contractLines?: list<ContractLine|ContractLineShape>|null,
 *   contractRemarks?: string|null,
 *   contractType?: null|ContractType|value-of<ContractType>,
 *   counterContract?: string|null,
 *   createdAt?: string|null,
 *   currencyCode?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   deliveryCondition?: string|null,
 *   displayNumber?: string|null,
 *   exchangeRate?: float|null,
 *   expectedSiloLocation?: string|null,
 *   lastUpdatedAt?: string|null,
 *   loadingAddress?: string|null,
 *   loadingAddressText?: string|null,
 *   ourVatNumber?: null|VatRegistration|VatRegistrationShape,
 *   paymentCondition?: string|null,
 *   positionOverviewRemarks?: string|null,
 *   relation?: string|null,
 *   remarksForInvoiceDepartment?: string|null,
 *   schedule?: string|null,
 *   subsidiary?: string|null,
 *   supplierReference?: string|null,
 *   textLines?: list<TextLine|TextLineShape>|null,
 *   theirVatNumber?: null|VatRegistration|VatRegistrationShape,
 * }
 */
final class Contract implements BaseModel
{
    /** @use SdkModel<ContractShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $contractDate;

    /** @var list<ContractLine>|null $contractLines */
    #[Optional(list: ContractLine::class)]
    public ?array $contractLines;

    #[Optional]
    public ?string $contractRemarks;

    /** @var value-of<ContractType>|null $contractType */
    #[Optional(enum: ContractType::class)]
    public ?string $contractType;

    #[Optional]
    public ?string $counterContract;

    #[Optional(nullable: true)]
    public ?string $createdAt;

    #[Optional(nullable: true)]
    public ?string $currencyCode;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional(nullable: true)]
    public ?string $deliveryCondition;

    #[Optional]
    public ?string $displayNumber;

    #[Optional]
    public ?float $exchangeRate;

    /**
     * Only for silo customers. For purchase contracts, it is the expected unload location of silo. For sales contracts, it is the expected load location.
     */
    #[Optional(nullable: true)]
    public ?string $expectedSiloLocation;

    #[Optional(nullable: true)]
    public ?string $lastUpdatedAt;

    #[Optional(nullable: true)]
    public ?string $loadingAddress;

    #[Optional]
    public ?string $loadingAddressText;

    #[Optional(nullable: true)]
    public ?VatRegistration $ourVatNumber;

    #[Optional(nullable: true)]
    public ?string $paymentCondition;

    #[Optional]
    public ?string $positionOverviewRemarks;

    #[Optional]
    public ?string $relation;

    #[Optional]
    public ?string $remarksForInvoiceDepartment;

    #[Optional]
    public ?string $schedule;

    #[Optional]
    public ?string $subsidiary;

    #[Optional]
    public ?string $supplierReference;

    /** @var list<TextLine>|null $textLines */
    #[Optional(list: TextLine::class)]
    public ?array $textLines;

    #[Optional(nullable: true)]
    public ?VatRegistration $theirVatNumber;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<ContractLine|ContractLineShape>|null $contractLines
     * @param ContractType|value-of<ContractType>|null $contractType
     * @param list<CustomField|CustomFieldShape>|null $customFields
     * @param VatRegistration|VatRegistrationShape|null $ourVatNumber
     * @param list<TextLine|TextLineShape>|null $textLines
     * @param VatRegistration|VatRegistrationShape|null $theirVatNumber
     */
    public static function with(
        ?string $id = null,
        ?string $contractDate = null,
        ?array $contractLines = null,
        ?string $contractRemarks = null,
        ContractType|string|null $contractType = null,
        ?string $counterContract = null,
        ?string $createdAt = null,
        ?string $currencyCode = null,
        ?array $customFields = null,
        ?string $deliveryCondition = null,
        ?string $displayNumber = null,
        ?float $exchangeRate = null,
        ?string $expectedSiloLocation = null,
        ?string $lastUpdatedAt = null,
        ?string $loadingAddress = null,
        ?string $loadingAddressText = null,
        VatRegistration|array|null $ourVatNumber = null,
        ?string $paymentCondition = null,
        ?string $positionOverviewRemarks = null,
        ?string $relation = null,
        ?string $remarksForInvoiceDepartment = null,
        ?string $schedule = null,
        ?string $subsidiary = null,
        ?string $supplierReference = null,
        ?array $textLines = null,
        VatRegistration|array|null $theirVatNumber = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $contractDate && $self['contractDate'] = $contractDate;
        null !== $contractLines && $self['contractLines'] = $contractLines;
        null !== $contractRemarks && $self['contractRemarks'] = $contractRemarks;
        null !== $contractType && $self['contractType'] = $contractType;
        null !== $counterContract && $self['counterContract'] = $counterContract;
        null !== $createdAt && $self['createdAt'] = $createdAt;
        null !== $currencyCode && $self['currencyCode'] = $currencyCode;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $deliveryCondition && $self['deliveryCondition'] = $deliveryCondition;
        null !== $displayNumber && $self['displayNumber'] = $displayNumber;
        null !== $exchangeRate && $self['exchangeRate'] = $exchangeRate;
        null !== $expectedSiloLocation && $self['expectedSiloLocation'] = $expectedSiloLocation;
        null !== $lastUpdatedAt && $self['lastUpdatedAt'] = $lastUpdatedAt;
        null !== $loadingAddress && $self['loadingAddress'] = $loadingAddress;
        null !== $loadingAddressText && $self['loadingAddressText'] = $loadingAddressText;
        null !== $ourVatNumber && $self['ourVatNumber'] = $ourVatNumber;
        null !== $paymentCondition && $self['paymentCondition'] = $paymentCondition;
        null !== $positionOverviewRemarks && $self['positionOverviewRemarks'] = $positionOverviewRemarks;
        null !== $relation && $self['relation'] = $relation;
        null !== $remarksForInvoiceDepartment && $self['remarksForInvoiceDepartment'] = $remarksForInvoiceDepartment;
        null !== $schedule && $self['schedule'] = $schedule;
        null !== $subsidiary && $self['subsidiary'] = $subsidiary;
        null !== $supplierReference && $self['supplierReference'] = $supplierReference;
        null !== $textLines && $self['textLines'] = $textLines;
        null !== $theirVatNumber && $self['theirVatNumber'] = $theirVatNumber;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    public function withContractDate(string $contractDate): self
    {
        $self = clone $this;
        $self['contractDate'] = $contractDate;

        return $self;
    }

    /**
     * @param list<ContractLine|ContractLineShape> $contractLines
     */
    public function withContractLines(array $contractLines): self
    {
        $self = clone $this;
        $self['contractLines'] = $contractLines;

        return $self;
    }

    public function withContractRemarks(string $contractRemarks): self
    {
        $self = clone $this;
        $self['contractRemarks'] = $contractRemarks;

        return $self;
    }

    /**
     * @param ContractType|value-of<ContractType> $contractType
     */
    public function withContractType(ContractType|string $contractType): self
    {
        $self = clone $this;
        $self['contractType'] = $contractType;

        return $self;
    }

    public function withCounterContract(string $counterContract): self
    {
        $self = clone $this;
        $self['counterContract'] = $counterContract;

        return $self;
    }

    public function withCreatedAt(?string $createdAt): self
    {
        $self = clone $this;
        $self['createdAt'] = $createdAt;

        return $self;
    }

    public function withCurrencyCode(?string $currencyCode): self
    {
        $self = clone $this;
        $self['currencyCode'] = $currencyCode;

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

    public function withDeliveryCondition(?string $deliveryCondition): self
    {
        $self = clone $this;
        $self['deliveryCondition'] = $deliveryCondition;

        return $self;
    }

    public function withDisplayNumber(string $displayNumber): self
    {
        $self = clone $this;
        $self['displayNumber'] = $displayNumber;

        return $self;
    }

    public function withExchangeRate(float $exchangeRate): self
    {
        $self = clone $this;
        $self['exchangeRate'] = $exchangeRate;

        return $self;
    }

    /**
     * Only for silo customers. For purchase contracts, it is the expected unload location of silo. For sales contracts, it is the expected load location.
     */
    public function withExpectedSiloLocation(
        ?string $expectedSiloLocation
    ): self {
        $self = clone $this;
        $self['expectedSiloLocation'] = $expectedSiloLocation;

        return $self;
    }

    public function withLastUpdatedAt(?string $lastUpdatedAt): self
    {
        $self = clone $this;
        $self['lastUpdatedAt'] = $lastUpdatedAt;

        return $self;
    }

    public function withLoadingAddress(?string $loadingAddress): self
    {
        $self = clone $this;
        $self['loadingAddress'] = $loadingAddress;

        return $self;
    }

    public function withLoadingAddressText(string $loadingAddressText): self
    {
        $self = clone $this;
        $self['loadingAddressText'] = $loadingAddressText;

        return $self;
    }

    /**
     * @param VatRegistration|VatRegistrationShape|null $ourVatNumber
     */
    public function withOurVatNumber(
        VatRegistration|array|null $ourVatNumber
    ): self {
        $self = clone $this;
        $self['ourVatNumber'] = $ourVatNumber;

        return $self;
    }

    public function withPaymentCondition(?string $paymentCondition): self
    {
        $self = clone $this;
        $self['paymentCondition'] = $paymentCondition;

        return $self;
    }

    public function withPositionOverviewRemarks(
        string $positionOverviewRemarks
    ): self {
        $self = clone $this;
        $self['positionOverviewRemarks'] = $positionOverviewRemarks;

        return $self;
    }

    public function withRelation(string $relation): self
    {
        $self = clone $this;
        $self['relation'] = $relation;

        return $self;
    }

    public function withRemarksForInvoiceDepartment(
        string $remarksForInvoiceDepartment
    ): self {
        $self = clone $this;
        $self['remarksForInvoiceDepartment'] = $remarksForInvoiceDepartment;

        return $self;
    }

    public function withSchedule(string $schedule): self
    {
        $self = clone $this;
        $self['schedule'] = $schedule;

        return $self;
    }

    public function withSubsidiary(string $subsidiary): self
    {
        $self = clone $this;
        $self['subsidiary'] = $subsidiary;

        return $self;
    }

    public function withSupplierReference(string $supplierReference): self
    {
        $self = clone $this;
        $self['supplierReference'] = $supplierReference;

        return $self;
    }

    /**
     * @param list<TextLine|TextLineShape> $textLines
     */
    public function withTextLines(array $textLines): self
    {
        $self = clone $this;
        $self['textLines'] = $textLines;

        return $self;
    }

    /**
     * @param VatRegistration|VatRegistrationShape|null $theirVatNumber
     */
    public function withTheirVatNumber(
        VatRegistration|array|null $theirVatNumber
    ): self {
        $self = clone $this;
        $self['theirVatNumber'] = $theirVatNumber;

        return $self;
    }
}
