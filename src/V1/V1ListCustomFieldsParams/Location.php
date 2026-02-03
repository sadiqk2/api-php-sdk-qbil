<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\V1ListCustomFieldsParams;

/**
 * Filter by location(e.g. `custom-fields?location=contract` will return all custom fields placed in contract and contract-lines).
 */
enum Location: string
{
    case SUBSIDIARY = 'subsidiary';

    case PRODUCT = 'product';

    case RELATION = 'relation';

    case CONTRACT = 'contract';

    case ORDER = 'order';

    case LOT = 'lot';

    case PRODUCTION_ORDER = 'production_order';

    case PURCHASE_INVOICE = 'purchase_invoice';

    case SALES_INVOICE = 'sales_invoice';

    case TRANSPORT_ORDER = 'transport_order';

    case OWN_WAREHOUSE = 'own_warehouse';

    case FUTURE_CONTRACT = 'future_contract';

    case PAYMENT_CONDITION = 'payment_condition';

    case COUNTRY = 'country';

    case PACKAGING = 'packaging';

    case ORDER_CLAIM = 'order_claim';
}
