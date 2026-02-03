<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;

/**
 * This indicates whether an order involves intra-EU (intra-community) trade.
 */
enum IntraCommunicator: string
{
    case UNKNOWN = 'Unknown';

    case YES = 'Yes';

    case NO = 'No';

    case PURCHASE_ONLY = 'Purchase only';

    case SALES_ONLY = 'Sales only';
}
