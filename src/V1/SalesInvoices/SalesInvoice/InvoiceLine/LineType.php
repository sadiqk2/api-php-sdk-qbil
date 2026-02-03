<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\SalesInvoices\SalesInvoice\InvoiceLine;

enum LineType: string
{
    case SALES = 'sales';

    case MISC = 'misc';
}
