<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Orders\ChangeRequests\OrderChangeInput\TransferLineChange;

/**
 * Mode: "update" modifies existing line, "add" creates new line using the referenced line's source lot.
 */
enum Mode: string
{
    case UPDATE = 'update';

    case ADD = 'add';
}
