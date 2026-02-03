<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Silos\Silo;

enum Type: string
{
    case INPUT = 'Input';

    case OUTPUT = 'Output';

    case UNKNOWN = 'Unknown';
}
