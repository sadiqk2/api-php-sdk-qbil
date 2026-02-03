<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\Order;

/**
 * This indicates whether an order involves intra-EU (intra-community) trade and helps determine if the order should be treated as an intra-community transaction.
 */
enum IntraCommunicator: string
{
    case UNKNOWN = 'Unknown';

    case YES = 'Yes';

    case NO = 'No';

    case PURCHASE_ONLY = 'Purchase only';

    case SALES_ONLY = 'Sales only';
}
