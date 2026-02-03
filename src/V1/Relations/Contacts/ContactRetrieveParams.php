<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Relations\Contacts;

use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;

/**
 * Retrieves a Contact resource.
 *
 * @see QbilPhpSDK\Services\V1\Relations\ContactsService::retrieve()
 *
 * @phpstan-type ContactRetrieveParamsShape = array{relationID: string}
 */
final class ContactRetrieveParams implements BaseModel
{
    /** @use SdkModel<ContactRetrieveParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Required]
    public string $relationID;

    /**
     * `new ContactRetrieveParams()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * ContactRetrieveParams::with(relationID: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new ContactRetrieveParams)->withRelationID(...)
     * ```
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(string $relationID): self
    {
        $self = new self;

        $self['relationID'] = $relationID;

        return $self;
    }

    public function withRelationID(string $relationID): self
    {
        $self = clone $this;
        $self['relationID'] = $relationID;

        return $self;
    }
}
