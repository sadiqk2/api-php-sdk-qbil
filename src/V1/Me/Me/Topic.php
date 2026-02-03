<?php

declare(strict_types=1);

namespace QbilPhpSDK\V1\Me\Me;

enum Topic: string
{
    case ORDER_CHANGE_REQUEST_ACCEPTED = 'order_change_request.accepted';

    case ORDER_CHANGE_REQUEST_REJECTED = 'order_change_request.rejected';

    case ORDER_BACK_TO_BACK_ORDER_LINE_CREATED = 'order.back_to_back_order_line_created';

    case ORDER_BACK_TO_BACK_ORDER_LINE_DELETED = 'order.back_to_back_order_line_deleted';

    case ORDER_BL_NUMBER_CHANGED = 'order.bl_number_changed';

    case ORDER_DESTINATION_PACKAGING_CHANGED = 'order.destination_packaging_changed';

    case ORDER_LOADING_DATE_CHANGED = 'order.loading_date_changed';

    case ORDER_LOADING_REMARKS_CHANGED = 'order.loading_remarks_changed';

    case ORDER_UNLOADING_REMARKS_CHANGED = 'order.unloading_remarks_changed';

    case ORDER_PURCHASE_FINALIZED = 'order.purchase_finalized';

    case ORDER_PURCHASE_ORDER_LINE_CREATED = 'order.purchase_order_line_created';

    case ORDER_PURCHASE_ORDER_LINE_DELETED = 'order.purchase_order_line_deleted';

    case ORDER_PURCHASE_RECEIVED_QUANTITY_CHANGED = 'order.purchase_received_quantity_changed';

    case ORDER_PURCHASE_SHIPPED_QUANTITY_CHANGED = 'order.purchase_shipped_quantity_changed';

    case ORDER_PURCHASE_UNFINALIZED = 'order.purchase_unfinalized';

    case ORDER_SALE_FINALIZED = 'order.sale_finalized';

    case ORDER_SALE_UNFINALIZED = 'order.sale_unfinalized';

    case ORDER_SALES_ORDER_LINE_CREATED = 'order.sales_order_line_created';

    case ORDER_SALES_ORDER_LINE_DELETED = 'order.sales_order_line_deleted';

    case ORDER_SOURCE_PACKAGING_CHANGED = 'order.source_packaging_changed';

    case ORDER_STOCK_TO_STOCK_ORDER_LINE_CREATED = 'order.stock_to_stock_order_line_created';

    case ORDER_STOCK_TO_STOCK_ORDER_LINE_DELETED = 'order.stock_to_stock_order_line_deleted';

    case ORDER_UNLOADING_DATE_CHANGED = 'order.unloading_date_changed';

    case ORDER_DELETED = 'order.deleted';

    case ORDER_CREATED = 'order.created';

    case PRODUCTION_ORDER_CREATED = 'production_order.created';

    case PRODUCTION_ORDER_FINALIZED = 'production_order.finalized';

    case PRODUCTION_ORDER_SOURCE_ADDED = 'production_order.source_added';

    case PRODUCTION_ORDER_SOURCE_DELETED = 'production_order.source_deleted';

    case PRODUCTION_ORDER_SOURCE_LOT_CHANGED = 'production_order.source_lot_changed';

    case PRODUCTION_ORDER_SOURCE_QUANTITY_CHANGED = 'production_order.source_quantity_changed';

    case PRODUCTION_ORDER_UNFINALIZED = 'production_order.unfinalized';

    case RELATION_CREATED = 'relation.created';

    case RELATION_DELETED = 'relation.deleted';

    case RELATION_UPDATED = 'relation.updated';
}
