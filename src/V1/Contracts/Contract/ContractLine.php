<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\Contract;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Contracts\Contract\ContractLine\BrokerAgreement;
use QbilPhpSDK\V1\Contracts\Contract\ContractLine\Planning;
use QbilPhpSDK\V1\Stocks\ProductAnalysis;

/**
 * @phpstan-import-type BrokerAgreementShape from \QbilPhpSDK\V1\Contracts\Contract\ContractLine\BrokerAgreement
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type PlanningShape from \QbilPhpSDK\V1\Contracts\Contract\ContractLine\Planning
 * @phpstan-import-type ProductAnalysisShape from \QbilPhpSDK\V1\Stocks\ProductAnalysis
 *
 * @phpstan-type ContractLineShape = array{
 *   amortizedQuantity?: float|null,
 *   analysisInstruction?: string|null,
 *   brokerAgreements?: list<BrokerAgreement|BrokerAgreementShape>|null,
 *   contractLineID?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   dryMatterPart?: float|null,
 *   packaging?: string|null,
 *   packingCount?: float|null,
 *   plannedQuantity?: float|null,
 *   plannings?: list<Planning|PlanningShape>|null,
 *   price?: float|null,
 *   pricingFactor?: int|null,
 *   pricingType?: string|null,
 *   pricingUnitCode?: string|null,
 *   product?: string|null,
 *   productAnalysis?: list<ProductAnalysis|ProductAnalysisShape>|null,
 *   quantity?: float|null,
 *   quantityPerPackaging?: float|null,
 *   referencePricePerTon?: float|null,
 *   sampleInstruction?: string|null,
 *   stackingDetails?: string|null,
 * }
 */
final class ContractLine implements BaseModel
{
    /** @use SdkModel<ContractLineShape> */
    use SdkModel;

    #[Optional]
    public ?float $amortizedQuantity;

    #[Optional]
    public ?string $analysisInstruction;

    /** @var list<BrokerAgreement>|null $brokerAgreements */
    #[Optional(list: BrokerAgreement::class)]
    public ?array $brokerAgreements;

    #[Optional('contractLineId')]
    public ?string $contractLineID;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?float $dryMatterPart;

    #[Optional(nullable: true)]
    public ?string $packaging;

    #[Optional]
    public ?float $packingCount;

    /**
     * Planned (non-finalized) quantity: sum of all unfinalized quantities for the contract line.
     */
    #[Optional]
    public ?float $plannedQuantity;

    /** @var list<Planning>|null $plannings */
    #[Optional(list: Planning::class)]
    public ?array $plannings;

    #[Optional]
    public ?float $price;

    #[Optional(nullable: true)]
    public ?int $pricingFactor;

    #[Optional]
    public ?string $pricingType;

    #[Optional]
    public ?string $pricingUnitCode;

    #[Optional(nullable: true)]
    public ?string $product;

    /** @var list<ProductAnalysis>|null $productAnalysis */
    #[Optional(list: ProductAnalysis::class)]
    public ?array $productAnalysis;

    #[Optional]
    public ?float $quantity;

    #[Optional]
    public ?float $quantityPerPackaging;

    #[Optional]
    public ?float $referencePricePerTon;

    #[Optional]
    public ?string $sampleInstruction;

    #[Optional]
    public ?string $stackingDetails;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<BrokerAgreement|BrokerAgreementShape>|null $brokerAgreements
     * @param list<CustomField|CustomFieldShape>|null $customFields
     * @param list<Planning|PlanningShape>|null $plannings
     * @param list<ProductAnalysis|ProductAnalysisShape>|null $productAnalysis
     */
    public static function with(
        ?float $amortizedQuantity = null,
        ?string $analysisInstruction = null,
        ?array $brokerAgreements = null,
        ?string $contractLineID = null,
        ?array $customFields = null,
        ?float $dryMatterPart = null,
        ?string $packaging = null,
        ?float $packingCount = null,
        ?float $plannedQuantity = null,
        ?array $plannings = null,
        ?float $price = null,
        ?int $pricingFactor = null,
        ?string $pricingType = null,
        ?string $pricingUnitCode = null,
        ?string $product = null,
        ?array $productAnalysis = null,
        ?float $quantity = null,
        ?float $quantityPerPackaging = null,
        ?float $referencePricePerTon = null,
        ?string $sampleInstruction = null,
        ?string $stackingDetails = null,
    ): self {
        $self = new self;

        null !== $amortizedQuantity && $self['amortizedQuantity'] = $amortizedQuantity;
        null !== $analysisInstruction && $self['analysisInstruction'] = $analysisInstruction;
        null !== $brokerAgreements && $self['brokerAgreements'] = $brokerAgreements;
        null !== $contractLineID && $self['contractLineID'] = $contractLineID;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $dryMatterPart && $self['dryMatterPart'] = $dryMatterPart;
        null !== $packaging && $self['packaging'] = $packaging;
        null !== $packingCount && $self['packingCount'] = $packingCount;
        null !== $plannedQuantity && $self['plannedQuantity'] = $plannedQuantity;
        null !== $plannings && $self['plannings'] = $plannings;
        null !== $price && $self['price'] = $price;
        null !== $pricingFactor && $self['pricingFactor'] = $pricingFactor;
        null !== $pricingType && $self['pricingType'] = $pricingType;
        null !== $pricingUnitCode && $self['pricingUnitCode'] = $pricingUnitCode;
        null !== $product && $self['product'] = $product;
        null !== $productAnalysis && $self['productAnalysis'] = $productAnalysis;
        null !== $quantity && $self['quantity'] = $quantity;
        null !== $quantityPerPackaging && $self['quantityPerPackaging'] = $quantityPerPackaging;
        null !== $referencePricePerTon && $self['referencePricePerTon'] = $referencePricePerTon;
        null !== $sampleInstruction && $self['sampleInstruction'] = $sampleInstruction;
        null !== $stackingDetails && $self['stackingDetails'] = $stackingDetails;

        return $self;
    }

