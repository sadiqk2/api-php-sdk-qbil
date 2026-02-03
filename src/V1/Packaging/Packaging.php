<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Packaging;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Packaging\Packaging\Description;

/**
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 * @phpstan-import-type DescriptionShape from \QbilPhpSDK\V1\Packaging\Packaging\Description
 *
 * @phpstan-type PackagingShape = array{
 *   id?: string|null,
 *   code?: string|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   descriptions?: list<Description|DescriptionShape>|null,
 *   dimensions?: string|null,
 *   quantityPerPacking?: float|null,
 *   remarks?: string|null,
 *   tare?: float|null,
 *   unit?: string|null,
 * }
 */
final class Packaging implements BaseModel
{
    /** @use SdkModel<PackagingShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    #[Optional]
    public ?string $code;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    /** @var list<Description>|null $descriptions */
    #[Optional(list: Description::class)]
    public ?array $descriptions;

    #[Optional]
    public ?string $dimensions;

    #[Optional]
    public ?float $quantityPerPacking;

    #[Optional]
    public ?string $remarks;

    #[Optional(nullable: true)]
    public ?float $tare;

    #[Optional]
    public ?string $unit;

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
     * @param list<Description|DescriptionShape>|null $descriptions
     */
    public static function with(
        ?string $id = null,
        ?string $code = null,
        ?array $customFields = null,
        ?array $descriptions = null,
        ?string $dimensions = null,
        ?float $quantityPerPacking = null,
        ?string $remarks = null,
        ?float $tare = null,
        ?string $unit = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $code && $self['code'] = $code;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $descriptions && $self['descriptions'] = $descriptions;
        null !== $dimensions && $self['dimensions'] = $dimensions;
        null !== $quantityPerPacking && $self['quantityPerPacking'] = $quantityPerPacking;
        null !== $remarks && $self['remarks'] = $remarks;
        null !== $tare && $self['tare'] = $tare;
        null !== $unit && $self['unit'] = $unit;

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

    /**
     * @param list<CustomField|CustomFieldShape> $customFields
     */
    public function withCustomFields(array $customFields): self
    {
        $self = clone $this;
        $self['customFields'] = $customFields;

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

    public function withDimensions(string $dimensions): self
    {
        $self = clone $this;
        $self['dimensions'] = $dimensions;

        return $self;
    }

    public function withQuantityPerPacking(float $quantityPerPacking): self
    {
        $self = clone $this;
        $self['quantityPerPacking'] = $quantityPerPacking;

        return $self;
    }

    public function withRemarks(string $remarks): self
    {
        $self = clone $this;
        $self['remarks'] = $remarks;

        return $self;
    }

    public function withTare(?float $tare): self
    {
        $self = clone $this;
        $self['tare'] = $tare;

        return $self;
    }

    public function withUnit(string $unit): self
    {
        $self = clone $this;
        $self['unit'] = $unit;

        return $self;
    }
}
