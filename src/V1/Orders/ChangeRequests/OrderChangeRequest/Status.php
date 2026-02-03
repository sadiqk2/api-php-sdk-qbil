<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeRequest;

enum Status: string
{
    case PENDING = 'pending';

    case ACCEPTED = 'accepted';

    case REJECTED = 'rejected';
}
