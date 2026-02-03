<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Me\Me;

enum Permission: string
{
    case READ_ROOT_DATA = 'read:root_data';

    case READ_ORDERS = 'read:orders';

    case READ_STOCKS = 'read:stocks';

    case READ_RELATIONS = 'read:relations';

    case READ_SALES_INVOICES = 'read:sales_invoices';

    case READ_CONTRACTS = 'read:contracts';

    case READ_CONTRACT_PRICES = 'read:contract_prices';

    case READ_PRODUCTS = 'read:products';

    case READ_TRANSPORT_ORDERS = 'read:transport_orders';

    case READ_PURCHASE_INVOICES = 'read:purchase_invoices';

    case READ_PRODUCTION_ORDERS = 'read:production_orders';

    case WRITE_PRODUCTION_ORDERS = 'write:production_orders';

    case WRITE_ORDERS = 'write:orders';

    case WRITE_ORDER_CHANGE_REQUESTS = 'write:order_change_requests';
}
