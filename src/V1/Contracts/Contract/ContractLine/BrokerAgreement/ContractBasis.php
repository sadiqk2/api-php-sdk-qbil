<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Contracts\Contract\ContractLine\BrokerAgreement;

enum ContractBasis: string
{
    case AGREED_QUANTITY = 'agreedQuantity';

    case ACTUAL_QUANTITY = 'actualQuantity';
}
