<?php

class invoices {
    //Basic activation data
    public $basic = [
        'name' => 'Invoices',
        'description' => 'Invoices and payments module for CRM function',
        'version' => '0.0.1',
        'vendor' => 'Inforfenix',
        'package' => 'sephora.basic.invoices',
        'min-sephora' => '0.0.1',
        'max-sephora' => '0.0.1',
        'icon' => '',
        'has_triggers' => 0,
        'has_hooks' => 1
    ];
    //Menus array
    public $menus = [
        0 => [
            'type' => 'top',
            'title' => 'Invoices',
            'uuid' => 'invoices_top',
            'icon' => 'fa fa-money',
            'url' => '/',
            'package' => 'sephora.basic.invoices'
        ],
        1 => [
            'type' => 'child',
            'title' => 'New Invoice',
            'uuid' => 'invoices_new-invoice',
            'url' => '/invoices/new',
            'parent' => 'invoices_top',
            'package' => 'sephora.basic.invoices'
        ],
        2 => [
            'type' => 'child',
            'title' => 'Invoices',
            'uuid' => 'invoices_list',
            'url' => '/invoices/list',
            'parent' => 'invoices_top',
            'package' => 'sephora.basic.invoices'
        ],
        3 => [
            'type' => 'child',
            'title' => 'Unpayed invoices',
            'uuid' => 'invoices_list-unpayed',
            'url' => '/invoices/list/1',
            'parent' => 'invoices_top',
            'package' => 'sephora.basic.invoices'
        ],
        4 => [
            'type' => 'child',
            'title' => 'Payed invoices',
            'uuid' => 'invoices_list-payed',
            'url' => '/invoices/list/2',
            'parent' => 'invoices_top',
            'package' => 'sephora.basic.invoices'
        ],
        5 => [
            'type' => 'child',
            'title' => 'Payments',
            'uuid' => 'invoices_list-payments',
            'url' => '/invoices/payments',
            'parent' => 'invoices_top',
            'package' => 'sephora.basic.invoices'
        ]
    ];
    //Routes data
    public $routes = [
        0 => [
            'type' => 'GET',
            'url' => '/invoices/new',
            'action' => '\App\modules\customers\core\controllers\InvoiceController@actionNew'
        ],
        1 => [
            'type' => 'GET',
            'url' => '/invoices/list',
            'action' => '\App\modules\customers\core\controllers\InvoiceController@actionList'
        ],
        2 => [
            'type' => 'GET',
            'url' => '/invoices/list/{id}',
            'action' => '\App\modules\customers\core\controllers\InvoiceController@actionFilter'
        ],
        3 => [
            'type' => 'GET',
            'url' => '/invoices/payments',
            'action' => '\App\modules\customers\core\controllers\InvoiceController@actionPayments'
        ]
    ];
   /* //Triggers
    public $triggers = [
        0 => [
            'action' => 'pageLoad'
        ]
    ];*/
    //Hooks declaration
    public $hooks = [
        0 => [
            'container' => 'headerCss',
        ]
    ];
}