    public function withAmortizedQuantity(float $amortizedQuantity): self
    {
        $self = clone $this;
        $self['amortizedQuantity'] = $amortizedQuantity;

        return $self;
    }

    public function withAnalysisInstruction(string $analysisInstruction): self
    {
        $self = clone $this;
        $self['analysisInstruction'] = $analysisInstruction;

        return $self;
    }

    /**
     * @param list<BrokerAgreement|BrokerAgreementShape> $brokerAgreements
     */
    public function withBrokerAgreements(array $brokerAgreements): self
    {
        $self = clone $this;
        $self['brokerAgreements'] = $brokerAgreements;

        return $self;
    }

    public function withContractLineID(string $contractLineID): self
    {
        $self = clone $this;
        $self['contractLineID'] = $contractLineID;

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

    public function withDryMatterPart(float $dryMatterPart): self
    {
        $self = clone $this;
        $self['dryMatterPart'] = $dryMatterPart;

        return $self;
    }

    public function withPackaging(?string $packaging): self
    {
        $self = clone $this;
        $self['packaging'] = $packaging;

        return $self;
    }

    public function withPackingCount(float $packingCount): self
    {
        $self = clone $this;
        $self['packingCount'] = $packingCount;

        return $self;
    }

    /**
     * Planned (non-finalized) quantity: sum of all unfinalized quantities for the contract line.
     */
    public function withPlannedQuantity(float $plannedQuantity): self
    {
        $self = clone $this;
        $self['plannedQuantity'] = $plannedQuantity;

        return $self;
    }

    /**
     * @param list<Planning|PlanningShape> $plannings
     */
    public function withPlannings(array $plannings): self
    {
        $self = clone $this;
        $self['plannings'] = $plannings;

        return $self;
    }

    public function withPrice(float $price): self
    {
        $self = clone $this;
        $self['price'] = $price;

        return $self;
    }

    public function withPricingFactor(?int $pricingFactor): self
    {
        $self = clone $this;
        $self['pricingFactor'] = $pricingFactor;

        return $self;
    }

    public function withPricingType(string $pricingType): self
    {
        $self = clone $this;
        $self['pricingType'] = $pricingType;

        return $self;
    }

    public function withPricingUnitCode(string $pricingUnitCode): self
    {
        $self = clone $this;
        $self['pricingUnitCode'] = $pricingUnitCode;

        return $self;
    }

    public function withProduct(?string $product): self
    {
        $self = clone $this;
        $self['product'] = $product;

        return $self;
    }

    /**
     * @param list<ProductAnalysis|ProductAnalysisShape> $productAnalysis
     */
    public function withProductAnalysis(array $productAnalysis): self
    {
        $self = clone $this;
        $self['productAnalysis'] = $productAnalysis;

        return $self;
    }

    public function withQuantity(float $quantity): self
    {
        $self = clone $this;
        $self['quantity'] = $quantity;

        return $self;
    }

    public function withQuantityPerPackaging(float $quantityPerPackaging): self
    {
        $self = clone $this;
        $self['quantityPerPackaging'] = $quantityPerPackaging;

        return $self;
    }

    public function withReferencePricePerTon(float $referencePricePerTon): self
    {
        $self = clone $this;
        $self['referencePricePerTon'] = $referencePricePerTon;

        return $self;
    }

    public function withSampleInstruction(string $sampleInstruction): self
    {
        $self = clone $this;
        $self['sampleInstruction'] = $sampleInstruction;

        return $self;
    }

    public function withStackingDetails(string $stackingDetails): self
    {
        $self = clone $this;
        $self['stackingDetails'] = $stackingDetails;

        return $self;
    }
}
