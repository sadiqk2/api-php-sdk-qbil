<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\OrderListBackToBackResponseItem;

enum Status: string
{
    case PLANNED = 'planned';

    case PREFINALIZED = 'prefinalized';

    case FINALIZED = 'finalized';
}
