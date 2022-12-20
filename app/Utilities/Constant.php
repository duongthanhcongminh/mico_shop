<?php

namespace App\Utilities;

class Constant
{
// Cac hang so, role dung chung toan he thong

    //Order
    const order_status_ReceiveOrders = 1;
    const order_status_Unconfirmed = 2;
    const order_status_Confirmed = 3;
    const order_status_Paid = 4;
    const order_status_Processing = 5;
    const order_status_Shipping = 6;
    const order_status_Finish = 7;
    const order_status_Cancel = 8;

    public static $order_status = [
        self::order_status_ReceiveOrders => 'ReceiveOrders',
        self::order_status_Unconfirmed => 'Unconfirmed',
        self::order_status_Confirmed => 'Confirmed',
        self::order_status_Paid => 'Paid',
        self::order_status_Processing => 'Processing',
        self::order_status_Shipping => 'Shipping',
        self::order_status_Finish => 'Finish',
        self::order_status_Cancel => 'Cancel',
    ];

    //User
    const user_level_admin = 0;
    const user_level_manager = 1;
    const user_level_sale = 2;
    const user_level_warehouse = 3;
    const user_level_delivery = 4;
    const user_level_customer = 5;
    public static $user_level = [
        self::user_level_admin => 'admin',
        self::user_level_manager => 'manager',
        self::user_level_sale => 'sale',
        self::user_level_warehouse => 'warehouse',
        self::user_level_delivery => 'delivery',
        self::user_level_customer => 'customer',
    ];
}
