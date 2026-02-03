<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\Contract;

enum ContractType: string
{
    case PURCHASE = 'purchase';

    case SALES = 'sales';
}
