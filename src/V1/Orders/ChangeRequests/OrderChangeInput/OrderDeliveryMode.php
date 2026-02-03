<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput;

enum OrderDeliveryMode: string
{
    case PALLET = 'pallet';

    case CONTAINER = 'container';

    case BOTH = 'both';
}
