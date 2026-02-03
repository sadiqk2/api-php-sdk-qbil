<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Relations;

use QbilPhpSDK\Core\Attributes\Optional;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Addresses\CustomField;
use QbilPhpSDK\V1\Relations\Contacts\Contact;

/**
 * @phpstan-import-type ContactShape from \QbilPhpSDK\V1\Relations\Contacts\Contact
 * @phpstan-import-type CustomFieldShape from \QbilPhpSDK\V1\Addresses\CustomField
 *
 * @phpstan-type RelationShape = array{
 *   id?: string|null,
 *   accountManagers?: list<string>|null,
 *   addresses?: list<string>|null,
 *   availableInSubsidiaries?: list<string>|null,
 *   companyName?: string|null,
 *   contacts?: list<Contact|ContactShape>|null,
 *   customFields?: list<CustomField|CustomFieldShape>|null,
 *   defaultCurrency?: string|null,
 *   email?: string|null,
 *   exportManagers?: list<string>|null,
 *   isBank?: bool|null,
 *   isBroker?: bool|null,
 *   isCustomer?: bool|null,
 *   isFutureBroker?: bool|null,
 *   isHidden?: bool|null,
 *   isSubsidiary?: bool|null,
 *   isSupplier?: bool|null,
 *   isTransporter?: bool|null,
 *   isWarehouse?: bool|null,
 *   language?: string|null,
 *   logisticEmployees?: list<string>|null,
 *   phone?: string|null,
 *   shortCode?: string|null,
 * }
 */
final class Relation implements BaseModel
{
    /** @use SdkModel<RelationShape> */
    use SdkModel;

    #[Optional]
    public ?string $id;

    /**
     * Default account managers for this relation.
     *
     * @var list<string>|null $accountManagers
     */
    #[Optional(list: 'string')]
    public ?array $accountManagers;

    /** @var list<string>|null $addresses */
    #[Optional(list: 'string')]
    public ?array $addresses;

    /** @var list<string>|null $availableInSubsidiaries */
    #[Optional(list: 'string')]
    public ?array $availableInSubsidiaries;

    #[Optional]
    public ?string $companyName;

    /** @var list<Contact>|null $contacts */
    #[Optional(list: Contact::class)]
    public ?array $contacts;

    /** @var list<CustomField>|null $customFields */
    #[Optional(list: CustomField::class)]
    public ?array $customFields;

    #[Optional]
    public ?string $defaultCurrency;

    #[Optional(nullable: true)]
    public ?string $email;

    /**
     * Default export managers (traders) for this relation.
     *
     * @var list<string>|null $exportManagers
     */
    #[Optional(list: 'string')]
    public ?array $exportManagers;

    #[Optional]
    public ?bool $isBank;

    #[Optional]
    public ?bool $isBroker;

    #[Optional]
    public ?bool $isCustomer;

    #[Optional]
    public ?bool $isFutureBroker;

    #[Optional]
    public ?bool $isHidden;

    #[Optional]
    public ?bool $isSubsidiary;

    #[Optional]
    public ?bool $isSupplier;

    #[Optional]
    public ?bool $isTransporter;

    #[Optional]
    public ?bool $isWarehouse;

    #[Optional]
    public ?string $language;

    /**
     * Default logistic employees (contact persons) for this relation.
     *
     * @var list<string>|null $logisticEmployees
     */
    #[Optional(list: 'string')]
    public ?array $logisticEmployees;

    #[Optional]
    public ?string $phone;

