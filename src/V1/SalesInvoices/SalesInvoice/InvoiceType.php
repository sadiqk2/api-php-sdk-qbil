<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\SalesInvoices\SalesInvoice;

enum InvoiceType: string
{
    case SALES = 'sales';

    case MISC = 'misc';

    case PROFORMA = 'proforma';
}
