<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\ProductionOrders\ProductionResult;

/**
 * Indicates if wrapping should be applied.
 */
enum Wrapping: string
{
    case YES = 'Yes';

    case NO = 'No';

    case N_A = 'N.a';
}