    #[Optional]
    public ?string $shortCode;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<string>|null $accountManagers
     * @param list<string>|null $addresses
     * @param list<string>|null $availableInSubsidiaries
     * @param list<Contact|ContactShape>|null $contacts
     * @param list<CustomField|CustomFieldShape>|null $customFields
     * @param list<string>|null $exportManagers
     * @param list<string>|null $logisticEmployees
     */
    public static function with(
        ?string $id = null,
        ?array $accountManagers = null,
        ?array $addresses = null,
        ?array $availableInSubsidiaries = null,
        ?string $companyName = null,
        ?array $contacts = null,
        ?array $customFields = null,
        ?string $defaultCurrency = null,
        ?string $email = null,
        ?array $exportManagers = null,
        ?bool $isBank = null,
        ?bool $isBroker = null,
        ?bool $isCustomer = null,
        ?bool $isFutureBroker = null,
        ?bool $isHidden = null,
        ?bool $isSubsidiary = null,
        ?bool $isSupplier = null,
        ?bool $isTransporter = null,
        ?bool $isWarehouse = null,
        ?string $language = null,
        ?array $logisticEmployees = null,
        ?string $phone = null,
        ?string $shortCode = null,
    ): self {
        $self = new self;

        null !== $id && $self['id'] = $id;
        null !== $accountManagers && $self['accountManagers'] = $accountManagers;
        null !== $addresses && $self['addresses'] = $addresses;
        null !== $availableInSubsidiaries && $self['availableInSubsidiaries'] = $availableInSubsidiaries;
        null !== $companyName && $self['companyName'] = $companyName;
        null !== $contacts && $self['contacts'] = $contacts;
        null !== $customFields && $self['customFields'] = $customFields;
        null !== $defaultCurrency && $self['defaultCurrency'] = $defaultCurrency;
        null !== $email && $self['email'] = $email;
        null !== $exportManagers && $self['exportManagers'] = $exportManagers;
        null !== $isBank && $self['isBank'] = $isBank;
        null !== $isBroker && $self['isBroker'] = $isBroker;
        null !== $isCustomer && $self['isCustomer'] = $isCustomer;
        null !== $isFutureBroker && $self['isFutureBroker'] = $isFutureBroker;
        null !== $isHidden && $self['isHidden'] = $isHidden;
        null !== $isSubsidiary && $self['isSubsidiary'] = $isSubsidiary;
        null !== $isSupplier && $self['isSupplier'] = $isSupplier;
        null !== $isTransporter && $self['isTransporter'] = $isTransporter;
        null !== $isWarehouse && $self['isWarehouse'] = $isWarehouse;
        null !== $language && $self['language'] = $language;
        null !== $logisticEmployees && $self['logisticEmployees'] = $logisticEmployees;
        null !== $phone && $self['phone'] = $phone;
        null !== $shortCode && $self['shortCode'] = $shortCode;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * Default account managers for this relation.
     *
     * @param list<string> $accountManagers
     */
    public function withAccountManagers(array $accountManagers): self
    {
        $self = clone $this;
        $self['accountManagers'] = $accountManagers;

        return $self;
    }

    /**
     * @param list<string> $addresses
     */
    public function withAddresses(array $addresses): self
    {
        $self = clone $this;
        $self['addresses'] = $addresses;

        return $self;
    }

    /**
     * @param list<string> $availableInSubsidiaries
     */
    public function withAvailableInSubsidiaries(
        array $availableInSubsidiaries
    ): self {
        $self = clone $this;
        $self['availableInSubsidiaries'] = $availableInSubsidiaries;

        return $self;
    }

    public function withCompanyName(string $companyName): self
    {
        $self = clone $this;
        $self['companyName'] = $companyName;

        return $self;
    }

    /**
     * @param list<Contact|ContactShape> $contacts
     */
    public function withContacts(array $contacts): self
    {
        $self = clone $this;
        $self['contacts'] = $contacts;

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

    public function withDefaultCurrency(string $defaultCurrency): self
    {
        $self = clone $this;
        $self['defaultCurrency'] = $defaultCurrency;

        return $self;
    }

    public function withEmail(?string $email): self
    {
        $self = clone $this;
        $self['email'] = $email;

        return $self;
    }

    /**
     * Default export managers (traders) for this relation.
     *
     * @param list<string> $exportManagers
     */
    public function withExportManagers(array $exportManagers): self
    {
        $self = clone $this;
        $self['exportManagers'] = $exportManagers;

        return $self;
    }

    public function withIsBank(bool $isBank): self
    {
        $self = clone $this;
        $self['isBank'] = $isBank;

        return $self;
    }

    public function withIsBroker(bool $isBroker): self
    {
        $self = clone $this;
        $self['isBroker'] = $isBroker;

        return $self;
    }

    public function withIsCustomer(bool $isCustomer): self
    {
        $self = clone $this;
        $self['isCustomer'] = $isCustomer;

        return $self;
    }

    public function withIsFutureBroker(bool $isFutureBroker): self
    {
        $self = clone $this;
        $self['isFutureBroker'] = $isFutureBroker;

        return $self;
    }

    public function withIsHidden(bool $isHidden): self
    {
        $self = clone $this;
        $self['isHidden'] = $isHidden;

        return $self;
    }

    public function withIsSubsidiary(bool $isSubsidiary): self
    {
        $self = clone $this;
        $self['isSubsidiary'] = $isSubsidiary;

        return $self;
    }

    public function withIsSupplier(bool $isSupplier): self
    {
        $self = clone $this;
        $self['isSupplier'] = $isSupplier;

        return $self;
    }

    public function withIsTransporter(bool $isTransporter): self
    {
        $self = clone $this;
        $self['isTransporter'] = $isTransporter;

        return $self;
    }

    public function withIsWarehouse(bool $isWarehouse): self
    {
        $self = clone $this;
        $self['isWarehouse'] = $isWarehouse;

        return $self;
    }

    public function withLanguage(string $language): self
    {
        $self = clone $this;
        $self['language'] = $language;

        return $self;
    }

    /**
     * Default logistic employees (contact persons) for this relation.
     *
     * @param list<string> $logisticEmployees
     */
    public function withLogisticEmployees(array $logisticEmployees): self
    {
        $self = clone $this;
        $self['logisticEmployees'] = $logisticEmployees;

        return $self;
    }

    public function withPhone(string $phone): self
    {
        $self = clone $this;
        $self['phone'] = $phone;

        return $self;
    }

    public function withShortCode(string $shortCode): self
    {
        $self = clone $this;
        $self['shortCode'] = $shortCode;

        return $self;
    }
}
