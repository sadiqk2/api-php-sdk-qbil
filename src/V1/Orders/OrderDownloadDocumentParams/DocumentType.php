<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\OrderDownloadDocumentParams;

enum DocumentType: string
{
    case INTERNAL = 'internal';

    case EXTERNAL = 'external';
}
