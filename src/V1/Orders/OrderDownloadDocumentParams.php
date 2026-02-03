<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders;

use QbilPhpSDK\Core\Attributes\Required;
use QbilPhpSDK\Core\Concerns\SdkModel;
use QbilPhpSDK\Core\Concerns\SdkParams;
use QbilPhpSDK\Core\Contracts\BaseModel;
use QbilPhpSDK\V1\Orders\OrderDownloadDocumentParams\DocumentType;

/**
 * Download internal and external order documents by their reference.
 *
 * @see QbilPhpSDK\Services\V1\OrdersService::downloadDocument()
 *
 * @phpstan-type OrderDownloadDocumentParamsShape = array{
 *   id: string, documentType: DocumentType|value-of<DocumentType>
 * }
 */
final class OrderDownloadDocumentParams implements BaseModel
{
    /** @use SdkModel<OrderDownloadDocumentParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Required]
    public string $id;

    /** @var value-of<DocumentType> $documentType */
    #[Required(enum: DocumentType::class)]
    public string $documentType;

    /**
     * `new OrderDownloadDocumentParams()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * OrderDownloadDocumentParams::with(id: ..., documentType: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new OrderDownloadDocumentParams)->withID(...)->withDocumentType(...)
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
     *
     * @param DocumentType|value-of<DocumentType> $documentType
     */
    public static function with(
        string $id,
        DocumentType|string $documentType
    ): self {
        $self = new self;

        $self['id'] = $id;
        $self['documentType'] = $documentType;

        return $self;
    }

    public function withID(string $id): self
    {
        $self = clone $this;
        $self['id'] = $id;

        return $self;
    }

    /**
     * @param DocumentType|value-of<DocumentType> $documentType
     */
    public function withDocumentType(DocumentType|string $documentType): self
    {
        $self = clone $this;
        $self['documentType'] = $documentType;

        return $self;
    }
}
